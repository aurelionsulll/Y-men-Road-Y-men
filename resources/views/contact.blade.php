@extends('layouts.app')
@section('content')
  <div class="main-content">
    <!-- Section: inner-header -->
    <section id="home" class="divider">
      <div class="container-fluid p-0">

          <!-- Slider Revolution Start -->
          <div class="rev_slider_wrapper">
              <div class="rev_slider" data-version="5.0" >
                  <ul>
                      <li data-index="rs-1" data-transition="random" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="https://images.pexels.com/photos/48604/pexels-photo-48604.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="" >
                          <img src="https://images.pexels.com/photos/48604/pexels-photo-48604.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina >
                          <img src="images/pattern3.png"  alt=""  data-bgposition="center top" data-bgfit="repeat" data-bgrepeat="repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina data-background="red" >
                          <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway  pl-40 pr-40"
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
                               style="z-index: 7; white-space: nowrap; font-weight:600;">
                          </div>

                          <!-- LAYER NR. 2 -->
                          <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway  pl-30 pr-30"
                               id="rs-1-layer-2"
                               data-x="['center']"
                               data-hoffset="['0']"
                               data-y="['middle']"
                               data-voffset="['-45']"
                               data-fontsize="['50']"
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
                               style="z-index: 7; white-space: nowrap; font-weight:600; border-radius:15px;">CONTACTEZ-NOUS
                          </div>
                      </li>
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
  </section>
    <section id="contact" class="divider bg-lighter">
      <div class="container">
        <div class="row pt-30">
          <div class="col-md-6">
              <div class="mw-100">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.42187860549!2d-7.603939284866775!3d33.59435668073294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cd13192fe58b%3A0x3d57f9b4e3d33f47!2sCiprotec!5e0!3m2!1sfr!2sma!4v1583837507611!5m2!1sfr!2sma" width="auto" height="460" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>
          </div>

          <div class="col-md-6">
            <h3 class="mt-0 mb-30 text-uppercase mt-0 text-theme-colored">Contactez-nous</h3>
            <form method="post" action="{{url('/sendmessage')}}" >
                @if(session('success'))
                    <div class="alert alert-success text-center" role="alert">
                        {{session('success')}}
                    </div>
                @endif
              @csrf
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Nom prenom</label>
                  <input type="text" class="form-control"  name="name"  style="border-radius: 5px">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Email</label>
                  <input type="email" class="form-control"  name="mail" style="border-radius: 5px">
                </div>
              </div>
              <div class="form-group">
                <label for="inputAddress">Tel</label>
                <input type="tel" class="form-control"  placeholder="1234 Main St" name="phone" style="border-radius: 5px">
              </div>
              <div class="form-group">
                <label for="inputAddress2">Sujet</label>
                <input type="text" class="form-control"  placeholder="Apartment, studio, or floor" name="subject" style="border-radius: 5px">
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
{{--                  <label for="inputCity">Message</label>--}}
{{--                    <br>--}}
{{--                    <input type="checkbox" id="vehicle1"  value="Bike" style=" width :40px; float:left" name="message">--}}
{{--                    <label for="vehicle1"> I have a bike</label><br>--}}
{{--                    <input type="checkbox" id="vehicle2"  value="Car" style=" width :40px; float:left" name="message">--}}
{{--                    <label for="vehicle2"> I have a car</label><br>--}}
{{--                    <input type="checkbox" id="vehicle3"  value="Boat" style=" width :40px; float:left" name="message">--}}
{{--                    <label for="vehicle3"> I have a boat</label><br>--}}
{{--                    <input type="checkbox" id="vehicle3"  value="Boat" style=" width :40px; float:left" name="message"  onclick="test101()" >--}}
                    <label for="vehicle3">Message</label><br>
{{--                    <input type="text" class="form-control " style=" border-radius: 5px ; float:left;" name="autre" id="autre" disabled="on">--}}
                    <textarea name="autre" id="" class="form-control"  rows="3" style="border-radius: 5px"></textarea>
                </div>
              </div>
              <button  type="submit" class="btn btn-default btn-lg Hbtn  float-right btnform" style="background-color:#3ce2ad; font-weight:600; font-size: 16px;margin-top: 10px">Envoyer</button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
  <script>
      function test101()
      {
          $("#autre :input").prop("disabled", true);
          document.getElementById("demo").prop("disabled", true);
      }

      $( "#oui" ).click(function() {
          $("#Formnon :input").prop("disabled", true);
      });
      $( "#non" ).click(function() {
          $("#autre :input").prop("disabled", true);
      });
  </script>
 @endsection
