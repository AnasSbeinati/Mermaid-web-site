@extends('layouts.master')
@section('page')
<!-- Header -->
<div class="template-header">

    <!-- Top header -->
    <div class="template-header-top">

        <!-- Logo -->
        <div class="template-header-top-logo">
            <a href="{{route('home')}}" title="">
                <img src="{{url('/media/image/logo.png')}}" alt="" class="template-logo"/>
                <img src="{{url('/media/image/logo_sticky.png')}}" alt="" class="template-logo template-logo-sticky"/>
            </a>
        </div>

        <!-- Menu-->
        <div class="template-header-top-menu template-main">
            <nav>

                <!-- Default menu-->
                <div class="template-component-menu-default">
                    <ul class="sf-menu">
                        <li><a href="{{route('home')}}" class="template-state-selected">Home</a></li>
                        <li><a href="{{route('howitworks')}}">How It Works</a></li>
                        <li><a href="{{route('pricing')}}">Pricing</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </div>

            </nav>
            <nav>

                <!-- Mobile menu-->
                <div class="template-component-menu-responsive">
                    <ul class="flexnav">
                        <li><a href=" "><span class="touch-button template-icon-meta-arrow-large-tb template-component-menu-button-close"></span>&nbsp;</a></li>
                        <li><a href="{{route('home')}}" class="template-state-selected">Home</a></li>
                        <li><a href="{{route('howitworks')}}">How It Works</a></li>
                        <li><a href="{{route('pricing')}}">Pricing</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </div>

            </nav>
            <script type="text/javascript">
                jQuery(document).ready(function($)
                {
                    $('.template-header-top').templateHeader();
                });
            </script>
        </div>

        <!-- Social icons -->
        <div class="template-header-top-icon-list template-component-social-icon-list-1">
            <ul class="template-component-social-icon-list">
                <li><a href="http://www.facebook.com/mermaideg" class="template-icon-social-facebook" target="_blank"></a></li>
                <li><a href="http://www.instagram.com/mermaideg" class="template-icon-social-instagram" target="_blank"></a></li>
                <li><a href="https://www.linkedin.com/company-beta/10415531/" class="template-icon-social-linkedin" target="_blank"></a></li>
                <li><a href=" " class="template-icon-meta-search"></a></li>
                <li><a href=" " class="template-icon-meta-menu"></a></li>
            </ul>
        </div>

    </div>

    <div class="template-header-bottom">

        <div id="rev_slider_wrapper" class="rev_slider_wrapper fullwidthbanner-container">

            <div id="rev_slider" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
                <ul>
                    <!-- Slide 1 -->
                    <li data-index="slide-1" data-transition="fade" data-slotamount="1" data-easein="default" data-easeout="default" data-masterspeed="500" data-rotate="0" data-delay="6000">
                        <!-- Main image -->
                        <img src="{{url('/media/image/slider/slider_011.jpg')}}" alt="slide-1" data-bgfit="cover" data-bgposition="center bottom">
                        <!-- Layers -->
                        <!-- Layer 01 -->
                        <div class="tp-caption tp-resizeme"
                             data-x="['center','center','center','center','center']" data-hoffset="['0','0','0','0','0']"
                             data-y="['middle','middle','middle','middle','middle']" data-voffset="['-120','-105','-91','-33','-36']"
                             data-fontsize="['25','25','25','15','14']"
                             data-fontweight="['700','700','700','700','900']"
                             data-lineheight="['25','25','25','15','27']"
                             data-whitespace="['nowrap','nowrap','nowrap','nowrap','normal']"
                             data-width="['auto','auto','auto','auto','300']"
                             data-height="auto"
                             data-basealign="grid"

                             data-transform_idle="o:1;"

                             data-transform_in="o:1;x:[175%];y:0px;z:0px;s:2000;e:Power4.easeInOut;"
                             data-transform_out="o:0;x:0px;y:0px;z:0px;s:1000;e:Power4.easeInOut;"

                             data-mask_in="x:[-100%];y:0px;s:inherit;e:inherit;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"

                             data-start="100"

                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="letter-spacing: 2px;"
                        >

                            WELCOME TO MERMAID
                        </div>

                        <!-- Layer 02 -->
                        <div class="tp-caption tp-resizeme"
                             data-x="['center','center','center','center','center']" data-hoffset="['0','0','0','0','0']"
                             data-y="['middle','middle','middle','middle','middle']" data-voffset="['-41','-35','-29','17','26']"
                             data-fontsize="['62','55','43','29','22']"
                             data-fontweight="['900','900','900','700','700']"
                             data-lineheight="['62','55','43','29','32']"
                             data-whitespace="['nowrap','nowrap','nowrap','nowrap','normal']"
                             data-width="['auto','auto','auto','auto','300']"
                             data-height="auto"
                             data-basealign="grid"

                             data-transform_idle="o:1;"

                             data-transform_in="o:1;x:0px;y:[100%];z:0px;s:2000;e:Power4.easeInOut;"
                             data-transform_out="o:1;x:0px;y:[100%];z:0px;s:1000;e:Power4.easeInOut;"

                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"

                             data-start="1000"

                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="letter-spacing: 4px;"
                        >

                           HIRE A TRUSTED PROFESSIONAL

                        </div>

                        <!-- Layer 03 -->
                        <div class="tp-caption tp-resizeme"
                             data-x="['center','center','center','center','center']" data-hoffset="['0','0','0','0','0']"
                             data-y="['middle','middle','middle','middle','middle']" data-voffset="['41','35','29','60','74']"
                             data-fontsize="['62','55','43','29','22']"
                             data-fontweight="['900','900','900','700','700']"
                             data-lineheight="['62','55','43','29','32']"
                             data-whitespace="['nowrap','nowrap','nowrap','nowrap','normal']"
                             data-width="['auto','auto','auto','auto','300']"
                             data-height="auto"
                             data-basealign="grid"

                             data-transform_idle="o:1;"

                             data-transform_in="o:1;x:0px;y:[100%];z:0px;s:2000;e:Power4.easeInOut;"
                             data-transform_out="o:1;x:0px;y:[100%];z:0px;s:1000;e:Power4.easeInOut;"

                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"

                             data-start="1500"

                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="letter-spacing: 4px;"
                        >

                            AND GET CLEANING DONE !
                        </div>

                        <!-- Layer 04 -->
                        <div class="tp-caption tp-resizeme"
                             data-x="['center','center','center','center','center']" data-hoffset="['0','0','0','0','0']"
                             data-y="['middle','middle','middle','middle','middle']" data-voffset="['150','137','121','142','165']"
                             data-fontsize="['15','15','15','15','15']"
                             data-fontweight="['400','400','400','400','400']"
                             data-lineheight="['15','15','15','15','15']"
                             data-whitespace="['nowrap','nowrap','nowrap','nowrap','nowrap']"
                             data-width="['auto','auto','auto','auto','auto']"
                             data-height="auto"
                             data-basealign="grid"

                             data-transform_idle="o:1;"

                             data-transform_in="o:1;x:0px;y:[-100%];z:0px;s:1500;e:Power4.easeInOut;"
                             data-transform_out="o:1;x:0px;y:[100%];z:0px;s:750;e:Power4.easeInOut;"

                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"

                             data-start="2500"

                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                        >

                            <a class="template-component-button template-color-white" href="{{route('pricing')}}" title="GET A MERMAID">GET A MERMAID</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!--/-->
        <div class="as-seen-on">
            <h4>As Seen On</h4>
            <div class="images">
                <img src="media/image/cbc%202%20png.png">
                <img src="media/image/scene-logo.png">
            </div>
        </div>
        <!-- Slider JS -->
        <script type="text/javascript">
            var tpj=jQuery;
            var revapi4;
            tpj(document).ready(function() {
                if(tpj("#rev_slider").revolution == undefined){
                    revslider_showDoubleJqueryError("#rev_slider");
                }else{
                    revapi4 = tpj("#rev_slider").show().revolution({
                        jsFileLocation:"script/",
                        sliderType:"standard",
                        sliderLayout:"fullwidth",
                        dottedOverlay:"none",
                        delay:9000,
                        responsiveLevels:[1920,1189,959,767,479],
                        gridwidth:[1170,940,750,460,300],
                        gridheight:[750,600,550,550,550],
                        lazyType:"none",
                        navigation: {
                            keyboardNavigation:"on",
                            mouseScrollNavigation:"off",
                            onHoverStop:"on",
                            keyboard_direction: "horizontal",
                            touch:{
                                touchenabled:"on",
                                swipe_treshold : 75,
                                swipe_min_touches : 1,
                                drag_block_vertical:false,
                                swipe_direction:"horizontal",
                            },
                            arrows: {
                                style:"preview1",
                                enable:true,
                                hide_onmobile:true,
                                hide_onleave:true,
                                hide_delay:200,
                                hide_delay_mobile:1500,
                                hide_under:0,
                                hide_over:9999,
                                tmp:'',
                                left: {
                                    h_align:"left",
                                    v_align:"center",
                                    h_offset:0,
                                    v_offset:0,
                                },
                                right: {
                                    h_align:"right",
                                    v_align:"center",
                                    h_offset:0,
                                    v_offset:0,
                                }
                            },
                            bullets: {
                                style:"preview1",
                                enable:true,
                                hide_onmobile:true,
                                hide_onleave:true,
                                hide_delay:200,
                                hide_delay_mobile:1500,
                                hide_under:0,
                                hide_over:9999,
                                direction:"horizontal",
                                h_align:"center",
                                v_align:"bottom",
                                space:10,
                                h_offset:0,
                                v_offset:20,
                                tmp:'<span class="tp-bullet-image"></span><span class="tp-bullet-title"></span>'
                            },
                        },
                        shadow:0,
                        spinner:"spinner1",
                        stopAfterLoops:-1,
                        stopAtSlide:-1,
                        disableProgressBar: "on",
                        shuffle:"off",
                        autoHeight:"off",
                        hideSliderAtLimit:0,
                        hideCaptionAtLimit:0,
                        hideAllCaptionAtLilmit:0,
                        debugMode:false,
                        fallbacks: {
                            simplifyAll:"off",
                            nextSlideOnWindowFocus:"off",
                            disableFocusListener:false,
                        }
                    });
                }
            }); /*ready*/
        </script>

    </div>

</div>

<!-- Content -->
<div class="template-content">

    <!-- Section -->
    <div class="template-section template-section-padding-1 template-clear-fix template-main">

        <!-- Header + subheader -->
        <div class="template-component-header-subheader">
            <h2>What is Mermaid</h2>
            <div></div>
            <span>On demand cleaning services</span>
        </div>

        <!-- Layout 33x66% -->
        <div class="template-layout-33x66 template-clear-fix">

            <!-- Left column -->
            <div class="template-layout-column-left">
                <img src="{{url('/media/image/sample/460x678/image_01.jpg')}}" alt=""/>
            </div>

            <!-- Right column -->
            <div class="template-layout-column-right">

                <!-- Text -->
                <p class="template-padding-reset">
                    Mermaid is the best solution to get a professional trusted cleaner!

                </p>

                <!-- Feature list -->
                <div class="template-component-feature-list template-component-feature-list-position-top template-clear-fix">

                    <!-- Layout 50x50% -->
                    <ul class="template-layout-50x50 template-clear-fix">

                        <!-- Left column -->
                        <li class="template-layout-column-left template-margin-bottom-reset">
                            <div class="template-component-space template-component-space-2"></div>
                            <span class="template-icon-feature-water-drop"></span>
                            <h5>The Best House Cleaning Service</h5>
                            <ul class="template-component-list">
                                <li><span class="template-icon-meta-check"></span>Quality Guaranteed</li>
                                <li><span class="template-icon-meta-check"></span>Trained and trusted professionals</li>
                                <li><span class="template-icon-meta-check"></span>Best market materials</li>
                            </ul>
                        </li>

                        <!-- Right column -->
                        <li class="template-layout-column-right template-margin-bottom-reset">
                            <div class="template-component-space template-component-space-2"></div>
                            <span class="template-icon-feature-user-chat"></span>
                            <h5>Contact Us</h5>
                            <ul class="template-component-list">
                                <li><span class="template-icon-meta-check"></span>Happy to help you</li>
                                <li><span class="template-icon-meta-check"></span>Our customer service are here for you</li>
                                <li><span class="template-icon-meta-check"></span>CChat with us on facebook</li>
                            </ul>
                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

    <!-- Section -->
    <div class="template-section template-section-padding-reset template-clear-fix template-background-color-1">

        <!-- Call to action -->
        <div class="template-component-call-to-action">
            <div class="template-main">
                <h3>No 1. House cleaning service</h3>
                <a href="{{route('pricing')}}" class="template-component-button">GET A MERMAID</a>
            </div>
        </div>

    </div>

    <!-- Section -->
    <div class="template-section template-section-padding-1 template-clear-fix template-main">

        <!-- Features list -->
        <div class="template-component-feature-list template-component-feature-list-position-left template-clear-fix">

            <!-- Layout 33x33x33% -->
            <ul class="template-layout-33x33x33 template-clear-fix">

                <!-- Left column -->
                <li class="template-layout-column-left">
                    <span class="template-icon-feature-phone-circle"></span>
                    <h5>Call Us At</h5>
                    <p>
                        (+20) 0109 105 6106<br/>
                    </p>
                </li>

                <!-- Center column -->
                <li class="template-layout-column-center">
                    <span class="template-icon-feature-location-map"></span>
                    <h5>Available at </h5>
                    <p>
                        Cairo
                        <br/>
                        maady <br/>
                        mohndsien <br/>
                        zamalek <br/>
                        downtown <br/>
                    </p>
                </li>

                <!-- Right column -->
                <li class="template-layout-column-right">
                    <span class="template-icon-feature-clock"></span>
                    <h5>Working hours</h5>
                    <p>
                        Everyday: 8 am - 6 pm<br/>
                    </p>
                </li>

            </ul>
        </div>

    </div>

</div>

<!-- Wrapper for date picker -->
<div id="dtBox"></div>
@stop