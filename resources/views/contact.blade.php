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
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('howitworks')}}">How It Works</a></li>
                            <li><a href="{{route('pricing')}}">Pricing</a></li>
                            <li><a href="{{route('contact')}}" class="template-state-selected">Contact</a></li>
                        </ul>
                    </div>
                </nav>
                <nav>
                    <!-- Mobile menu-->
                    <div class="template-component-menu-responsive">
                        <ul class="flexnav">
                            <li><a href="#"><span
                                            class="touch-button template-icon-meta-arrow-large-tb template-component-menu-button-close"></span>&nbsp;
                                </a></li>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('howitworks')}}">How It Works</a></li>
                            <li><a href="{{route('pricing')}}">Pricing</a></li>
                            <li><a href="{{route('contact')}}" class="template-state-selected">Contact</a></li>
                        </ul>
                    </div>
                </nav>
                <script type="text/javascript">
                    jQuery(document).ready(function ($) {
                        $('.template-header-top').templateHeader();
                    });
                </script>
            </div>

            <!-- Social icons -->
            <div class="template-header-top-icon-list template-component-social-icon-list-1">
                <ul class="template-component-social-icon-list">
                    <li><a href="http://www.facebook.com/mermaideg" class="template-icon-social-facebook"
                           target="_blank"></a></li>
                    <li><a href="http://www.instagram.com/mermaideg" class="template-icon-social-instagram"
                           target="_blank"></a></li>
                    <li><a href="https://www.linkedin.com/company-beta/10415531/" class="template-icon-social-linkedin"
                           target="_blank"></a></li>
                    <li><a href="#" class="template-icon-meta-search"></a></li>
                    <li><a href="#" class="template-icon-meta-menu"></a></li>
                </ul>
            </div>

        </div>

        <div class="template-header-bottom">

            <div class="template-main">

                <div class="template-header-bottom-page-title">
                    <h1>Contact</h1>
                </div>

                <div class="template-header-bottom-page-breadcrumb">
                    <a href="{{route('home')}}">Home</a><span class="template-icon-meta-arrow-right-12"></span><a
                            href="#">Contact</a>
                </div>

            </div>

        </div>

    </div>

    <!-- Content -->
    <div class="template-content">

        <!-- Section -->
        <div class="template-section template-section-padding-1 template-main template-clear-fix">

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
                        <h5>Our Headquarters</h5>
                        <p>
                            Cairo
                            <br/>
                            Cairo, Egypt
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

        <!-- Section -->
        <div class="template-section template-padding-reset template-main template-clear-fix">

            <!-- Contact form -->
            <form >

                <!-- Layout 50x50% -->
                <ul class="template-layout-50x50 template-layout-margin-reset template-clear-fix">

                    <!-- Left column -->
                    <li class="template-layout-column-left template-margin-bottom-reset">
                        <div class="template-component-form-field template-state-block">
                            <label for="contact-form-name">Your Name *</label>
                            <input type="text" name="contact-form-name" id="contact-form-name"/>
                        </div>
                        <div class="template-component-form-field template-state-block">
                            <label for="contact-form-email">Your E-mail *</label>
                            <input type="text" name="contact-form-email" id="contact-form-email"/>
                        </div>
                        <div class="template-component-form-field template-state-block">
                            <label for="contact-form-phone">Phone Number</label>
                            <input type="text" name="contact-form-phone" id="contact-form-phone"/>
                        </div>
                    </li>

                    <!-- Right column -->
                    <li class="template-layout-column-right template-margin-bottom-reset">
                        <div class="template-component-form-field template-state-block">
                            <label for="contact-form-message">Message *</label>
                            <textarea rows="1" cols="1" name="contact-form-message" id="contact-form-message"></textarea>
                        </div>
                    </li>

                </ul>

                <!-- Button -->
                <div class="template-align-center template-clear-fix template-margin-top-1">
								<span class="template-state-block">
									<input type="button" value="Submit Message" class="template-component-button"
                                           name="contact-submit" id="contact-submit"/>
								</span>
                </div>

            </form>

            <!-- Space -->
            <div class="template-component-space template-component-space-4"></div>

        </div>
        
    </div>
    <script>
        $(document).ready(function () {
            $("#contact-submit").click(function () {
                $.post("{{route('send.message')}}",
                        {
                            name: $("#contact-form-name").val(),
                            phone_number: $("#contact-form-phone").val(),
                            email: $("#contact-form-email").val(),
                            message: $("#contact-form-message").val()
                        },
                        function (data, status) {
                            alert("Data: " + data + "\nStatus: " + status);
                        });
            });
            $("#becomeMermaid").click(function () {
                $("#mermaidModal").modal('toggle')
            })
        });
    </script>
@stop