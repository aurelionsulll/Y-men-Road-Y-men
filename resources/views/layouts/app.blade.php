<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="Medinova - Health & Medical HTML Template" />
    <meta name="keywords" content="building,business,construction,cleaning,transport,workshop" />
    <meta name="author" content="ThemeMascot" />
    <title>Laboratoire-Allal el fassi</title>
    <link href="assets/images/favicon.png" rel="shortcut icon" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="assets/images/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="assets/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="assets/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="assets/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css">
    <link href="assets/css/css-plugin-collections.css" rel="stylesheet"/>
    <link id="menuzord-menu-skins" href="assets/css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
    <link href="assets/css/style-main.css" rel="stylesheet" type="text/css">
    <link href="assets/css/preloader.css" rel="stylesheet" type="text/css">
    <link href="assets/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">
    <link  href="assets/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
    <link  href="assets/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
    <link  href="assets/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/colors/theme-skin-blue.css" rel="stylesheet" type="text/css">
    <script src="assets/js/jquery-2.2.0.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-plugin-collection.js"></script>
    <script src="assets/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
    <script src="https://kit.fontawesome.com/e696b1788a.js" crossorigin="anonymous"></script>
    <script src="assets/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="assets/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-162010317-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-162010317-1');
    </script>

    <style>
        ::placeholder {
            color: #fff!important;
            opacity: 1; /* Firefox */
        }
    </style>
</head>
<body class="has-side-panel side-panel-right fullwidth-page side-push-panel" style="font-family: Lato ;">
<div id="wrapper" class="clearfix">
    <header id="header" class="header">
        <div class="header-top bg-theme-colored sm-text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="widget no-border m-0">
                            <ul class="social-icons icon-dark icon-theme-colored icon-sm sm-text-center">
                                <li><a href="assets/#"><i class="fab fa-facebook-square" style=" font-size:16px"></i></a></li>
                                <li><a href="assets/#"><i class="fab fa-whatsapp-square" style=" font-size:16px"></i></a></li>
                                <li><a href="assets/#"><i class="fab fa-linkedin" style=" font-size:16px"></i></a></li>
                                <li><a href="assets/#"><i class="fab fa-youtube" style=" font-size:16px"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="widget no-border m-0">
                            <ul class="list-inline pull-right flip sm-pull-none sm-text-center mt-5">
                                <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-white"></i><a class="text-white" href="tel:0524291996"> 05 24 29 19 96</a></li>
                                <li class="text-white m-0 pl-10 pr-10"> <i class="fa fa-clock-o text-white"></i> Lun-Vend 9:00 to 18:00 </li>
                                <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-white"></i> <a class="text-white" href="mailto:laboallalelfassi@gmail.com">laboallalelfassi@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-nav">
            <div class="header-nav-wrapper navbar-scrolltofixed bg-lightest">
                <div class="container">
                    <nav id="menuzord-right" class="menuzord blue bg-lightest">
                        <a class="menuzord-brand pull-left flip" href="{{url('/')}}" style="margin: 10px 30px 0 0;">
                            <img src="assets/images/logo.jpeg" alt="" height="350px">
                        </a>
                        <ul class="menuzord-menu">
                            <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="{{url('/')}}">Accueil</a></li>
                            <li class="{{ (request()->is('about')) ? 'active' : '' }}"><a href="{{url('/about')}}">Qui sommes-nous</a></li>
                            <li class="{{ (request()->is('info')) ? 'active' : '' }}"><a href="{{url('/info')}}">Info utile</a></li>
                            <li class="{{ (request()->is('contact')) ? 'active' : '' }}"><a href="{{url('/contact')}}">contactez-nous</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
<!-- Footer -->
    <footer class="page-footer font-small stylish-color-dark pt-4" style="background-color: #3e4551 !important;color: #ffffff!important;">
        <div class="container text-center text-md-left">
            <div class="row" >
                <div class="col-md-3 mx-auto">
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="color: #ffffff!important;">Nous sommes ouverts du</h5>
                    <p>Lundi au Vendredi 8:30 à 12:30 - 14:30 à 18:30</p>
                </div>
                <hr class="clearfix w-100 d-md-none">
                <div class=" mx-auto">
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="color: #ffffff!important;">Adresse</h5>
                    <p>Imm. 6, App. 11, Complexe des habous - Av.Allal El Fassi - Marrakech</p>
                </div>
                <hr class="clearfix w-100 d-md-none">
                <div class=" mx-auto">
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="color: #ffffff!important;">Tél</h5>
                    <p><a href="tel:0524291996" style="color: #ffffff">05 24 29 19 96</a></p>
                </div>
                <hr class="clearfix w-100 d-md-none">
                <div class=" mx-auto">
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="color: #ffffff!important;">Mail</h5>
                    <p><a href="mailto:laboallalelfassi@gmail.com" style="color: #ffffff">laboallalelfassi@gmail.com</a></p>
                </div>
                </div>
            <!-- Grid row -->
        </div>
        <hr style="background-color: #0b0b0b!important;">
        <ul class="list-unstyled list-inline text-center">
            <li class="list-inline-item">
                <a class="btn-floating btn-fb mx-1">
                    <i class="fab fa-facebook-f"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-tw mx-1">
                    <i class="fab fa-twitter"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-gplus mx-1">
                    <i class="fab fa-google-plus-g"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-li mx-1">
                    <i class="fab fa-linkedin-in"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-dribbble mx-1">
                    <i class="fab fa-dribbble"> </i>
                </a>
            </li>
        </ul>
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://ciprotec.ma/">Ciprotec.ma</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
    <a class="scrollToTop" href="assets/#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="assets/js/custom.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
      (Load Extensions only on Local File Systems !
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="assets/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="assets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="assets/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="assets/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="assets/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="assets/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="assets/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="assets/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>


</body>
</html>
