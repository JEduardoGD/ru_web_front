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
                    John Doe
                  </h5>
                  <h5 class="text-center light">
                    12 Jan 2013
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
                  <div class="videoWrapper">
                    <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FPumasMx%2Fvideos%2F436384950706214%2F&show_text=0&width=560" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                  </div>
                  <!--
                  <div class="videoWrapper">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/OikIfj7Hh9Y" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                -->
                  <!--
                  <div class="videoWrapper">
                    <iframe allowFullScreen="" frameborder="0" height="4 0" mozallowfullscreen="" src="http://player.vimeo.com/video/79713172?title=0&amp;amp;byline=0&amp;amp;color=42576a" webkitAllowFullScreen="" width="800"></iframe>
                  </div>
                -->
                  <!--
                  <figure class="post-media">
                    <a href="post.html">
                      <img alt="some image" src="{{ env('BUCKET_HTTP_URL') }}/blog/{{ $blog_post->id }}/headers/{{ $blog_post->image }}">
                    </a>
                  </figure>-->
                  {!! $blog_post->short_html !!}
                  <a class="more-link pull-right" href="post.html">
                    <strong>
                      Read
                    </strong>
                    More
                  </a>
                </div>
              </article>
            @empty
              <p>Por el momento no hay posts</p>
            @endforelse
              <article class="post row-fluid">
                <div class="span2 post-info">
                  <div class="round-box box-small">
                    <a class="box-inner" href="post.html">
                      <img alt="some image" class="img-circle" src="images/assets/people/man-2-300x300.jpg">
                    </a>
                  </div>
                  <h5 class="text-center">
                    Samuel Doe
                  </h5>
                  <h5 class="text-center light">
                    10 Dec 2012
                  </h5>
                </div>
                <div class="span10 post-body">
                  <div class="post-head">
                    <h2 class="small-screen-center">
                      <a href="post.html">
                        They called me Mr Glass.
                      </a>
                    </h2>
                    <div class="post-extras">
                      <i class="icon-tags"></i>
                      <a href="#">Rails,</a>
                      <a href="#">Web Design,</a>
                      <a href="#">Bootstrap</a>
                      <i class="icon-bookmark"></i>
                      <a href="#">News,</a>
                      <a href="#">Business</a>
                      <i class="icon-comments"></i>
                      <a href="post.html#comments">5 comments</a>
                    </div>
                  </div>
                  <figure class="post-media">
                    <a href="post.html">
                      <img alt="some image" src="images/assets/landscapes/landscape-5-800x400.jpg">
                    </a>
                  </figure>
                  <p>
                    Phasellus quis tortor nulla. Mauris dictum dui et est iaculis consequat. Pellentesque facilisis faucibus arcu, eu fermentum tortor convallis a. n libero, rutrum quis blandit sit amet, cursus sit amet mi.
                  </p>
                  <p>
                    Ut non velit tortor. Aliquam dictum mattis leo, vel laoreet turpis viverra sit amet. Integer fermentum augue at risus pretium id porttitor nisi pulvinar. Aliquam imperdiet quam ligula. Nulla facilisi. Duis eu arcu magna. Etiam neque leo, sodales eget ornare mollis, posuere a felis.
                  </p>
                  <a class="more-link pull-right" href="post.html">
                    <strong>
                      Read
                    </strong>
                    More
                  </a>
                </div>
              </article>
              <article class="post row-fluid">
                <div class="span2 post-info">
                  <div class="round-box box-small">
                    <a class="box-inner" href="post.html">
                      <img alt="some image" class="img-circle" src="images/assets/people/woman-1-300x300.jpg">
                    </a>
                  </div>
                  <h5 class="text-center">
                    Sara Doe
                  </h5>
                  <h5 class="text-center light">
                    10 Dec 2012
                  </h5>
                </div>
                <div class="span10 post-body">
                  <div class="post-head">
                    <h2 class="small-screen-center">
                      <a href="post.html">
                        Your bones don't break, mine do.
                      </a>
                    </h2>
                    <div class="post-extras">
                      <i class="icon-tags"></i>
                      <a href="#">Django,</a>
                      <a href="#">Web Design,</a>
                      <a href="#">Bootstrap</a>
                      <i class="icon-bookmark"></i>
                      <a href="#">News,</a>
                      <a href="#">Business</a>
                      <i class="icon-comments"></i>
                      <a href="post.html#comments">5 comments</a>
                    </div>
                  </div>
                  <div class="videoWrapper">
                    <iframe allowFullScreen="" frameborder="0" height="4 0" mozallowfullscreen="" src="http://player.vimeo.com/video/17914974?title=0&amp;amp;byline=0&amp;amp;color=42576a" webkitAllowFullScreen="" width="800"></iframe>
                  </div>
                  <p>
                    Phasellus quis tortor nulla. Mauris dictum dui et est iaculis consequat. Pellentesque facilisis faucibus arcu, eu fermentum tortor convallis a. n libero, rutrum quis blandit sit amet, cursus sit amet mi. Ut non velit tortor. Aliquam dictum mattis leo, vel laoreet turpis viverra sit amet. Integer fermentum augue at risus pretium id porttitor nisi pulvinar.
                  </p>
                  <p>
                    Aliquam imperdiet quam ligula. Nulla facilisi. Duis eu arcu magna. Etiam neque leo, sodales eget ornare mollis, posuere a felis.
                  </p>
                  <a class="more-link pull-right" href="post.html">
                    <strong>
                      Read
                    </strong>
                    More
                  </a>
                </div>
              </article>
              <div class="row-fluid">
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
              </div>
            </div>
            <aside class="span3 sidebar">
              <div class="sidebar-widget widget_search">
                <form>
                  <div class="input-append row-fluid">
                    <input class="span12" placeholder="search" type="text">
                    <i class="icon-search"></i>
                    <button class="btn hide" type="submit">
                      search
                    </button>
                  </div>
                </form>
              </div>
              <div class="sidebar-widget widget_categories">
                <h3 class="sidebar-header">Categories</h3>
                <ul>
                  <li>
                    <h4>
                      <a href="#">
                        Company
                      </a>
                    </h4>
                  </li>
                  <li>
                    <h4>
                      <a href="#">
                        News
                      </a>
                    </h4>
                  </li>
                  <li>
                    <h4>
                      <a href="#">
                        Services
                      </a>
                    </h4>
                  </li>
                  <li>
                    <h4>
                      <a href="#">
                        Web Design
                      </a>
                    </h4>
                  </li>
                </ul>
              </div>
              <div class="sidebar-widget widget_tag_cloud">
                <h3 class="sidebar-header">Popular Tags</h3>
                <ul>
                  <li>
                    <a href="post.html">
                      <span>Mountains</span>
                    </a>
                  </li>
                  <li>
                    <a href="post.html">
                      <span>Winter</span>
                    </a>
                  </li>
                  <li>
                    <a href="post.html">
                      <span>Sports</span>
                    </a>
                  </li>
                  <li>
                    <a href="post.html">
                      <span>Boating</span>
                    </a>
                  </li>
                  <li>
                    <a href="post.html">
                      <span>Recreation</span>
                    </a>
                  </li>
                  <li>
                    <a href="post.html">
                      <span>Tourism</span>
                    </a>
                  </li>
                  <li>
                    <a href="post.html">
                      <span>Nature</span>
                    </a>
                  </li>
                  <li>
                    <a href="post.html">
                      <span>Alps</span>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="sidebar-widget widget_recent_entries">
                <h3 class="sidebar-header">Recent posts</h3>
                <ul>
                  <li>
                    <div class="row-fluid">
                      <div class="span3">
                        <div class="round-box box-mini">
                          <a class="box-inner" href="post.html">
                            <img alt="some image" class="img-circle" src="images/assets/landscapes/landscape-1-300x300.jpg">
                          </a>
                        </div>
                      </div>
                      <div class="span9">
                        <h4>
                          <a href="post.html">
                            Nunc vehicula dapibus
                          </a>
                        </h4>
                        <h5 class="light">
                          12 Feb 2013
                        </h5>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="row-fluid">
                      <div class="span3">
                        <div class="round-box box-mini">
                          <a class="box-inner" href="post.html">
                            <img alt="some image" class="img-circle" src="images/assets/landscapes/landscape-2-300x300.jpg">
                          </a>
                        </div>
                      </div>
                      <div class="span9">
                        <h4>
                          <a href="post.html">
                            Fusce a metus eu diam
                          </a>
                        </h4>
                        <h5 class="light">
                          21 Jan 2013
                        </h5>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="row-fluid">
                      <div class="span3">
                        <div class="round-box box-mini">
                          <a class="box-inner" href="post.html">
                            <img alt="some image" class="img-circle" src="images/assets/landscapes/landscape-3-300x300.jpg">
                          </a>
                        </div>
                      </div>
                      <div class="span9">
                        <h4>
                          <a href="post.html">
                            Quisque lacus augue
                          </a>
                        </h4>
                        <h5 class="light">
                          13 dec 2012
                        </h5>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="sidebar-widget widget_archive">
                <h3 class="sidebar-header">Archive</h3>
                <ul>
                  <li>
                    <h4>
                      <a href="#">
                        January
                        <span class="light">
                          (12)
                        </span>
                      </a>
                    </h4>
                  </li>
                  <li>
                    <h4>
                      <a href="#">
                        December
                        <span class="light">
                          (7)
                        </span>
                      </a>
                    </h4>
                  </li>
                  <li>
                    <h4>
                      <a href="#">
                        October
                        <span class="light">
                          (4)
                        </span>
                      </a>
                    </h4>
                  </li>
                  <li>
                    <h4>
                      <a href="#">
                        September
                        <span class="light">
                          (9)
                        </span>
                      </a>
                    </h4>
                  </li>
                  <li>
                    <h4>
                      <a href="#">
                        August
                        <span class="light">
                          (13)
                        </span>
                      </a>
                    </h4>
                  </li>
                </ul>
              </div>
              <div class="sidebar-widget widget_twitter">
                <h3 class="sidebar-header">Twitter feed</h3>
                <div class="twitter-feed"></div>
              </div>
            </aside>
          </div>
        </div>
      </section>
    </div>
@endsection