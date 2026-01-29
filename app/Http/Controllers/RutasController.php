<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RutasController extends Controller
{
    /* ---------------------------------
     |  CONTENIDO GENERAL
     |----------------------------------*/

    public function mostrarcontenidovideobienvenida()
    {
        return view('video.video');
    }

    public function mostrarContenidoUsuario()
    {
        return view('usuario.welcome');
    }

    /* ---------------------------------
     |  INSTITUCIÓN – QUIÉNES SOMOS
     |----------------------------------*/

    public function mostrarcontenidohistoria()
    {
        return view('institucion.historia');
    }

    public function mostrarcontenidosimbolosinstitucionales()
    {
        return view('institucion.simbolos');
    }

    public function mostrarcontenidomisionyvision()
    {
        return view('institucion.mision_vision');
    }

    public function mostrarcontenidoprincipiosyvarolres()
    {
        return view('institucion.principios_y_valores');
    }

    public function mostrarcontenidofilosofiainstitucional()
    {
        return view('institucion.filosofia_institucional');
    }

    /* ---------------------------------
     |  ORGANIZACIÓN
     |----------------------------------*/

    public function mostrarcontenidopoliticadecalidad()
    {
        return view('organizacion.politica_de_calidad');
    }

    public function mostrarcontenidoorganigrama()
    {
        return view('organizacion.organigrama');
    }

    public function mostrarcontenidoGrupohumanistico()
    {
        return view('organizacion.grupo_humanistico');
    }

    public function mostrarcontenidoGobiernoescolar()
    {
        return view('organizacion.gobierno_escolar');
    }

    public function mostrarcontenidoAdministrativos()
    {
        return view('organizacion.administrativos');
    }

    public function mostrarcontenidoDocentes()
    {
        return view('organizacion.docentes');
    }

    public function mostrarcontenidoDirectivos()
    {
        return view('organizacion.directivos');
    }

    /* ---------------------------------
     |  PROPUESTA EDUCATIVA
     |----------------------------------*/

    public function mostrarcontenidoenfoquepadagogico()
    {
        return view('propuesta_educativa.enfoque_pedagogico');
    }

    /* ---------------------------------
     |  NIVELES EDUCATIVOS
     |----------------------------------*/

    public function mostrarcontenidoprecolar()
    {
        return view('niveles.prescolar');
    }

    public function mostrarcontenidobasicaprimaria()
    {
        return view('niveles.basica_primaria');
    }

    public function mostrarcontenidobasicasegundaria()
    {
        return view('niveles.basica_segundaria');
    }

    public function mostrarcontenidomediaacademica()
    {
        return view('niveles.media_academica');
    }

    /* ---------------------------------
     |  VIDA ESTUDIANTIL
     |----------------------------------*/

    public function mostrarcontenidotranporte()
    {
        return view('vida_estudiantil.transporte');
    }

    public function mostrarcontenidoproyectosinstitucionales()
    {
        return view('vida_estudiantil.proyectos_institucionales');
    }

    public function mostrarcontenidoeventoscelebraciones()
    {
        return view('vida_estudiantil.eventos_celebraciones');
    }

    /* ---------------------------------
     |  ADMISIONES
     |----------------------------------*/

    public function mostrarcontenidoadmision()
    {
        return view('admision.admision');
    }
}
