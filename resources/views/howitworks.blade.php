@extends('layouts.master')
@section('page')
    <!-- Header -->
    <div class="template-header template-header-background template-header-background-1">

        <!-- Top header -->
        <div class="template-header-top">

            <!-- Logo -->
            <div class="template-header-top-logo">
                <a href="{{route('home')}}" title="">
                    <img src="media/image/logo.png" alt="" class="template-logo"/>
                    <img src="media/image/logo_sticky.png" alt="" class="template-logo template-logo-sticky"/>
                </a>
            </div>

            <!-- Menu-->
            <div class="template-header-top-menu template-main">
                <nav>

                    <!-- Default menu-->
                    <div class="template-component-menu-default">
                        <ul class="sf-menu">
                            <li><a href="{{route('home')}}" >Home</a></li>
                            <li><a href="{{route('howitworks')}}" class="template-state-selected">How It Works</a></li>
                            <li><a href="{{route('pricing')}}">Pricing</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                        </ul>
                    </div>

                </nav>
                <nav>

                    <!-- Mobile menu-->
                    <div class="template-component-menu-responsive">
                        <ul class="flexnav">
                            <li><a href="#"><span class="touch-button template-icon-meta-arrow-large-tb template-component-menu-button-close"></span>&nbsp;</a></li>
                            <li><a href="{{route('home')}}" >Home</a></li>
                            <li><a href="{{route('howitworks')}}" class="template-state-selected">How It Works</a></li>
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
                    <li><a href="#" class="template-icon-meta-search"></a></li>
                    <li><a href="#" class="template-icon-meta-menu"></a></li>
                </ul>
            </div>

        </div>

        <div class="template-header-bottom">

            <div class="template-main">

                <div class="template-header-bottom-page-title">
                    <h1>How it Works</h1>
                </div>

                <div class="template-header-bottom-page-breadcrumb">
                    <a href="{{route('home')}}">Home</a><span class="template-icon-meta-arrow-right-12"></span><a href="#">How it Works</a>
                </div>

            </div>

        </div>

    </div>


    <!-- Content -->
    <div class="template-content">

        <!-- Section -->
        <div class="template-section template-section-padding-1 template-clear-fix template-main">

            <!-- Header + subheader -->
            <div class="template-component-header-subheader">
                <h2>It's never been easier</h2>
                <div></div>
                <span>Simple steps to get your house cleaned</span>
            </div>

            <div class="template-clear-fix template-align-center">

                <!-- Text -->
                <p>
                    We are redefining cleaning as you know it. We offer a service we all need, all the time. Forget the hassle of looking for a trusted reliable cleaner and get your mermaid NOW!

                </p>

                <!-- Space -->
                <div class="template-component-space template-component-space-2"></div>

                <!-- Button -->
                <a href="{{route('pricing')}}" class="template-component-button template-align-center">Get a Mermaid</a>

            </div>

            <!-- Space -->
            <div class="template-component-space template-component-space-2"></div>

            <!-- Divider -->
            <div class="template-component-divider"></div>

            <!-- Space -->
            <div class="template-component-space template-component-space-2"></div>

            <!-- Features list -->
            <div class="template-component-feature-list template-component-feature-list-position-left">

                <!-- Layout 33x33x33% -->
                <ul class="template-layout-33x33x33 template-clear-fix">

                    <!-- Left column -->
                    <li class="template-layout-column-left">
                        <span class="template-icon-feature-team"></span>
                        <h5>Sklilled Mermaids</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at iaculis lorem. Phasellus faucibus est mauris, id dignissim urna venenatis sit amet. Phasellus lobortis metus ut lacinia varius.</p>
                    </li>

                    <!-- Center column -->
                    <li class="template-layout-column-center">
                        <span class="template-icon-feature-share-time"></span>
                        <h5>Always On Time</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at iaculis lorem. Phasellus faucibus est mauris, id dignissim urna venenatis sit amet. Phasellus lobortis metus ut lacinia varius.</p>
                    </li>

                    <!-- Right column -->
                    <li class="template-layout-column-right">
                        <span class="template-icon-feature-vacuum-cleaner"></span>
                        <h5>Best Cleaning Equipment</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at iaculis lorem. Phasellus faucibus est mauris, id dignissim urna venenatis sit amet. Phasellus lobortis metus ut lacinia varius.</p>
                    </li>
                </ul>
            </div>

        </div>

        <!-- Section -->
        <div class="template-section template-section-padding-reset template-clear-fix">

            <!-- Counter list -->
            <div class="template-component-counter-box-list">

                <!-- Layout 25x25x25x25% -->
                <ul class="template-layout-25x25x25x25 template-layout-margin-reset template-clear-fix">

                    <!-- Left column -->
                    <li class="template-layout-column-left template-background-color-1">
                        <span class="template-value">25</span>
                        <span class="template-icon-feature-share-time"></span>
                        <h6>Requests a Day</h6>
                    </li>

                    <!-- Center left column -->
                    <li class="template-layout-column-center-left template-background-color-2">
                        <span class="template-value">1520</span>
                        <span class="template-icon-feature-hose-nozzle"></span>
                        <h6>Houses Cleaned</h6>
                    </li>

                    <!-- Center right column -->
                    <li class="template-layout-column-center-right template-background-color-1">
                        <span class="template-value">225</span>
                        <span class="template-icon-feature-user-chat"></span>
                        <h6>Customer Reviews</h6>
                    </li>

                    <!-- Right column -->
                    <li class="template-layout-column-right template-background-color-2">
                        <span class="template-value">1252</span>
                        <span class="template-icon-feature-coffee"></span>
                        <h6>Coffees Released</h6>
                    </li>

                </ul>

            </div>

        </div>
    </div>
@stop    