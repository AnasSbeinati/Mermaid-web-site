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
                            <li><a href="{{route('howitworks')}}" >How It Works</a></li>
                            <li><a href="{{route('pricing')}}" class="template-state-selected">Pricing</a></li>
                            <li><a href="{{route('contact')}}" >Contact</a></li>
                        </ul>
                    </div>

                </nav>
                <nav>

                    <!-- Mobile menu-->
                    <div class="template-component-menu-responsive">
                        <ul class="flexnav">
                            <li><a href="#"><span class="touch-button template-icon-meta-arrow-large-tb template-component-menu-button-close"></span>&nbsp;</a></li>
                            <li><a href="{{route('home')}}" >Home</a></li>
                            <li><a href="{{route('howitworks')}}" >How It Works</a></li>
                            <li><a href="{{route('pricing')}}" class="template-state-selected">Pricing</a></li>
                            <li><a href="{{route('contact')}}" >Contact</a></li>
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
                    <h1>Book A Mermaid</h1>
                </div>

                <div class="template-header-bottom-page-breadcrumb">
                    <a href="{{route('home')}}">Home</a><span class="template-icon-meta-arrow-right-12"></span><a href="#">Book a Mermaid</a>
                </div>

            </div>

        </div>

    </div>

    <!-- Content -->
    <div class="template-content">

        <!-- Section -->
        <div class="template-component-booking template-section template-main" id="template-booking">

            <!-- Booking form -->
            <form id="bookingSubmitRequest">

                <ul>
                    <!-- Package list -->
                    <li>

                        <!-- Step -->
                        <div class="template-component-booking-item-header template-clear-fix">
										<span>
											<span>1</span>
											<span>/</span>
											<span>3</span>
										</span>
                            <h3>Select Base Packages</h3>
                            <h5>Which package do you need?</h5>
                        </div>

                        <!-- Content -->
                        <div class="template-component-booking-item-content">

                            <!-- Package list -->
                            <ul class="template-component-booking-package-list">

                                <!-- Package -->
                                <li>

                                    <!-- Header -->
                                    <h4 class="template-component-booking-package-name">House Space 100-150 m </h4>

                                    <!-- Price -->
                                    <div class="template-component-booking-package-price">
                                        <span class="template-component-booking-package-price-currency">EGP</span>
                                        <span class="template-component-booking-package-price-total">220</span>
                                        <span class="template-component-booking-package-price-decimal">00</span>
                                    </div>

                                    <!-- Duration -->
                                    <div class="template-component-booking-package-duration">
                                        <span class="template-icon-booking-meta-duration"></span>
                                        <span class="template-component-booking-package-duration-value">240 mins </span>
                                        <span class="template-component-booking-package-duration-unit">(4 Hours)</span>
                                    </div>

                                    <!-- Services -->
                                    <ul class="template-component-booking-package-service-list">
                                        <li>Dusting and sweeping of all surfaces.</li>
                                        <li>Kitchen and bathrooms cleaning.</li>
                                        <li>Glass/Mirror cleaning.</li>
                                        <li>Vacuuming carpets.</li>
                                        <li>Setting up beds.</li>
                                    </ul>

                                    <!-- Button -->
                                    <div class="template-component-button-box">
                                        <a href="#" class="template-component-button">Select</a>
                                    </div>

                                </li>

                                <!-- Package -->
                                <li>

                                    <!-- Header -->
                                    <h4 class="template-component-booking-package-name">House Space 150-200 m</h4>

                                    <!-- Price -->
                                    <div class="template-component-booking-package-price">
                                        <span class="template-component-booking-package-price-currency">EGP</span>
                                        <span class="template-component-booking-package-price-total">260</span>
                                        <span class="template-component-booking-package-price-decimal">00</span>
                                    </div>

                                    <!-- Duration -->
                                    <div class="template-component-booking-package-duration">
                                        <span class="template-icon-booking-meta-duration"></span>
                                        <span class="template-component-booking-package-duration-value">300 mins</span>
                                        <span class="template-component-booking-package-duration-unit">5 hours</span>
                                    </div>

                                    <!-- Services -->
                                    <ul class="template-component-booking-package-service-list">
                                        <li>Dusting and sweeping of all surfaces.</li>
                                        <li>Kitchen and bathrooms cleaning.</li>
                                        <li>Glass/Mirror cleaning.</li>
                                        <li>Vacuuming carpets.</li>
                                        <li>Setting up beds.</li>
                                    </ul>

                                    <!-- Button -->
                                    <div class="template-component-button-box">
                                        <a href="#" class="template-component-button">Select</a>
                                    </div>

                                </li>

                                <!-- Package -->
                                <li>
                                    <h4 class="template-component-booking-package-name">House Space +200-250 m</h4>
                                    <div class="template-component-booking-package-price">
                                        <span class="template-component-booking-package-price-currency">EGP</span>
                                        <span class="template-component-booking-package-price-total">+300</span>
                                        <span class="template-component-booking-package-price-decimal">00</span>
                                    </div>
                                    <div class="template-component-booking-package-duration">
                                        <span class="template-icon-booking-meta-duration"></span>
                                        <span class="template-component-booking-package-duration-value">360+ mins</span>
                                        <span class="template-component-booking-package-duration-unit">+6 hours</span>
                                    </div>
                                    <ul class="template-component-booking-package-service-list">
                                        <li>Dusting and sweeping of all surfaces.</li>
                                        <li>Kitchen and bathrooms cleaning.</li>
                                        <li>Glass/Mirror cleaning.</li>
                                        <li>Vacuuming carpets.</li>
                                        <li>Setting up beds.</li>
                                    </ul>
                                    <div class="template-component-button-box">
                                        <a href="#" class="template-component-button">Select</a>
                                    </div>
                                </li>

                            </ul>

                        </div>

                    </li>
                    <!-- Service list -->
                    <li>

                        <!-- Step -->
                        <div class="template-component-booking-item-header template-clear-fix">
										<span>
											<span>2</span>
											<span>/</span>
											<span>3</span>
										</span>
                            <h3>Extra Services</h3>
                            <h5>Add Custom Extra Services to your selected package.</h5>
                        </div>

                        <!-- Content -->
                        <div class="template-component-booking-item-content">

                            <!-- Service list -->
                            <ul class="template-component-booking-service-list">


                                <!-- Service -->
                                <li data-id="oven-clean" class="template-clear-fix">
                                    <div class="template-component-booking-service-name">
                                        <span>Detergents</span>
                                        <a href="#" class="template-component-more-link">
                                            <span>More...</span>
                                            <span>Less...</span>
                                        </a>
                                        <div class="template-component-more-content">
                                            If you will not select this service, please make sure you have all cleaning materials and cleaning cloths.
                                        </div>
                                    </div>
                                    <div class="template-component-booking-service-duration">
                                        <span class="template-icon-booking-meta-duration"></span>
                                        <span class="template-component-booking-service-duration-value">0</span>
                                        <span class="template-component-booking-service-duration-unit">min</span>
                                    </div>
                                    <div class="template-component-booking-service-price">
                                        <span class="template-icon-booking-meta-price"></span>
                                        <span class="template-component-booking-service-price-currency">EGP</span>
                                        <span class="template-component-booking-service-price-value">20.00</span>
                                    </div>
                                    <div class="template-component-button-box">
                                        <a href="#" class="template-component-button">Select</a>
                                    </div>
                                </li>
                                <li data-id="oven-clean" class="template-clear-fix">
                                    <div class="template-component-booking-service-name">
                                        <span>Oven Cleaning </span>
                                        <a href="#" class="template-component-more-link">
                                            <span>More...</span>
                                            <span>Less...</span>
                                        </a>
                                        <div class="template-component-more-content">
                                            Cleaning your cook, and inside the oven, removing all grease and bad smells.
                                        </div>
                                    </div>
                                    <div class="template-component-booking-service-duration">
                                        <span class="template-icon-booking-meta-duration"></span>
                                        <span class="template-component-booking-service-duration-value">30</span>
                                        <span class="template-component-booking-service-duration-unit">min</span>
                                    </div>
                                    <div class="template-component-booking-service-price">
                                        <span class="template-icon-booking-meta-price"></span>
                                        <span class="template-component-booking-service-price-currency">EGP</span>
                                        <span class="template-component-booking-service-price-value">40.00</span>
                                    </div>
                                    <div class="template-component-button-box">
                                        <a href="#" class="template-component-button">Select</a>
                                    </div>
                                </li>
                                <li data-id="oven-clean" class="template-clear-fix">
                                    <div class="template-component-booking-service-name">
                                        <span>Inside Fridge </span>
                                        <a href="#" class="template-component-more-link">
                                            <span>More...</span>
                                            <span>Less...</span>
                                        </a>
                                        <div class="template-component-more-content">
                                            Cleaning all interior of the fridge and leaving it fresh.
                                        </div>
                                    </div>
                                    <div class="template-component-booking-service-duration">
                                        <span class="template-icon-booking-meta-duration"></span>
                                        <span class="template-component-booking-service-duration-value">30</span>
                                        <span class="template-component-booking-service-duration-unit">min</span>
                                    </div>
                                    <div class="template-component-booking-service-price">
                                        <span class="template-icon-booking-meta-price"></span>
                                        <span class="template-component-booking-service-price-currency">EGP</span>
                                        <span class="template-component-booking-service-price-value">40.00</span>
                                    </div>
                                    <div class="template-component-button-box">
                                        <a href="#" class="template-component-button">Select</a>
                                    </div>
                                </li>
                                <li data-id="oven-clean" class="template-clear-fix">
                                    <div class="template-component-booking-service-name">
                                        <span>Inside Cabinets  </span>
                                        <a href="#" class="template-component-more-link">
                                            <span>More...</span>
                                            <span>Less...</span>
                                        </a>
                                        <div class="template-component-more-content">
                                            Emptying and cleaning inside your cabinets.
                                            This applies for kitchen and bedrooms.
                                        </div>
                                    </div>
                                    <div class="template-component-booking-service-duration">
                                        <span class="template-icon-booking-meta-duration"></span>
                                        <span class="template-component-booking-service-duration-value">30</span>
                                        <span class="template-component-booking-service-duration-unit">min</span>
                                    </div>
                                    <div class="template-component-booking-service-price">
                                        <span class="template-icon-booking-meta-price"></span>
                                        <span class="template-component-booking-service-price-currency">EGP</span>
                                        <span class="template-component-booking-service-price-value">40.00</span>
                                    </div>
                                    <div class="template-component-button-box">
                                        <a href="#" class="template-component-button">Select</a>
                                    </div>
                                </li>


                            </ul>

                        </div>

                    </li>
                    <!-- Summary -->
                    <li>

                        <!-- Step -->
                        <div class="template-component-booking-item-header template-clear-fix">
										<span>
											<span>3</span>
											<span>/</span>
											<span>3</span>
										</span>
                            <h3>Booking Summary</h3>
                            <h5>Please provide us with your contact information.</h5>
                        </div>


                        <!-- Content -->
                        <div class="template-component-booking-item-content">

                            <ul class="template-component-booking-summary template-clear-fix">

                                <!-- Duration -->
                                <li class="template-component-booking-summary-duration">
                                    <div class="template-icon-booking-meta-total-duration"></div>
                                    <h5>
                                        <span>0</span>
                                        <span>h</span>
                                        &nbsp;
                                        <span>0</span>
                                        <span>min</span>
                                    </h5>
                                    <span>Duration</span>
                                </li>

                                <!-- Price -->
                                <li class="template-component-booking-summary-price ">
                                    <div class="template-icon-booking-meta-total-price"></div>
                                    <h5>
                                        <span class="template-component-booking-summary-price-symbol">EGP</span>
                                        <span class="template-component-booking-summary-price-value">0.00</span>
                                    </h5>
                                    <span>Total Price</span>
                                </li>

                            </ul>

                        </div>

                        <!-- Content -->
                        <div class="template-component-booking-item-content template-margin-top-reset">

                            <!-- Layout -->
                            <ul class="template-layout-50x50 template-layout-margin-reset template-clear-fix">

                                <!-- First name -->
                                <li class="template-layout-column-left template-margin-bottom-reset">
                                    <div class="template-component-form-field">
                                        <label for="booking-form-first-name">First Name *</label>
                                        <input type="text" name="booking-form-first-name" id="booking-form-first-name" required/>
                                    </div>
                                </li>

                                <!-- Second name -->
                                <li class="template-layout-column-right template-margin-bottom-reset">
                                    <div class="template-component-form-field">
                                        <label for="booking-form-second-name">Second Name *</label>
                                        <input type="text" name="booking-form-second-name" id="booking-form-second-name" required/>
                                    </div>
                                </li>

                            </ul>

                            <!-- Layout -->
                            <ul class="template-layout-50x50 template-layout-margin-reset template-clear-fix">

                                <!-- E-mail address -->
                                <li class="template-layout-column-left template-margin-bottom-reset">
                                    <div class="template-component-form-field">
                                        <label for="booking-form-email">E-mail Address *</label>
                                        <input type="text" name="booking-form-email" id="booking-form-email" required/>
                                    </div>
                                </li>

                                <!-- Phone number -->
                                <li class="template-layout-column-right template-margin-bottom-reset">
                                    <div class="template-component-form-field">
                                        <label for="booking-form-phone">Phone Number *</label>
                                        <input type="text" name="booking-form-phone" id="booking-form-phone" required/>
                                    </div>
                                </li>

                            </ul>

                            <!-- Layout -->
                            <ul class="template-layout-33x33x33 template-layout-margin-reset template-clear-fix">

                                <!-- Vehicle make -->
                                <li class="template-layout-column-left template-margin-bottom-reset">
                                    <div class="template-component-form-field">
                                        <label for="booking-form-address">Address</label>
                                        <input type="text" name="booking-form-address" id="booking-form-address" required/>
                                    </div>
                                </li>

                                <!-- Vehicle model -->
                                <li class="template-layout-column-center template-margin-bottom-reset">
                                    <div class="template-component-form-field">
                                        <label for="booking-form-appartment">Apartment Number</label>
                                        <input type="text" name="booking-form-appartment" id="booking-form-appartment" required/>
                                    </div>
                                </li>


                                <!-- Booking date -->
                                <li class="template-layout-column-right template-margin-bottom-reset">
                                    <div class="template-component-form-field">
                                        <label for="booking-form-date">Booking Date *</label>
                                        <input type="text" data-field="datetime"  name="booking-form-date" id="booking-form-date" required/>
                                    </div>
                                </li>

                            </ul>

                            <!-- Layout -->
                            <ul class="template-layout-100 template-layout-margin-reset template-clear-fix">

                                <!-- Message -->
                                <li>
                                    <div class="template-component-form-field">
                                        <label for="booking-form-message">Additional Comments *</label>
                                        <textarea rows="1" cols="1" name="booking-form-message" id="booking-form-message" required></textarea>
                                    </div>
                                </li>

                            </ul>

                            <!-- Text + submit button -->
                            <div class="template-align-center template-clear-fix template-margin-top-2">
                                <p class="template-padding-reset template-margin-bottom-2">We will confirm your appointment with you by phone or e-mail within 24 hours of receiving your request.</p>
                                <input type="submit" value="Confirm Booking" class="template-component-button" name="booking-form-submit" id="booking-form-submit"/>
                                <input type="hidden" value="" name="booking-form-data" id="booking-form-data"/>
                            </div>

                        </div>

                    </li>

                </ul>

            </form>

        </div>

    </div>
    <!-- Wrapper for date picker -->
    <div id="dtBox"></div>
    <!-- Plugins files -->
    <script type="text/javascript" src="{{url('/plugin/booking/jquery.booking.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($)
        {
            $('#template-booking').booking();
            $("#booking-form-submit").click(function(){
                $.post("http://10.1.170.145/mermaid/api/request-booking",
                        {
                            first_name : $("#booking-form-first-name").val(),
                            second_name :$("#booking-form-second-name").val(),
                            phone_number : $("#booking-form-phone").val(),
                            address : $("#booking-form-address").val(),
                            email : $("#booking-form-email").val(),
                            apartment_number : $("#booking-form-appartment").val(),
                            booking_date : $("#booking-form-date").val(),
                            comments :$("#booking-form-message").val()
                        },
                        function(data,status){
                            alert("Data: " + data + "\nStatus: " + status);
                        });
            });
        });
    </script>
@stop