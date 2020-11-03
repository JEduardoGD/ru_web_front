@extends('layout')

@section('content')

    <!-- Main Content -->
    <div id="content" role="main">
        <!-- Promo Section -->
        <section class="section section-alt">
          <div class="row-fluid">
            <div class="super-hero-unit">
              <figure>
                <img alt="some image" src="images/assets/landscapes/landscape-3-1250x600.jpg">
                <figcaption class="flex-caption">
                  <h1 class="hyper animated fadeinup delayed">
                    404
                  </h1>
                </figcaption>
              </figure>
            </div>
          </div>
        </section>
        <!-- 404 content -->
        <section class="section section-padded">
          <div class="container-fluid">
            <div class="section-header">
              <h1>
                OOPS
                <small class="light">Página no encontrada</small>
              </h1>
            </div>
            <p class="lead text-center">
              La página que solicitó no pudo ser encontrada
            </p>
            <div class="text-center">
              <a class="btn btn-primary btn-large pull-center" href=".">
                <i class="icon-home"></i>
                Ir al inicio
              </a>
            </div>
          </div>
        </section>
      </div>
    </div>

@endsection