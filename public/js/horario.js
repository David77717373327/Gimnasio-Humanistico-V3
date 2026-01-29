// horario.js
// Mínimo de utilidades + manejo CRUD con fetch
document.addEventListener('DOMContentLoaded', () => {
  const cfg = window.HORARIOS_CONFIG || {};
  const apiList = cfg.apiList;
  const apiStore = cfg.apiStore;
  const apiItemBase = cfg.apiItem;
  const csrf = cfg.csrf;

  // DOM
  const grid = document.getElementById('horario-grid');
  const filtroGrado = document.getElementById('filtro-grado');
  const filtroProfesor = document.getElementById('filtro-profesor');
  const btnRefresh = document.getElementById('btn-refresh');
  const btnAdd = document.getElementById('btn-add');

  const modal = document.getElementById('modal');
  const form = document.getElementById('form-horario');
  const modalTitle = document.getElementById('modal-title');
  const btnCancel = document.getElementById('btn-cancel');
  const btnSave = document.getElementById('btn-save');
  const btnDelete = document.getElementById('btn-delete');
  const formError = document.getElementById('form-error');

  // config timeline times (from attributes)
  const startTime = grid.dataset.start || '07:00';
  const endTime = grid.dataset.end || '19:00';
  const minutesPerPixel = computeScale(startTime, endTime);

  let horariosCache = []; // array de objetos desde API

  // initial render
  mountGrid();
  loadAndRender();

  // eventos
  btnRefresh.addEventListener('click', (e) => loadAndRender());
  btnAdd.addEventListener('click', () => openModalForNew());
  filtroGrado.addEventListener('change', applyFiltersAndRender);
  filtroProfesor.addEventListener('change', applyFiltersAndRender);

  btnCancel.addEventListener('click', closeModal);
  form.addEventListener('submit', submitForm);
  btnDelete.addEventListener('click', deleteCurrent);

  // --- funciones ---
  function computeScale(start, end) {
    const [sh, sm] = start.split(':').map(Number);
    const [eh, em] = end.split(':').map(Number);
    const minutes = (eh*60+em) - (sh*60+sm);
    // choose base height: e.g., 40px per 30min => minutesPerPixel inverse
    // We'll compute pixels per minute: total pixels base 40 * (minutes / 30)
    const base30 = 40; // pixel height for 30 minutes
    const pxPerMinute = base30 / 30;
    return pxPerMinute;
  }

  function mountGrid(){
    // clear
    grid.innerHTML = '';

    // column 1: time axis
    const timeAxis = document.createElement('div');
    timeAxis.className = 'time-axis';
    const [sh, sm] = startTime.split(':').map(Number);
    const [eh, em] = endTime.split(':').map(Number);
    let minutes = sh*60 + sm;
    const endMinutes = eh*60 + em;

    // create time slots per 30 minutes
    while(minutes < endMinutes){
      const el = document.createElement('div');
      el.className = 'time-slot';
      const hh = String(Math.floor(minutes/60)).padStart(2,'0');
      const mm = String(minutes%60).padStart(2,'0');
      el.textContent = `${hh}:${mm}`;
      timeAxis.appendChild(el);
      minutes += 30;
    }

    // column 2: days area
    const daysArea = document.createElement('div');
    daysArea.className = 'days-area';
    // create 5 columns
    const dayNames = ['Lunes','Martes','Miércoles','Jueves','Viernes'];
    for(let i=0;i<5;i++){
      const col = document.createElement('div');
      col.className = 'day-column';
      col.dataset.day = dayNames[i];
      col.style.minHeight = `${ ( ( ( (endTimeSplitToMinutes(endTime) - endTimeSplitToMinutes(startTime)) * minutesPerPixel ) ) ) }px`;
      daysArea.appendChild(col);
    }

    grid.appendChild(timeAxis);
    grid.appendChild(daysArea);
  }

  function endTimeSplitToMinutes(t){
    const [h,m] = t.split(':').map(Number);
    return h*60 + m;
  }

  function loadAndRender(){
    fetch(apiList, { credentials: 'same-origin' })
      .then(r => r.json())
      .then(data => {
        if(!data.success){
          throw new Error(data.message || 'Error al cargar horarios');
        }
        horariosCache = data.horarios || [];
        applyFiltersAndRender();
      })
      .catch(err => {
        console.error(err);
        alert('Error al cargar horarios. Revisa la consola.');
      });
  }

  function applyFiltersAndRender(){
    const gId = filtroGrado.value;
    const pId = filtroProfesor.value;
    let toRender = horariosCache.slice();

    if(gId) toRender = toRender.filter(h => String(h.grado_id) === String(gId));
    if(pId) toRender = toRender.filter(h => String(h.profesor_id) === String(pId));

    renderHorario(toRender);
  }

  function renderHorario(list){
    // clear day columns
    const daysCols = grid.querySelectorAll('.day-column');
    daysCols.forEach(c => c.innerHTML = '');

    // place each class
    list.forEach(h => {
      const col = Array.from(daysCols).find(c => c.dataset.day === h.dia);
      if(!col) return;

      const block = document.createElement('div');
      block.className = 'class-block';
      // calculate top & height
      const topPx = minutesFromStart(h.hora_inicio) * minutesPerPixel;
      const heightPx = ( minutesBetween(h.hora_inicio, h.hora_fin) ) * minutesPerPixel;
      block.style.top = `${topPx}px`;
      block.style.height = `${Math.max(28, heightPx - 2)}px`; // ensure visible

      block.dataset.id = h.id;
      block.innerHTML = `<div class="meta">${h.asignatura_nombre} · ${h.grado_nombre}</div>
                         <div class="meta">${h.hora_inicio} - ${h.hora_fin}</div>
                         <div style="opacity:0.92; font-size:11px; font-weight:600">${h.profesor_nombre || ''}</div>`;

      block.addEventListener('click', (ev) => {
        ev.stopPropagation();
        openModalForEdit(h.id);
      });

      col.appendChild(block);
    });
  }

  function minutesFromStart(timeStr){
    const [h,m] = timeStr.split(':').map(Number);
    const start = startTime.split(':').map(Number);
    return (h*60+m) - (start[0]*60 + start[1]);
  }
  function minutesBetween(a,b){
    const [ah,am] = a.split(':').map(Number);
    const [bh,bm] = b.split(':').map(Number);
    return (bh*60 + bm) - (ah*60 + am);
  }

  // Modal helpers
  function openModalForNew(){
    form.reset();
    document.getElementById('h-id').value = '';
    modalTitle.textContent = 'Nueva clase';
    btnDelete.classList.add('hidden');
    formError.classList.add('hidden');
    showModal();
  }

  function openModalForEdit(id){
    const item = horariosCache.find(h => Number(h.id) === Number(id));
    if(!item) return alert('Clase no encontrada');

    document.getElementById('h-id').value = item.id;
    document.getElementById('h-grado').value = item.grado_id;
    document.getElementById('h-asignatura').value = item.asignatura_id;
    document.getElementById('h-profesor').value = item.profesor_id || '';
    document.getElementById('h-dia').value = item.dia;
    document.getElementById('h-inicio').value = item.hora_inicio;
    document.getElementById('h-fin').value = item.hora_fin;

    modalTitle.textContent = 'Editar clase';
    btnDelete.classList.remove('hidden');
    formError.classList.add('hidden');
    showModal();
  }

  function showModal(){ modal.classList.remove('hidden'); }
  function closeModal(){ modal.classList.add('hidden'); }

  // submit (create/update)
  function submitForm(e){
    e.preventDefault();
    formError.classList.add('hidden');

    const formData = new FormData(form);
    const payload = Object.fromEntries(formData.entries());
    const id = payload.id || null;

    // basic client validation
    if(!payload.grado_id || !payload.asignatura_id || !payload.dia || !payload.hora_inicio || !payload.hora_fin){
      formError.textContent = 'Complete todos los campos obligatorios';
      formError.classList.remove('hidden');
      return;
    }
    if(payload.hora_fin <= payload.hora_inicio){
      formError.textContent = 'La hora fin debe ser posterior a la hora inicio';
      formError.classList.remove('hidden');
      return;
    }

    const url = id ? `${apiItemBase}/${id}` : apiStore;
    const method = id ? 'PUT' : 'POST';

    fetch(url, {
      method,
      headers: {
        'Accept': 'application/json',
        'X-CSRF-TOKEN': csrf,
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(payload),
      credentials: 'same-origin'
    })
    .then(r => r.json())
    .then(data => {
      if(!data.success){
        formError.textContent = data.message || (data.errors ? JSON.stringify(data.errors) : 'Error');
        formError.classList.remove('hidden');
        return;
      }
      // actualizar cache local: si create -> push, si update -> replace
      if(method === 'POST'){
        horariosCache.push(data.horario);
      } else {
        const idx = horariosCache.findIndex(h => String(h.id) === String(data.horario.id));
        if(idx >= 0) horariosCache[idx] = data.horario;
      }
      applyFiltersAndRender();
      closeModal();
    })
    .catch(err => {
      console.error(err);
      formError.textContent = 'Error en la petición. Revisa la consola.';
      formError.classList.remove('hidden');
    });
  }

  // delete
  function deleteCurrent(){
    const id = document.getElementById('h-id').value;
    if(!id) return;
    if(!confirm('Eliminar esta clase?')) return;

    fetch(`${apiItemBase}/${id}`, {
      method: 'DELETE',
      headers: { 'X-CSRF-TOKEN': csrf, 'Accept':'application/json' },
      credentials: 'same-origin'
    })
    .then(r => r.json())
    .then(data => {
      if(!data.success) return alert(data.message || 'Error al eliminar');
      // remove from cache
      horariosCache = horariosCache.filter(h => String(h.id) !== String(id));
      applyFiltersAndRender();
      closeModal();
    })
    .catch(err => {
      console.error(err);
      alert('Error al eliminar. Revisa la consola.');
    });
  }
});
