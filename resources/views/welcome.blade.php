@extends('layout')

@section('content')
    <!-- Main Content -->
    <div id="content" role="main">
      <!-- Promo Section -->
      <section class="section section-alt">
        <div class="row-fluid">
          <div class="flexslider" data-flex-animation="slide" data-flex-controlsalign="center" data-flex-controlsposition="inside" data-flex-directions="hide" data-flex-speed="7000" id="intro">
            <ul class="slides">
              <li>
                <div class="super-hero-unit">
                  <figure>
                    <img alt="some image" src="images/assets/landscapes/landscape-2-1250x420.jpg">
                    <figcaption class="flex-caption">
                      <h1 class="super">
                        Bold
                        <span class="lighter">
                          &amp;
                        </span>
                        Beautiful
                      </h1>
                    </figcaption>
                  </figure>
                </div>
              </li>
              <li>
                <div class="super-hero-unit">
                  <figure>
                    <img alt="some image" src="images/assets/landscapes/landscape-3-1250x420.jpg">
                    <figcaption class="flex-caption">
                      <h1 class="super">
                        Creative
                        <span class="lighter">
                          &amp;
                        </span>
                        Responsive
                      </h1>
                    </figcaption>
                  </figure>
                </div>
              </li>
              <li>
                <div class="super-hero-unit">
                  <figure>
                    <img alt="some image" src="images/assets/landscapes/landscape-1-1250x420.jpg">
                    <figcaption class="flex-caption">
                      <h1 class="super">
                        Adaptive
                        <span class="lighter">
                          &amp;
                        </span>
                        Awesome
                      </h1>
                    </figcaption>
                  </figure>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </section>
    </div>
  </div>
@endsection