@extends('layouts.app')
@section('content')
    <div class="main-content">
        <div id="home" class="divider">
            <div class="container-fluid p-0">

                <!-- Slider Revolution Start -->
                <div class="rev_slider_wrapper">
                    <div class="rev_slider" data-version="5.0">
                        <ul>
                            <!-- SLIDE 1 -->
                            @foreach($sliders as $slider)
                            <li data-index="rs-{{$slider->id}}" data-transition="random" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="images/{{$slider->image}}"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="images/{{$slider->image}}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina style="color:rgba(255, 255, 255, 1)">
                                <img src="images/pattern3.png"  alt=""  data-bgposition="center top" data-bgfit="repeat" data-bgrepeat="repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina data-background="red" >
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-resizeme text-uppercase text-white  pl-40 pr-40"
                                     id="rs-1-layer-1"
                                     data-x="['center']"
                                     data-hoffset="['0']"
                                     data-y="['middle']"
                                     data-voffset="['-115']"
                                     data-fontsize="['50']"
                                     data-lineheight="['50']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;s:500"
                                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 7; white-space: nowrap; font-weight:600; border-radius:15px;">{{$slider->text}}
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway  pl-30 pr-30"
                                     id="rs-1-layer-2"

                                     data-x="['center']"
                                     data-hoffset="['0']"
                                     data-y="['middle']"
                                     data-voffset="['-45']"
                                     data-fontsize="['28']"
                                     data-lineheight="['70']"

                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;s:500"
                                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 7; white-space: nowrap; font-weight:600; border-radius:15px;" ><span class="mti">{{$slider->subtext}}</span>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <script>
                    $(document).ready(function(e) {
                        var revapi = $(".rev_slider").revolution({
                            sliderType:"standard",
                            sliderLayout: "auto",
                            dottedOverlay: "none",
                            delay: 5000,
                            navigation: {
                                keyboardNavigation: "off",
                                keyboard_direction: "horizontal",
                                mouseScrollNavigation: "off",
                                onHoverStop: "off",
                                touch: {
                                    touchenabled: "on",
                                    swipe_threshold: 75,
                                    swipe_min_touches: 1,
                                    swipe_direction: "horizontal",
                                    drag_block_vertical: false
                                },
                                arrows: {
                                    style: "gyges",
                                    enable: true,
                                    hide_onmobile: false,
                                    hide_onleave: true,
                                    hide_delay: 200,
                                    hide_delay_mobile: 1200,
                                    tmp: '',
                                    left: {
                                        h_align: "left",
                                        v_align: "center",
                                        h_offset: 0,
                                        v_offset: 0
                                    },
                                    right: {
                                        h_align: "right",
                                        v_align: "center",
                                        h_offset: 0,
                                        v_offset: 0
                                    }
                                },
                                bullets: {
                                    enable: true,
                                    hide_onmobile: true,
                                    hide_under: 800,
                                    style: "hebe",
                                    hide_onleave: false,
                                    direction: "horizontal",
                                    h_align: "center",
                                    v_align: "bottom",
                                    h_offset: 0,
                                    v_offset: 30,
                                    space: 5,
                                    tmp: '<span class="tp-bullet-image"></span><span class="tp-bullet-imageoverlay"></span><span class="tp-bullet-title"></span>'
                                }
                            },
                            responsiveLevels: [1240, 1024, 778],
                            visibilityLevels: [1240, 1024, 778],
                            gridwidth: [1170, 1024, 778, 480],
                            gridheight: [655, 768, 960, 720],
                            lazyType: "none",
                            parallax: {
                                origo: "slidercenter",
                                speed: 1000,
                                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                                type: "scroll"
                            },
                            shadow: 0,
                            spinner: "off",
                            stopLoop: "on",
                            stopAfterLoops: 0,
                            stopAtSlide: -1,
                            shuffle: "off",
                            autoHeight: "off",
                            fullScreenAutoWidth: "off",
                            fullScreenAlignForce: "off",
                            fullScreenOffsetContainer: "",
                            fullScreenOffset: "0",
                            hideThumbsOnMobile: "off",
                            hideSliderAtLimit: 0,
                            hideCaptionAtLimit: 0,
                            hideAllCaptionAtLilmit: 0,
                            debugMode: false,
                            fallbacks: {
                                simplifyAll: "off",
                                nextSlideOnWindowFocus: "off",
                                disableFocusListener: false,
                            }
                        });
                    });
                </script>
            </div>
        </div>
        <div class="mb-30 mt-40">
            <div class="container pb-0 TextColor">
                <div class="row">
                    <div class="col-md-4 wow ">
                        <div class="border-10px p-30" style="height: 470px">
                            <h5 class="BC"><i class="fa fa-clock-o BC" style="color:#3ce2ad"></i> Horaires d'ouvertures</h5>
                            <p class="mt-0 text-uppercase">Vous pouvez accéder à notre laboratoire du :</p>
                            <div class="opening-hourse text-left">
                                <ul class="list-unstyled">
                                    <li class="clearfix line-height-1 F-13"> <span> Lundi – Vendredi</span>
                                        <div class="value"> 07h30 - 18h30 </div>
                                    </li>
                                    <li class="clearfix line-height-1 F-13"> <span> Samedi </span>
                                        <div class="value"> 07h30 – 13h00 </div>
                                    </li>
                                </ul>
                            </div>
                            <h5 class="mt-30 BC"><i class="fa fa-pencil-square-o BC" style="color:#3ce2ad"></i>Infos Utiles</h5>
                            <p class="mt-0 text-uppercase"><span style="font-weight:bold">Prélèvement à domicile :</span> remplissez le formulaire</p>
                            <p class="mt-0 text-uppercase"><span style="font-weight:bold">Préparez votre examen :</span> Retrouvez nos recommandations utiles avant de procéder aux examens</p>
                            <p class="mt-0 text-uppercase"><span style="font-weight:bold">Conventions :</span> CMIM, CNOPS, CNSS</p>
                        </div>
                    </div>
                    <div class="col-md-4 wow  BC rsp-1">
                        <h1 class=" font-playfair mt-0 BC">Laboratoire d’analyses médicales, Allal el fassi</h1>
                        <p class="F-13"><em>Nous assurons votre prise en charge, pour diverses analyses, avec ou sans RDV. </em></p>
                        <p class="mt-20 F-13">Notre équipe mobile vous propose aussi un service à domicile sur Marrakech</p>
                        <p class="mt-20 F-13"><img src="assets/imagesre.png" alt=""></p>
                        <a href="{{url('/about')}}" class="btn btn-default btn-lg mb-md-0 Hbtn mt-30 float-right" style="background-color:#3ce2ad; font-weight:600; font-size: 16px">En savoir plus</a>
                    </div>
                    <div class="col-md-4 wow rsp-2">
                        <div class="border-10px p-30" style="height: 470px">
                            <h5 class=" BC"><i class="fa fa-clock-o BC" style="color:#3ce2ad"></i> Résultats d’analyse en ligne</h5>
                            <p class="mt-0 text-uppercase">Vous pouvez récupérer vos résultats d’analyse via notre espace sécurisé.</p>
                            <div class="opening-hourse text-left" style="margin-top:40;">
                                <ul class="list-unstyled" style="margin-top:50px;" >
                                    <li class="clearfix line-height " style="border:0px;">
                                        <a href="assets/#" class="btn btn-default btn-lg mb-40 Nbtn BC" style="background-image:url('images/image_3.jpg');background-position:center"><p style="font-weight:500">Accès Patient</p></a>
                                    </li>
                                    <li class="clearfix line-height " style="border:0px;">
                                        <a href="assets/#" class="btn btn-default btn-lg mb-md-0 Nbtn" style="background-image:url('images/image_3.jpg');background-position:center"><p style="font-weight:500">Accès Médecin</p></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pb-10 mt-30 col-md-12">
                <div class="section-title text-center" style="margin-bottom: 10px">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="text-uppercase mt-0 LBC">Assurer la satisfaction de nos patients est notre priorité</h2>

                            <p class="BC F-16">Notre équipe de laboratoire Allal el fassi professionnels veillent au quotidien sur la qualité de réalisation de vos analyses.
                                Nous avons ainsi équipé notre laboratoire en plateaux techniques avec du matériels très performants pour vous garantir le meilleur délai de vos résultats dans des conditions de qualité optimale.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="section-centent">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="services-tab border-10px bg-white-light" style="border-bottom: 0px #fff">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a  href="assets/#tab11" data-toggle="tab"><i class="icon-blood10 test-resp"></i>Hématologie</a></li>
                                    <li><a href="assets/#tab12" data-toggle="tab"><i class=" icon-medical46 test-resp"></i>Sérologie</a></li>
                                    <li><a href="assets/#tab13" data-toggle="tab"><i class=" icon-medicine13 test-resp"></i>Biochimie</a></li>
                                    <li><a href="assets/#tab14" data-toggle="tab"><i class="icon-balls test-resp"></i>Bactériologie</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab11">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="thumb">
                                                    <img src="images/20-03-051583423655.jpeg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="service-content">
                                                    <h1 class="title mt-0">Hématologie</h1>
                                                    <p class="BC F-13">Vous permet d’identifier d’éventuelles pathologies : infections, hémorragies, maladies du sang…à travers divers analyses :</p>
                                                    <div class="row mt-30 mb-20">
                                                        <div class="col-xs-6">
                                                            <ul class="mt-10 BC F-14">
                                                                <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>Cellules du sang : Formule leucocytaire, NFS, Plaquettes, VS… </li>
                                                                <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>Coagulation : Fibrinogène, Héparinémie, Protéine C et protéine S, TCA….</li>
                                                                <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>Groupes sanguins et Anticorps irréguliers : Groupes sanguins, RAI..</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab12">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="thumb">
                                                    <img src="images/20-03-051583423655.jpeg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="service-content">
                                                    <h1 class="title mt-0">Sérologie</h1>
                                                    <p class="BC F-13">Vous permet d’évaluer l'immunité contre une maladie en mesurant la quantité d'anticorps :</p>
                                                    <div class="row mt-30 mb-20">
                                                        <div class="col-xs-6">
                                                            <ul class="mt-10 BC F-14">
                                                                <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>Sérologie bactérienne : Fièvres thyphoïdes, Syphilis…</li>
                                                                <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>Sérologie parasitaire : Toxoplasmose </li>
                                                                <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>Sérologie virale : VIH, Hépatite A, B, C,...</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab13">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="thumb">
                                                    <img src="images/20-03-091583753863.jpeg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="service-content">
                                                    <h1 class="title mt-0">Biochimie</h1>
                                                    <div class="row mt-30 mb-20">
                                                        <p class="BC F-13">Vous donne des informations importantes sur les fonctions digestives, rénale, métabolique et hépatique.</p>
                                                        <div class="col-xs-6">
                                                            <ul class="mt-10 BC F-14">
                                                                <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>Ions et électrolytes sanguins et urinaires : Acide urique, Créatinine, Urée…</li>
                                                                <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>Bilan lipidique et Sucre : cholestérol, triglycérides, glycémie...</li>
                                                                <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>Fer : CTF, FER, Ferritine…</li>
                                                                <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>Marqueurs tumoraux : PSA, ACE, CA 15-3…</li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <ul class="mt-10 BC F-14">
                                                                <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>Protéine : CRP, Albumine, HbA1C..</li>
                                                                <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>Fonctions hépatiques et pancréatiques : Alcool, Bilirubine, Transaminases ASAT, ALAT…</li>
                                                                <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>Vitamines : A1, B12, D3…</li>
                                                                <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>Hormones : ACTH, ADH, hGH, Insuline…</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab14">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="thumb">
                                                    <img src="images/20-03-091583753847.jpeg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="service-content">
                                                    <h1 class="title mt-0">Bactériologie</h1>
                                                    <div class="row mt-30 mb-20">
                                                        <p class="BC F-13">Vous permet d’identifier l'agent responsable de l'infection : bactérie, parasite, champignons microscopiques, etc</p>
                                                        <div class="col-xs-6">
                                                            <ul class="mt-10 BC F-14">
                                                                <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>Hémoculture</li>
                                                                <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>ECBU</li>
                                                                <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>Coproculture</li>
                                                                <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>LCR</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div>
            <div class="container-fluid pt-0 pb-40 mt-20 rsp-3">
                {{--                        @if(session('success'))--}}

                {{--                        @endif--}}
                <div class="row">
                    <div class="col-md-4 p-60 mb-sm-60 bg-theme-colored">
                        <h4 class="text-white mb-20 mt-0">Prendre un rendez-vous</h4>
                        <form  class="booking-form form-blue" method="post" action="{{url('/makeAppointment')}}">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Name" id="booking_name" name="name" required="" class="form-control" style="color:#fff;border:1px #fff solid">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Email" id="booking_email" name="email" class="form-control" required="" style="border:1px #fff solid">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Phone" id="booking_phone" name="phone" class="form-control" required="" style="border:1px #fff solid">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="date" placeholder="Date"  name="date"  class="form-control" required="" style="border:1px #fff solid">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group mb-0">
                                        <button type="submit" class="btn btn-theme-colored btn-lg btn-submit" style="border:1px #fff solid">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @if(session('success'))
                        <div class="alert alert-success text-center" role="alert">
                            {{session('success')}}
                        </div>
                        @endif
                    </div>
                    <div class="col-md-8  cartmap">
                        <div class="mw-100">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.42187860549!2d-7.603939284866775!3d33.59435668073294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cd13192fe58b%3A0x3d57f9b4e3d33f47!2sCiprotec!5e0!3m2!1sfr!2sma!4v1583837507611!5m2!1sfr!2sma" width="900" height="360" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
