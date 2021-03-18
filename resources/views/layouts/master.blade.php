<!DOCTYPE html>
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if IE 9]>					<html class="ie9 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<head>
    <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz|Open+Sans:400,600,700|Oswald|Electrolize' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Car Dealer | Home</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="{{ asset('admin/css/styles.css') }}" rel="stylesheet" />
    <link rel="shortcut" href="{{ asset("images/favicon.html") }}" />
    <link rel="stylesheet" href="{{ asset("css/style.css") }}" media="screen" />
    <link rel="stylesheet" href="{{ asset("css/skeleton.css") }}" media="screen" />
    <link rel="stylesheet" href="{{ asset("sliders/flexslider/flexslider.css") }}" media="screen" />
    <link rel="stylesheet" href="{{ asset("fancybox/jquery.fancybox.css") }}" media="screen" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- HTML5 Shiv + detect touch events -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset("js/modernizr.custom.js") }}"></script>
</head>
<body class="menu-1 h-style-1 text-1">

<div class="wrap">

    <!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->

    <header id="header" class="clearfix">

        <div class="widget-container widget_search">

            <span class="call"><span>+1 234</span> 567-8901</span><br />

            <span class="adds">12 Street, Los Angeles, CA, 94101</span>

            <span><ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               >
                                {{ __('Logout') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('userAd') }}"
                            >
                                {{ __('all ads') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul></span>



        </div>
        <!--/ .widget-container-->

        <h1 class="widget-title" style="margin-top: 50px;"><span style="color: coral">Car</span> Dealer</h1>
        <nav id="navigation" class="navigation">

            <ul>
                <li><a href="{{ route('Home') }}">Home</a></li>
                <li><a href="{{ route('AutoAds') }}">Auto ads</a></li>
                <li><a href="{{ route('news') }}">News</a></li>
                <li><a href="{{ route('Contacts') }}">Contacts</a></li>
                @if (Auth::id() == 2)
                <li><a href="{{ route('admin') }}">Admin</a></li>
                @endif
                @if (Auth::user())
                <li><a href="{{ route('PostAd.create') }}">Post an ad</a></li>
                @endif
            </ul>

        </nav><!--/ #navigation-->

    </header><!--/ #header-->

    <!-- - - - - - - - - - - - - - end Header - - - - - - - - - - - - - - - - -->
    <div class="wrap">

        @yield('content')

    </div><!--/ .wrap-->

    <!--/ .account-wrapper-->



    <!-- - - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->

    <footer id="footer" class="container clearfix">

        <section class="container clearfix">

            <div class="four columns">

                <div class="widget-container widget_text">

                    <h3 class="widget-title">About Us</h3>

                    <div class="textwidget">

                        <p class="white">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                        </p>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation.
                        </p>

                    </div><!--/ .textwidget-->

                    <a href="#" class="see">Read more</a>

                </div><!--/ .widget-container-->

            </div><!--/ .four .columns-->

            <div class="four columns">

                <div class="widget-container widget_text">

                    <h3 class="widget-title">Our Hours</h3>

                    <div class="textwidget">

                        <ul class="hours">

                            <li>Monday <span>8 am to 7 pm</span></li>
                            <li>Tuesday <span>8 am to 9 pm</span></li>
                            <li>Wednesday <span>8 am to 9 pm</span></li>
                            <li>Thursday <span>8 am to 9 pm</span></li>
                            <li>Friday <span>8 am to 9 pm</span></li>
                            <li>Saturday <span>8 am to 9 pm</span></li>
                            <li>Sunday <span>Closed</span></li>

                        </ul><!--/ .hours-->

                    </div><!--/ .textwidget-->

                </div><!--/ .widget-container-->

            </div><!--/ .four .columns-->

            <div class="four columns">

                <div class="widget-container widget_contacts">

                    <h3 class="widget-title">Our Contacts</h3>

                    <ul class="our-contacts">

                        <li class="address">
                            <b>Address Info 1:</b>
                            <p>Lorem ipsum Dolor sit amet, 658 Consectetur, Adipisicing 56 D</p>
                        </li>
                        <li class="phone">
                            <b>Phone:</b>&nbsp;<span>+1 (234) 567-8901</span> <br />
                            <b>FAX:</b>&nbsp;<span>+1 (234) 567-8902</span>
                        </li>
                        <li>
                            <b>Email: <a href="mailto:testmail@sitename.com">testmail@sitename.com</a></b>
                        </li>
                        <li>
                            <ul class="social-icons clearfix">
                                <li class="twitter"><a title="twitter" href="#">Twitter</a></li>
                                <li class="facebook"><a title="facebook" href="#">Facebook</a></li>
                                <li class="rss"><a title="rss" href="#">Rss</a></li>
                            </ul><!--/ .social-icons-->
                        </li>

                    </ul><!--/ .our-contacts-->

                </div><!--/ .widget-container-->

            </div><!--/ .four .columns-->

<!--/ .four .columns-->

            <div class="adjective clearfix">

                <p class="copyright">Copyright &copy; 2012. ThemeMakers. All rights reserved</p>

                <p class="developed">developed by <a href="http://webtemplatemasters.com/" target="_blank">ThemeMakers</a></p>

            </div><!--/ .adjective-->

        </section><!--/ .container-->

    </footer><!--/ #footer-->

    <!-- - - - - - - - - - - - - - - end Footer - - - - - - - - - - - - - - - - -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
        <!--[if lt IE 9]>
        <script src="js/selectivizr-and-extra-selectors.min.js"></script>
        <![endif]-->
        <script src="sliders/flexslider/jquery.flexslider-min.js"></script>
{{--        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>--}}
        <script src="js/jquery.gmap.min.js"></script>
        <script src="js/jquery-impromptu.js"></script>
        <script src="js/custom.js"></script>


</body>
</html>
