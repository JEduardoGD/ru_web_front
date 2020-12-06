@extends('layout')

@section('content')
    <!-- Main Content -->
    <div id="content" role="main">
      <!-- Promo Section -->
      <section class="section section-alt">
        <div class="row-fluid">
          <div class="super-hero-unit">
            <figure>
              <img alt="some image" src="/images/assets/landscapes/landscape-2-1250x300.jpg">
              <figcaption class="flex-caption">
                <h1 class="super animated fadeinup delayed">
                  News
                  <span class="lighter">
                    &amp;
                  </span>
                  Posts
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
              <article class="post row-fluid">
                <div class="span2 post-info">
                  <div class="round-box box-small">
                    <a class="box-inner" href="post.html">
                      <img alt="some image" class="img-circle" src="/images/assets/people/man-1-300x300.jpg">
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
                        You think water moves fast?
                      </a>
                    </h2>
                    <div class="post-extras small-screen-center">
                      <i class="icon-tags"></i>
                      <a href="#">PHP,</a>
                      <a href="#">Web Design,</a>
                      <a href="#">Bootstrap</a>
                      <i class="icon-bookmark"></i>
                      <a href="#">News,</a>
                      <a href="#">Business</a>
                      <i class="icon-comments"></i>
                      <a href="#comments">5 comments</a>
                    </div>
                  </div>
                  <div class="flexslider post-media" data-flex-animation="slide" data-flex-controlsalign="center" data-flex-controlsposition="inside" data-flex-directions="hide" data-flex-speed="7000" id="post">
                    <ul class="slides">
                      <li>
                        <figure>
                          <img alt="some image" src="/images/assets/landscapes/landscape-3-800x400.jpg">
                          <figcaption>
                            <p>
                              Lorem ipsum dolor sit amet
                            </p>
                          </figcaption>
                        </figure>
                      </li>
                      <li>
                        <figure>
                          <img alt="some image" src="/images/assets/landscapes/landscape-1-800x400.jpg">
                          <figcaption>
                            <p>
                              Duis aute irure dolor in reprehenderit
                            </p>
                          </figcaption>
                        </figure>
                      </li>
                      <li>
                        <figure>
                          <img alt="some image" src="/images/assets/landscapes/landscape-6-800x400.jpg">
                          <figcaption>
                            <p>
                              Mauris aliquet ultricies ante
                            </p>
                          </figcaption>
                        </figure>
                      </li>
                    </ul>
                  </div>
                  <p class="lead">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                  <p>
                    Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                  </p>
                  <blockquote>
                    Mauris aliquet ultricies ante, non faucibus ante gravida sed. Sed ultrices pellentesque purus, vulputate volutpat ipsum hendrerit sed neque sed sapien rutrum laoreet justo ultrices. In pellentesque lorem condimentum dui morbi pulvinar dui non quam pretium ut lacinia tortor
                    <small>
                      Sam Doe
                      <cite title="Source Title">biz inc</cite>
                    </small>
                  </blockquote>
                  <p>
                    Sed in neque accumsan sapien viverra suscipit at eget mauris. Integer ornare pharetra ultricies. Fusce hendrerit, tellus sagittis placerat ornare, libero felis mollis diam, a ultricies arcu quam porttitor velit. Praesent pharetra neque id erat ultricies at facilisis felis vehicula. Proin aliquam molestie pharetra. Ut in porta lacus.
                  </p>
                  <p>
                    Praesent aliquet pharetra elit, quis suscipit risus vulputate vel. Nullam nisi nibh, tincidunt quis vestibulum sit amet, aliquam et risus. Ut blandit vulputate ipsum, non congue ligula bibendum ac. Fusce et nisl at turpis eleifend congue. Pellentesque consectetur mauris in urna dapibus cursus. Pellentesque tincidunt, eros ut malesuada varius, nibh justo tempus urna, aliquam hendrerit orci erat et lectus.
                  </p>
                  <div class="row-fluid">
                    <div class="span6">
                      <p class="lead">
                        Phasellus sollicitudin viverra nunc volutpat tincidunt.
                      </p>
                      <p>
                        In in purus nisi, sed pulvinar elit. Pellentesque mollis, ipsum a elementum porta, turpis sem volutpat lectus, ac bibendum nisi felis et tellus. Mauris feugiat urna nec velit laoreet tempus. Sed eu hendrerit tellus. Sed dapibus nunc vel mi hendrerit pulvinar. Nulla semper, urna vel gravida tincidunt, diam ipsum porta nibh, ac dictum urna lorem ac quam. Nulla at leo justo. Vestibulum vel quam nunc, ac mollis purus. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.
                      </p>
                    </div>
                    <div class="span6">
                      <img class="img-polaroid" src="/images/assets/landscapes/landscape-7-300x300.jpg">
                    </div>
                  </div>
                </div>
              </article>
              <nav class="post-navigation" id="nav-below">
                <ul class="pager">
                  <li class="previous">
                    <a href="#" rel="prev">
                      <i class="icon-angle-left"></i>
                      Older post
                    </a>
                  </li>
                  <li class="next">
                    <a href="#" rel="next">
                      Newer Post
                      <i class="icon-angle-right"></i>
                    </a>
                  </li>
                </ul>
              </nav>
              <div class="comments" id="comments">
                <h3 class="small-screen-center">
                  5 comments
                </h3>
                <div class="media media-comment">
                  <div class="round-box box-mini pull-left">
                    <a class="box-inner" href="#">
                      <img alt="" class="media-objects img-circle" src="/images/assets/people/man-1-300x300.jpg">
                    </a>
                  </div>
                  <div class="media-body">
                    <div class="media-inner">
                      <h5 class="media-heading">
                        John Doe, 12 Sep 2012.
                        <a class="comment-reply pull-right" href="#">
                          reply
                        </a>
                      </h5>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="media media-comment">
                  <div class="round-box box-mini pull-left">
                    <a class="box-inner" href="#">
                      <img alt="" class="media-objects img-circle" src="/images/assets/people/woman-1-300x300.jpg">
                    </a>
                  </div>
                  <div class="media-body">
                    <div class="media-inner">
                      <h5 class="media-heading">
                        Mary Doe, 12 Sep 2012.
                        <a class="comment-reply pull-right" href="#">
                          reply
                        </a>
                      </h5>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                      </p>
                    </div>
                    <div class="media media-comment">
                      <div class="round-box box-mini pull-left">
                        <a class="box-inner" href="#">
                          <img alt="" class="media-objects img-circle" src="/images/assets/people/man-2-300x300.jpg">
                        </a>
                      </div>
                      <div class="media-body">
                        <div class="media-inner">
                          <h5 class="media-heading">
                            John Langan, 12 Sep 2012.
                            <a class="comment-reply pull-right" href="#">
                              reply
                            </a>
                          </h5>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                          </p>
                        </div>
                        <div class="media media-comment">
                          <div class="round-box box-mini pull-left">
                            <a class="box-inner" href="#">
                              <img alt="" class="media-objects img-circle" src="/images/assets/people/man-3-300x300.jpg">
                            </a>
                          </div>
                          <div class="media-body">
                            <div class="media-inner">
                              <h5 class="media-heading">
                                Kid Doe, 12 Sep 2012.
                                <a class="comment-reply pull-right" href="#">
                                  reply
                                </a>
                              </h5>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="media media-comment">
                  <div class="round-box box-mini pull-left">
                    <a class="box-inner" href="#">
                      <img alt="" class="media-objects img-circle" src="/images/assets/people/man-4-300x300.jpg">
                    </a>
                  </div>
                  <div class="media-body">
                    <div class="media-inner">
                      <h5 class="media-heading">
                        Chris Doe, 12 Sep 2012.
                        <a class="comment-reply pull-right" href="#">
                          reply
                        </a>
                      </h5>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="comments-form">
                <h3 class="comment-form small-screen-center">
                  Add your comment
                </h3>
                <form>
                  <fieldset>
                    <div class="control-group">
                      <div class="controls">
                        <input class="input-xlarge" id="name" placeholder="Your name *" type="text">
                      </div>
                    </div>
                    <div class="control-group">
                      <div class="controls">
                        <input class="input-xlarge" id="email" placeholder="Your email *" type="text">
                      </div>
                    </div>
                    <div class="control-group">
                      <div class="controls">
                        <textarea class="input-xxlarge" id="message" placeholder="Your message" rows="5"></textarea>
                      </div>
                    </div>
                    <div class="control-group">
                      <div class="controls small-screen-center">
                        <button class="btn btn-primary" type="submit">Add comment</button>
                      </div>
                    </div>
                  </fieldset>
                </form>
              </div>
            </div>
            @include('blog-post-aside')
          </div>
        </div>
      </section>
      <!-- Related posts News -->
      <section class="section section-alt section-padded">
        <div class="container-fluid">
          <div class="section-header">
            <h1>
              Related
              <small class="light">posts?</small>
            </h1>
          </div>
          <ul class="unstyled row-fluid">
            <li class="span4">
              <div class="row-fluid">
                <div class="span4">
                  <div class="round-box box-small">
                    <a class="box-inner" href="#">
                      <img alt="some image" class="img-circle" src="/images/assets/landscapes/landscape-3-300x300.jpg">
                    </a>
                  </div>
                  <h5 class="text-center light">
                    12 dec 2012
                  </h5>
                </div>
                <div class="span8">
                  <h3>
                    <a href="#">
                      A normal post
                    </a>
                  </h3>
                  <p>
                    Curabitur euismod ultrices purus eget vehicula. Cras interdum est sed dui congue imperdiet. Nulla nisi justo, lacinia eget scelerisque et, porttitor in ante.
                  </p>
                </div>
              </div>
            </li>
            <li class="span4">
              <div class="row-fluid">
                <div class="span4">
                  <div class="round-box box-small">
                    <a class="box-inner" href="#">
                      <img alt="some image" class="img-circle" src="/images/assets/landscapes/landscape-1-300x300.jpg">
                      <i class="icon-link"></i>
                    </a>
                  </div>
                  <h5 class="text-center light">
                    10 dec 2012
                  </h5>
                </div>
                <div class="span8">
                  <h3>
                    <a href="#">
                      Link post
                    </a>
                  </h3>
                  <p>
                    Donec viverra pulvinar ante, a placerat risus tincidunt vitae. Donec felis dolor, malesuada vel euismod sed, eleifend id nibh. Fusce accumsan bibendum ornare.
                  </p>
                </div>
              </div>
            </li>
            <li class="span4">
              <div class="row-fluid">
                <div class="span4">
                  <div class="round-box box-small">
                    <a class="box-inner" href="#">
                      <img alt="some image" class="img-circle" src="/images/assets/landscapes/landscape-2-e-300x300.jpg">
                      <i class="icon-play"></i>
                    </a>
                  </div>
                  <h5 class="text-center light">
                    12 Nov 2012
                  </h5>
                </div>
                <div class="span8">
                  <h3>
                    <a href="#">
                      Video post
                    </a>
                  </h3>
                  <p>
                    Phasellus condimentum dapibus ligula vel dapibus. Praesent dictum aliquet pharetra. Vestibulum lorem sapien, elementum vitae lobortis et, sagittis quis magna.
                  </p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
    </div>
  </div>
@endsection
