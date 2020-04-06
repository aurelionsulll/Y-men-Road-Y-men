<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="https://ciprotec.ma/wp-content/uploads/2020/03/ciprotec-picto.png">
    <title>Labo dashboard</title>
    <link href="{{ asset('admin/assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/dist/css/style.min.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e696b1788a.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>

</head>

<body>
{{--     <div class="preloader">--}}
{{--        <div class="lds-ripple">--}}
{{--            <div class="lds-pos"></div>--}}
{{--            <div class="lds-pos"></div>--}}
{{--        </div> --}}
{{--    </div>--}}
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header" data-logobg="skin5">
                <a class="navbar-brand" href="index.html">
                    <b class="logo-icon">
                        <img src="https://ciprotec.ma/wp-content/uploads/2020/01/LOGO-CIPROTEC.png" alt="homepage" class="light-logo" width="100px" style="margin-left: 25px"/>
                    </b>
                    {{--                        <span class="logo-text">--}}
                    {{--                             <img src="{{asset('admin/assets/images/logo-text.png')}}" alt="homepage" class="dark-logo" />--}}
                    {{--                             <img src="{{asset('admin/assets/images/logo-light-text.png')}}" class="light-logo" alt="homepage" />--}}
                    {{--                        </span>--}}
                </a>
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            </div>
            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                <ul class="navbar-nav float-left mr-auto">

                    <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"></a>

                    </li>
                </ul>
                <ul class="navbar-nav float-right" style="">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div style="margin-left: 40px;margin-right: 20px">
                                <img src="{{ asset('admin/assets/images/users/1.jpg') }}" alt="user" class="rounded-circle" width="31">
                                @foreach($notif as $noti)
                                    @if($noti->appointment + $noti->message != 0)
                                        <span style="color: #fff;background-color: red; border-radius: 50%; padding: 2px 7px; margin-left: -47px;z-index: 20">
                                            {{$noti->appointment + $noti->message}}
                                        </span>
                                    @endif
                                @endforeach
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right user-dd animated">
                            <a class="dropdown-item" href="{{ route('logout') }}"><i class="ti-arrow-circle-up m-r-5 m-l-5"></i>logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <aside class="left-sidebar" data-sidebarbg="skin6">
        <div class="scroll-sidebar">
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li><br><br><br><br></li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('cp_admin')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('/homepage')}}" aria-expanded="false"><i class="mdi mdi-account-network"></i><span class="hide-menu">Home</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('aboutpage')}}" aria-expanded="false"><i class="mdi mdi-file-image"></i><span class="hide-menu">About</span></a></li>
                    <li class="sidebar-item"style="background-color: #e5e5e5"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/infopage')}}" aria-expanded="false"><i class="mdi mdi-file-image"></i><span class="hide-menu">Info</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/gallerypage')}}" aria-expanded="false"><i class="mdi mdi-file-image"></i><span class="hide-menu">Gallery</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('gde')}}" aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">Gde</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('adminAppointment')}}" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Appointment</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('admincontact')}}" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Message</span></a></li>
                    <li class="text-center p-40 upgrade-btn">
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <div id="app" class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row align-items-center">
                <info-page></info-page>
                <vue-progress-bar></vue-progress-bar>
            </div>
        </div>
    </div>

    <script src="{{asset('js/app.js')}}"></script>
    <script>
        window.Laravel={!! json_encode([
    'csrftoken'   =>csrf_token(),
    'url'    =>url('/')
    ])!!};
    </script>
</div>
