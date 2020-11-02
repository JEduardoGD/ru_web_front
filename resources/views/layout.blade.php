<!DOCTYPE html>
<!--[if IE 8 ]> <html lang="en" class="ie8"> <![endif]-->
<!--[if (gt IE 8)]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <title></title>
  <meta content="Bootsrap based theme" name="description">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="yes" name="apple-mobile-web-app-capable">
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="javascripts/PIE.js"></script>
  <![endif]-->
  <link href="favicon.ico" rel="shortcut icon">
  <link href="apple-touch-icon-144x144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
  <link href="apple-touch-icon-114x114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
  <link href="apple-touch-icon-72x72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
  <link href="apple-touch-icon-57x57-precomposed.png" rel="apple-touch-icon-precomposed">
  <link href="stylesheets/bootstrap.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="stylesheets/responsive.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="stylesheets/font-awesome-all.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="stylesheets/fancybox.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="stylesheets/theme.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="stylesheets/fonts.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>
  <div class="wrapper">
    <!-- Page Header -->
    <header id="masthead">
      <nav class="navbar navbar-static-top">
        <div class="navbar-inner">
          <div class="container-fluid">
            <a class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
            <h1 class="brand">
              <a href="index.html">
                <div>
                  <div style="text-align: center; background-image: url('img/escudo_ru.jpg'); background-repeat: no-repeat; width: 112px; height: 126px; background-size: contain;" align="center">&nbsp;</div>
                </div>
                <!--Smart<span class="light">Box</span>-->
              </a>
            </h1>
            <div class="nav-collapse collapse">
              <ul class="nav pull-right">
                <li class=""><a href=".">Home</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Historia</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="#">XE1UFI</a>
                    </li>
                    <li>
                      <a href="#">AREUNAM</a>
                    </li>
                    <li>
                      <a href="#">RU</a>
                    </li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Miembros</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="#">Fundadores</a>
                    </li>
                    <li>
                      <a href="#">Activos</a>
                    </li>
                    <li>
                      <a href="#">Honorarios</a>
                    </li>
                    <li>
                      <a href="#">Benefactores</a>
                    </li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Estación</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="#">Fotos</a>
                    </li>
                    <li>
                      <a href="#">Videos</a>
                    </li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sistemas</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="#">HF / VHF</a>
                    </li>
                    <li>
                      <a href="#">Winlink</a>
                    </li>
                    <li>
                      <a href="#">APRS</a>
                    </li>
                    <li>
                      <a href="#">IRLP</a>
                    </li>
                  </ul>
                </li>
                <li class=""><a href="#">Cursos</a></li>
                <li class=""><a href="#">Actividades</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <!-- start main content -->
    @yield('content')
    <!-- end main content -->
  </div>
  <!-- Page Footer -->
  <footer id="footer" role="contentinfo">
    <div class="wrapper wrapper-transparent">
      <div class="container-fluid">
        <div class="row-fluid">
          <div class="span6 small-screen-center">
            <h3>
              Smart
              <span class="light">
                Box
              </span>
            </h3>
            <p>
              +44 1234 56.78.910  |  info@somecompany.com
              <br>
              Some St  777, 47000 Fancy town, Country.
              <br>
              &copy; Copyright 2013
            </p>
          </div>
          <div class="span6">
            <ul class="unstyled inline text-right small-screen-center big social-icons">
              <li>
                <a data-iconcolor="#00a0d1" href="#">
                  <i class="icon-twitter"></i>
                </a>
              </li>
              <li>
                <a data-iconcolor="#3b5998" href="#">
                  <i class="icon-facebook"></i>
                </a>
              </li>
              <li>
                <a data-iconcolor="#910101" href="#">
                  <i class="icon-pinterest"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script src="javascripts/jquery.min.js" type="text/javascript"></script>
  <script src="javascripts/bootstrap.js" type="text/javascript"></script>
  <script src="javascripts/jquery.flexslider-min.js" type="text/javascript"></script>
  <script src="javascripts/jquery.tweet.js" type="text/javascript"></script>
  <script src="javascripts/jquery.fancybox.pack.js" type="text/javascript"></script>
  <script src="javascripts/jquery.fancybox-media.js" type="text/javascript"></script>
  <script src="javascripts/script.js" type="text/javascript"></script>
<script type="text/javascript">
if (typeof gaJsHost == 'undefined') {
  var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
  document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
}
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("#########");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
