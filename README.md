<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).










<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Check If The Application Is Under Maintenance
|--------------------------------------------------------------------------
*/



if (file_exists($maintenance = __DIR__.'/../laravel_app/storage/framework/maintenance.php')) {
    require $maintenance;
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
*/

require __DIR__.'/../laravel_app/vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
*/

$app = require_once __DIR__.'/../laravel_app/bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);






Seo  vistade Inicio debajo de bienbenida

<section class="seo-text-section">
  <h2>Colegio privado en Neiva, Huila</h2>
  <p>
    El Gimnasio Humanístico del Alto Magdalena es un colegio privado en Neiva, Huila,
    con una propuesta educativa integral que abarca preescolar, básica primaria,
    básica secundaria y media académica. Nuestro modelo pedagógico humanista fortalece
    los valores, el pensamiento crítico y la excelencia académica.
  </p>

  <p>
    Somos una institución reconocida por su compromiso con la formación integral
    de niños y jóvenes, ofreciendo educación de calidad en un entorno seguro,
    innovador y con proyección al futuro.
  </p>
</section>




SEO PRESCOLAR TEXTOS LARGOS
<section class="seo-text-section">
  <div class="container">
    <h2>Preescolar en Neiva con enfoque humanista</h2>

    <p>
      Nuestro programa de educación inicial y preescolar en Neiva está diseñado para
      acompañar a los niños en sus primeras etapas de aprendizaje, fortaleciendo su
      desarrollo emocional, social, comunicativo y cognitivo en un entorno seguro,
      afectivo y estimulante.
    </p>

    <p>
      En el Gimnasio Humanístico del Alto Magdalena promovemos el aprendizaje a través
      del juego, la exploración y la interacción, respetando los ritmos individuales
      de cada niño y fomentando valores, autonomía y pensamiento creativo desde la
      primera infancia.
    </p>
  </div>
</section>



SEO BASICA PRIMARIA

<section class="seo-text-section">
  <div class="container">
    <h2>Educación Básica Primaria en Neiva</h2>

    <p>
      Nuestro programa de educación básica primaria en Neiva está orientado al
      desarrollo integral de los estudiantes, fortaleciendo sus competencias académicas,
      sociales y emocionales a través de una formación humanística basada en valores,
      disciplina y pensamiento crítico.
    </p>

    <p>
      En el Gimnasio Humanístico del Alto Magdalena acompañamos a los niños en su proceso
      de aprendizaje desde los primeros grados de primaria, brindando una educación de
      calidad que promueve la autonomía, la convivencia y el amor por el conocimiento.
    </p>
  </div>
</section>


SEO EDUCACION SEGUNDARIA

<p class="objetivos-intro">
    La Educación Básica Secundaria en el Gimnasio Humanístico del Alto Magdalena en Neiva
    fortalece las competencias académicas, científicas, sociales y humanas, preparando a
    los estudiantes para la educación media y los desafíos de la vida.
</p>


