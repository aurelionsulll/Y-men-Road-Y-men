@extends('layouts.app')
@section('content')
  <div class="main-content">
    <div id="home" class="divider">
      <div class="container-fluid p-0">
          <div class="rev_slider_wrapper">
              <div class="rev_slider" data-version="5.0">
                  <ul>
                      @foreach($activitys as $activity)
                      <li data-index="rs-{{$activity->id}}" data-transition="random" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="images/{{$activity->image}}"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
                          <img src="images/{{$activity->image}}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                          <img src="images/pattern3.png"  alt=""  data-bgposition="center top" data-bgfit="repeat" data-bgrepeat="repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina data-background="red" >
                          <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway   pl-40 pr-40"
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
                               style="z-index: 7; white-space: nowrap; font-weight:600; border-radius:15px;">Laboratoire Allal el fassi
                          </div>
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
                               style="z-index: 7; white-space: nowrap; font-weight:600; border-radius:15px;">{{$activity->text}}
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
                              enable: false,
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
                              enable: false,
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
    <div>
      <div class="container rsp-101" style="margin-bottom:20px; margin-top: 10px">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <div class="border-left-2px border-theme-colored  pl-15">
                <h3 class="text-theme-colored font-36 mt-0">Laboratoire Allal el fassi</h3>
              </div>
              <p class="F-13 BC">Depuis xxxx, nos patients nous font confiance pour pratiquer leurs examens au sein de notre centre de prélèvement. Nous effectuons ainsi leurs analyses dans plusieurs disciplines : Microbiologie, Biochimie, Hématologie, Hémostase, Immunologie, Hormonologie, Marqueurs tumoraux, Sérologies…</p>
              <p class="F-13 BC">Notre laboratoire est organisé en plateaux techniques équipés de matériels à la pointe de la technologie pour garantir à nos patients les meilleurs délais de réalisations de leurs analyses dans des conditions de qualité optimale.</p>
              <p class="F-13 BC">Et nous investissons chaque année dans la montée en compétence de notre équipe à travers des programmes de formations médicales, gage d’une amélioration continue de nos services.</p>
            </div>
            <div class="col-sm-6 col-md-6">
              <img class="img-fullwidth" alt="" src="images/login.jpg">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>
      <div class="container pb-10">
        <div class="section-title mb-30">
          <div class="row">
            <div class="col-md-12">
              <h4 class="text-uppercase text-theme-colored title-border m-0">Nos atouts</h4>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row features-style1 text-center mt-20">
            <div class="col-sm-4">
              <div class="icon-box left media p-0"> <a href="#" class="media-left pull-left"><i class="icon-ambulance14 " style="color:#3ce2ad"></i></a>
                <div class="media-body">
                  <h4 class="media-heading heading BC">Aménagement des salles optimisé</h4>
                  <p class="BC F-13">Respect de l’intimité du patient & confort optimal</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="icon-box left media p-0"> <a href="#" class="media-left pull-left"><i class="icon-illness " style="color:#3ce2ad"></i></a>
                <div class="media-body">
                  <h4 class="media-heading heading BC">Délai de résultat maitrisé</h4>
                  <p class="BC F-13">Xx% des résultats disponibles le même jour que le prélèvement</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="icon-box left media p-0"> <a href="#" class="media-left pull-left"><i class="icon-stethoscope10 " style="color:#3ce2ad"></i></a>
                <div class="media-body">
                  <h4 class="media-heading heading BC">Service de proximité</h4>
                  <p class="BC F-13">Prélèvement à domicile et résultats d’analyse en ligne</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-lighter col-md-12" style="margin-bottom:50px">
          <div class="section-title text-center">
              <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                      <h2 class="text-uppercase mt-0 text-theme-colored">Gallery</h2>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <!-- Works Filter -->
                  <div class="portfolio-filter font-alt align-center">
                      <a href="assets/#" class="active BC" data-filter="*">All</a>
                          @foreach ($x as $gallery)
                              @if($gallery->subtext)
                                      <a href="assets/#{{$gallery->subtext}}" class="BC" data-filter=".{{$gallery->subtext}}">{{$gallery->subtext}}</a>
                              @endif
                          @endforeach
                  </div>
                  <div id="grid" class="gallery-isotope grid-4 gutter clearfix">
                      <div id="grid" class="gallery-isotope grid-4 gutter clearfix">
                          @foreach ($gallerys as $gallery)
                          <div class="gallery-item {{$gallery->subtext}}" style="margin-bottom:10px">
                              <div class="thumb" >
                                  <img class="img-fullwid" alt="project" src="images/{{$gallery->image}}" style="width:270px;height:190px;">
                                      <div class="overlay-shade"></div>
                                      <div class="icons-holder">
                                          <div class="icons-holder-inner">
                                              <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                  <a data-lightbox="image" href="images/{{$gallery->image}}"><i class="fa fa-picture-o"></i></a>
                                              </div>
                                          </div>
                                      </div>
                              </div>
                          </div>
                          @endforeach
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  @endsection
