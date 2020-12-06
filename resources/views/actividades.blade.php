@extends('layout')

@section('content')
    <!-- Main Content --><div id="content" role="main">
      <!-- Promo Section -->
      <section class="section section-alt">
        <div class="row-fluid">
          <div class="super-hero-unit">
            <figure>
              <img alt="some image" src="images/assets/landscapes/landscape-2-1250x300.jpg">
              <figcaption class="flex-caption">
                <h1 class="super animated fadeinup delayed">
                  Noticias
                  <span class="lighter">
                    &amp;
                  </span>
                  Actividades
                </h1>
              </figcaption>
            </figure>
          </div>
        </div>
      </section>
      <!-- Blog -->
      <section class="section section-padded">
        <div class="container-fluid">
          <div class="row-fluid">
            <div class="span9">
            @forelse ($blog_posts as $blog_post)
              <article class="post row-fluid">
                <div class="span2 post-info">
                  <div class="round-box box-small">
                    <a class="box-inner" href="post.html">
                      <img alt="some image" class="img-circle" src="images/assets/people/man-1-300x300.jpg">
                    </a>
                  </div>
                  <h5 class="text-center">
                    {{ $blog_post->author }}
                  </h5>
                  <h5 class="text-center light">
                    {{ $blog_post->date->format('d M y') }}
                  </h5>
                </div>
                <div class="span10 post-body">
                  <div class="post-head">
                    <h2 class="small-screen-center">
                      <a href="post.html">
                        {{ $blog_post->title }}
                      </a>
                    </h2>
                    <div class="post-extras">
                      @if ($blog_post->tags != "")
                        <i class="icon-tags"></i>
                        @foreach(explode(',', $blog_post->tags) as $tag)
                          <a href="#">{{$tag ?? ''}},</a>
                        @endforeach
                      @endif
                      <!--<a href="post.html#comments">5 comments</a>-->
                    </div>
                  </div>
                  @if($blog_post->typeOfHeader == 'image')
                  <figure class="post-media">
                    <a href="post.html">
                      <img alt="some image" src="{{ $blog_post->header }}">
                    </a>
                  </figure>
                  @elseif($blog_post->typeOfHeader == 'video')
                  <div class="videoWrapper">
                    {!! $blog_post->header !!}
                  </div>
                  @endif
                  {!! $blog_post->short_html !!}
                  <a class="more-link pull-right" href="actividades/{{$blog_post->link}}">
                    <strong>
                      Leer
                    </strong>
                    más
                  </a>
                </div>
              </article>
            @empty
              <p>Por el momento no hay posts</p>
            @endforelse
              <div class="row-fluid">
                <!--
                <div class="pagination pagination-small pagination-centered offset2 span10">
                  <ul>
                    <li class="disabled">
                      <a href="#">
                        <i class="icon-angle-left"></i>
                      </a>
                    </li>
                    <li class="active">
                      <a href="#">1</a>
                    </li>
                    <li>
                      <a href="#">2</a>
                    </li>
                    <li>
                      <a href="#">3</a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icon-angle-right"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                -->
              </div>
            </div>
            @include('blog-post-aside')
          </div>
        </div>
      </section>
    </div>
@endsection