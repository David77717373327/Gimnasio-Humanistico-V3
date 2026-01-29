<?php

use App\Http\Controllers\RutasController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Ruta principal
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| Rutas públicas – Usuario
|--------------------------------------------------------------------------
*/
Route::get('/usuario/inicio', [RutasController::class, 'mostrarContenidoUsuario'])
    ->name('usuario.welcome');

Route::get('/video-bienvenida', [RutasController::class, 'mostrarcontenidovideobienvenida'])
    ->name('video.bienvenida');

/*
|--------------------------------------------------------------------------
| Información institucional
|--------------------------------------------------------------------------
*/
Route::get('/historia', [RutasController::class, 'mostrarcontenidohistoria'])
    ->name('historia');

Route::get('/mision-vision', [RutasController::class, 'mostrarcontenidomisionyvision'])
    ->name('mision.vision');

Route::get('/filosofia-institucional', [RutasController::class, 'mostrarcontenidofilosofiainstitucional'])
    ->name('filosofia.institucional');

Route::get('/simbolos-institucionales', [RutasController::class, 'mostrarcontenidosimbolosinstitucionales'])
    ->name('simbolos.institucionales');

Route::get('/principios-valores', [RutasController::class, 'mostrarcontenidoprincipiosyvarolres'])
    ->name('principios.valores');

Route::get('/politica-calidad', [RutasController::class, 'mostrarcontenidopoliticadecalidad'])
    ->name('politica.calidad');

/*
|--------------------------------------------------------------------------
| Organización institucional
|--------------------------------------------------------------------------
*/
Route::get('/organigrama', [RutasController::class, 'mostrarcontenidoorganigrama'])
    ->name('organigrama');

Route::get('/grupo-humanistico', [RutasController::class, 'mostrarcontenidoGrupohumanistico'])
    ->name('grupo.humanistico');

Route::get('/gobierno-escolar', [RutasController::class, 'mostrarcontenidoGobiernoescolar'])
    ->name('gobierno.escolar');

Route::get('/administrativos', [RutasController::class, 'mostrarcontenidoAdministrativos'])
    ->name('administrativos');

Route::get('/docentes', [RutasController::class, 'mostrarcontenidoDocentes'])
    ->name('docentes');

Route::get('/directivos', [RutasController::class, 'mostrarcontenidoDirectivos'])
    ->name('directivos');

/*
|--------------------------------------------------------------------------
| Niveles educativos
|--------------------------------------------------------------------------
*/
Route::get('/preescolar', [RutasController::class, 'mostrarcontenidoprecolar'])
    ->name('preescolar');

Route::get('/basica-primaria', [RutasController::class, 'mostrarcontenidobasicaprimaria'])
    ->name('basica.primaria');

Route::get('/basica-secundaria', [RutasController::class, 'mostrarcontenidobasicasegundaria'])
    ->name('basica.secundaria');

Route::get('/media-academica', [RutasController::class, 'mostrarcontenidomediaacademica'])
    ->name('media.academica');

/*
|--------------------------------------------------------------------------
| Enfoque pedagógico
|--------------------------------------------------------------------------
*/
Route::get('/enfoque-pedagogico', [RutasController::class, 'mostrarcontenidoenfoquepadagogico'])
    ->name('enfoque.pedagogico');

/*
|--------------------------------------------------------------------------
| Vida estudiantil
|--------------------------------------------------------------------------
*/
Route::get('/transporte', [RutasController::class, 'mostrarcontenidotranporte'])
    ->name('transporte');

Route::get('/proyectos-institucionales', [RutasController::class, 'mostrarcontenidoproyectosinstitucionales'])
    ->name('proyectos.institucionales');

Route::get('/eventos-celebraciones', [RutasController::class, 'mostrarcontenidoeventoscelebraciones'])
    ->name('eventos.celebraciones');

/*
|--------------------------------------------------------------------------
| Admisiones
|--------------------------------------------------------------------------
*/
Route::get('/admision', [RutasController::class, 'mostrarcontenidoadmision'])
    ->name('admision');
