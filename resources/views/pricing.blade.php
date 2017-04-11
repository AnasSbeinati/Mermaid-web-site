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
                    <li><a id="login_buttom">Login</a></li>
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
                    <h1>Book your trusted cleaners</h1>
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
                                    <input class="state" hidden value="0">
                                    <!-- Header -->
                                    <h4 class="template-component-booking-package-name">House Space 80-120 m </h4>

                                    <!-- Price -->
                                    <div class="template-component-booking-package-price">
                                        <span class="template-component-booking-package-price-currency">EGP</span>
                                        <span class="template-component-booking-package-price-total">220</span>
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
                                        <li>Tables and chairs cleaned.</li>
                                        <li>Furniture dusted.</li>
                                        <li>Tub and shower tiles scrubbed.</li>
                                        <li>disinfected and rinsed
                                            Toilets.</li>
                                        <li>Cabinets exterior cleaned.</li>
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
                                    <input class="state" hidden value="1">
                                    <!-- Header -->
                                    <h4 class="template-component-booking-package-name">House Space 120-160 m</h4>

                                    <!-- Price -->
                                    <div class="template-component-booking-package-price">
                                        <span class="template-component-booking-package-price-currency">EGP</span>
                                        <span class="template-component-booking-package-price-total">250</span>
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
                                        <li>Tables and chairs cleaned.</li>
                                        <li>Furniture dusted.</li>
                                        <li>Tub and shower tiles scrubbed.</li>
                                        <li>disinfected and rinsed
                                            Toilets.</li>
                                        <li>Cabinets exterior cleaned.</li>
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
                                    <input class="state" hidden value="2">

                                    <h4 class="template-component-booking-package-name">House Space 160-200 m</h4>
                                    <div class="template-component-booking-package-price">
                                        <span class="template-component-booking-package-price-currency">EGP</span>
                                        <span class="template-component-booking-package-price-total">290+</span>
                                    </div>
                                    <div class="template-component-booking-package-duration">
                                        <span class="template-icon-booking-meta-duration"></span>
                                        <span class="template-component-booking-package-duration-value">360 mins</span>
                                        <span class="template-component-booking-package-duration-unit">+6 hours</span>
                                    </div>
                                    <ul class="template-component-booking-package-service-list">
                                        <li>Dusting and sweeping of all surfaces.</li>
                                        <li>Kitchen and bathrooms cleaning.</li>
                                        <li>Glass/Mirror cleaning.</li>
                                        <li>Vacuuming carpets.</li>
                                        <li>Tables and chairs cleaned.</li>
                                        <li>Furniture dusted.</li>
                                        <li>Tub and shower tiles scrubbed.</li>
                                        <li>disinfected and rinsed
                                            Toilets.</li>
                                        <li>Cabinets exterior cleaned.</li>
                                        <li>Vacuuming carpets.</li>
                                        <li>Setting up beds.</li>
                                    </ul>
                                    <div class="template-component-button-box">
                                        <a href="#" class="template-component-button">Select</a>
                                    </div>
                                </li>

                                <!-- Package -->
                                <li>
                                    <input class="state" hidden value="3">
                                    <h4 class="template-component-booking-package-name">House Space 200-250+ m</h4>
                                    <div class="template-component-booking-package-price">
                                        <span class="template-component-booking-package-price-currency">EGP</span>
                                        <span class="template-component-booking-package-price-total">300+</span>
                                    </div>
                                    <div class="template-component-booking-package-duration">
                                        <span class="template-icon-booking-meta-duration"></span>
                                        <span class="template-component-booking-package-duration-value">360+ mins</span>
                                        <span class="template-component-booking-package-duration-unit">6+ hours</span>
                                    </div>
                                    <ul class="template-component-booking-package-service-list">
                                        <li>Dusting and sweeping of all surfaces.</li>
                                        <li>Kitchen and bathrooms cleaning.</li>
                                        <li>Glass/Mirror cleaning.</li>
                                        <li>Vacuuming carpets.</li>
                                        <li>Tables and chairs cleaned.</li>
                                        <li>Furniture dusted.</li>
                                        <li>Tub and shower tiles scrubbed.</li>
                                        <li>disinfected and rinsed
                                            Toilets.</li>
                                        <li>Cabinets exterior cleaned.</li>
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
                                       {{-- <a href="#" class="template-component-more-link">
                                            <span>More...</span>
                                            <span>Less...</span>
                                        </a>--}}
                                        <div class="template-component-more-content" style="display: block">
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
                                        <span class="">FREE</span>
                                        <span class="template-component-booking-service-price-value" style="display: none">00.00</span>
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
                                <h4 id="filling_form" style="color:red;display: none;text-transform: uppercase;">Fill The form correctly</h4>
                                <p class="template-padding-reset template-margin-bottom-2">We will confirm your appointment with you by phone or e-mail within 24 hours of receiving your request.</p>
                                <input type="button" value="Confirm Booking" class="template-component-button" name="booking-form-submit" id="confirm-booking"/>
                                <input type="hidden" value="" name="booking-form-data" id="booking-form-data"/>
                            </div>

                        </div>

                    </li>

                </ul>

            </form>

        </div>

    </div>
    <!--login modal-->
    <div id="logingModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Have An Account</h4>
                </div>
                <div class="modal-body">

                    <div id="exTab3">
                        <ul  class="nav nav-pills">
                            <li class="active">
                                <a  href="#1b" data-toggle="tab">Login</a>
                            </li>
                            <li><a href="#2b" data-toggle="tab">Sign up</a>
                            </li>
                        </ul>

                        <div class="tab-content clearfix">
                            <div class="tab-pane active" id="1b">
                                <form id="login" class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input id="login-email" name="Email" type="text" placeholder="Email *" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input id="login-pass" type="password" placeholder="Password *" class="form-control" required>
                                        </div>
                                    </div>
                                    <span id="login_error" style="color: red;display: none;padding-left: 20px;text-transform: uppercase">Email Or Password is Wrong</span>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" id="login-submit" class="btn btn-primary">Login</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="2b">
                                <form id="sign-up" class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input id="sign-up-email" name="Email" type="Email" placeholder="email *" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input id="sign-up-pass" type="password" placeholder="Password *" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input id="sign-up-pass2"  type="password" placeholder="Confirm Password *" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group addition">
                                        <div class="col-sm-12">
                                            <input id="sign-up-first_name"  type="text" placeholder="First Name *" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group addition">
                                        <div class="col-sm-12">
                                            <input id="sign-up-second_name"  type="text" placeholder="Second Name *" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group addition">
                                        <div class="col-sm-12">
                                            <input id="sign-up-phone"  type="text" placeholder="Phone Number*" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group addition">
                                        <div class="col-sm-12">
                                            <input id="sign-up-address"  type="text" placeholder="Address *" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group addition">
                                        <div class="col-sm-12">
                                            <input id="sign-up-apartment_number"  type="text" placeholder="Apartment Number *" class="form-control" required>
                                        </div>
                                    </div>
                                    <span id="unothrized"style="color: red;padding-left: 20px;display: none;text-transform: uppercase">This Email Is Exist</span>
                                    <span id="not_equal" style="color: red;padding-left: 20px;display: none;text-transform: uppercase">The password is not compatable</span>
                                    <span id="embty_input" style="color: red;padding-left: 20px;display: none;text-transform: uppercase">Fill the form completly</span>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" data-target="modal" id="sign-up-submit" class="btn btn-primary">Sign up</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
    <!--successfully-->
    <div id="logingMsgSuccModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <br><br>
                    <div class="center-block" style="text-align: center;">

                        <h2>Logged in <span style="color: #8220a2;">Successfully  !!</span></h2>
                        <br>
                        <h4 id="succes_buttom">Confirm The Booking Please</h4>
                        <h4 id="back_buttom" style="display: none;">Go Back and fill the booking form</h4>
                        <button type="button" id="confirmed-booking" class="btn btn-default btn-lg btn-back">Confirm Booking</button>
                        <button type="button" id="close-modal" data-dismiss="modal" class="btn btn-default btn-lg">Back</button>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
    <div id="ConfirmSuccModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <br><br>
                    <div class="center-block" style="text-align: center;">

                        <h2>THANK<span style="color: #8220a2;"> YOU!!</span></h2>
                        <br>
                        <h5 style="text-transform: uppercase">We will confirm the appointment with you soon.</h5>
                        <br>
                        <button type="button" id="close-modal" data-dismiss="modal" class="btn btn-default btn-lg">Back</button>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
    <!-- Wrapper for date picker -->
    <div id="dtBox"></div>
    <!-- Plugins files -->
    <script type="text/javascript" src="{{url('/plugin/booking/jquery.booking.js')}}"></script>
    <script type="text/javascript">
        function checkBookingForm() {
            if($("#booking-form-first-name").val()===""||
                $("#booking-form-second-name").val()===""||
                $("#booking-form-phone").val()===""||
                $("#booking-form-address").val()===""||
                $("#booking-form-email").val()===""||
                $("#booking-form-appartment").val()===""||
                $("#booking-form-date").val()===""){
                console.log("form is empty");
                return false;
            }
            else {
                return true;
            }
        }
        function checkSignUp() {
            if($("#sign-up-first_name").val()===""||
                $("#sign-up-second_name").val()===""||
                $("#sign-up-pass").val()===""||
                $("#sign-up-pass2").val()===""||
                $("#sign-up-address").val()===""||
                $("#sign-up-phone").val()===""||
                $("#sign-up-apartment_number").val()===""||
                $("#sign-up-email").val()===""){
                /*console.log("form is empty");*/
                console.log($("#sign-up-first_name").val());
                console.log($("#sign-up-second_name").val());
                console.log($("#sign-up-phone").val());
                console.log($("#sign-up-address").val());
                console.log($("#sign-up-email").val());
                console.log($("#sign-up-apartment_number").val());
                console.log($("#sign-up-pass").val());
                console.log($("#sign-up-pass2").val());
                    return false;
            }
            else {
                return true;
            }
        }
        function readCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for(var i=0;i < ca.length;i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1,c.length);
                if (c.indexOf(nameEQ) == 0)
                    return JSON.parse(c.substring(nameEQ.length,c.length));
            }
            return null;
        }
        function assignCookies() {
            var y = readCookie('user_type');
            if(y) {
                $("#booking-form-first-name").val(y.first_name);
                $("#booking-form-second-name").val(y.second_name);
                $("#booking-form-phone").val(y.phone_number);
                $("#booking-form-address").val(y.address);
                $("#booking-form-email").val(y.email);
                $("#booking-form-appartment").val(y.apartment_number);
                $("#login_buttom").css("display","none");
            }
        }
        jQuery(document).ready(function($)
        {
            $('#template-booking').booking();

            /*new code*/
            var x = readCookie('user_type');
            console.log(x);
           assignCookies();

            $("#confirmed-booking").click(function(){
                var all = $(".mbox").map(function() {
                    return this.innerHTML;
                }).get();
                    $.post("{{route('request.booking')}}",
                        {
                            first_name: $("#booking-form-first-name").val(),
                            second_name: $("#booking-form-second-name").val(),
                            phone_number: $("#booking-form-phone").val(),
                            address: $("#booking-form-address").val(),
                            email: $("#booking-form-email").val(),
                            apartment_number: $("#booking-form-appartment").val(),
                            booking_date: $("#booking-form-date").val(),
                            comments: $("#booking-form-message").val(),
                            estimated_time: $(".template-component-booking-summary-duration>h5>span:first-child").text()+"H "
                            +$(".template-component-booking-summary-duration>h5>span:nth-child(3)").text()+" MIN",
                            estimated_cost: $(".template-component-booking-summary-price-value").text()+" EGP",
                            package: $(".template-state-selected>input").val(),
                            extras: [1,2,3]
                        },
                        function (data, status) {
                            $('.modal').modal('hide');
                            $('#ConfirmSuccModal').modal('show');
                        });
            });
            $("#sign-up-submit").click(function(){

               if($("#sign-up-pass").val()!=$("#sign-up-pass2").val()){
                   $("#not_equal").css("display","block");
               }else if(!checkSignUp()){
                   $("#embty_input").css("display","block");
                  console.log("heeey");
               }else {
                   $("#not_equal").css("display","none");
                   $("#embty_input").css("display","none");
                   var today = new Date();
                   var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
                   var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
                   var dateTime = date+' '+time;
                   $.post("{{route('sign_up')}}",
                       {
                           first_name: $("#sign-up-first_name").val(),
                           second_name: $("#sign-up-second_name").val(),
                           phone_number: $("#sign-up-phone").val(),
                           address: $("#sign-up-address").val(),
                           email: $("#sign-up-email").val(),
                           apartment_number: $("#sign-up-apartment_number").val(),
                           password: $("#sign-up-pass").val()
                       },
                       function (data, status) {
                           var expires = "";
                           var date = new Date();
                           date.setTime(date.getTime() + (10000 * 24 * 60 * 60 * 1000));
                           expires = "; expires=" + date.toUTCString();
                           document.cookie = "user_type" + "=" + JSON.stringify(data) + expires + ";";
                           assignCookies();

                           if(!checkBookingForm()){
                               $('#confirmed-booking').css("display","none");
                               $('#succes_buttom').css("display","none");
                               $('#back_buttom').css("display","block");
                               $(".modal").modal('hide');
                               $("#logingMsgSuccModal").modal('show');
                               $('#back_buttom').css("display","none");
                           }
                           else {
                               $('#confirmed-booking').css("display","inline");
                               $('#succes_buttom').css("display","block");
                               $(".modal").modal('hide');
                               $("#logingMsgSuccModal").modal('show');
                               console.log("yesssss");
                           }

                       }).fail(function () {
                   });
               }
            });
            $("#login-submit").click(function() {
                var x = readCookie('user_type');
                console.log($("#login-email").val());
                console.log($("#login-pass").val());
                if (x==null) {
                    $.post("{{route('login')}}",
                        {
                            email: $("#login-email").val(),
                            password: $("#login-pass").val()
                        },
                        function (data, status) {

                                    var expires = "";
                                    var date = new Date();
                                    date.setTime(date.getTime() + (10000 * 24 * 60 * 60 * 1000));
                                    expires = "; expires=" + date.toUTCString();
                                document.cookie = "user_type" + "=" + JSON.stringify(data) + expires + ";";
                                assignCookies();
                                $("#login_buttom").css("display","none");
                                $(".modal").modal('hide');
                                if(!checkBookingForm()){
                                    $('#confirmed-booking').css("display","none");
                                }
                                $("#logingMsgSuccModal").modal('show');

                        }).fail(function () {
                        $("#login_error").css("display", "block");
                        console.log('login_error');
                    });
                } else if(x&&checkBookingForm()) {
                    $("confirmed-booking").modal('toggle');
                    $("#filling_form").css("display", "none");
                }else {
                    $("#filling_form").css("display", "block");
                }
            });
            $("#close-modal").click(function () {
                $("#logingMsgSuccModal").modal('hide');
            });
            /*$("#login-submit").click(function () {
             $("#logingModal").modal('hide');
             $("#logingMsgSuccModal").modal('toggle')
             });*/
            $("#login_buttom").click(function () {
                $(".modal").modal('hide');
                if(checkBookingForm()){
                    $(".addition").css("display", "none");
                    $("#sign-up-email").val($("#booking-form-email").val());
                    $("#sign-up-first_name").val($("#booking-form-first-name").val());
                    $("#sign-up-second_name").val($("#booking-form-second-name").val());
                    $("#sign-up-phone").val($("#booking-form-phone").val());
                    $("#sign-up-address").val($("#booking-form-address").val());
                    $("#sign-up-apartment_number").val($("#booking-form-appartment").val());

                }
                $("#logingModal").modal('show');
            });
            $("#confirm-booking").click(function () {
                var x = readCookie('user_type');
                if(checkBookingForm()&&x){
                    $("#filling_form").css("display", "none");
                    $(".addition").css("display", "none");
                    $("#sign-up-email").val($("#booking-form-email").val());
                    $("#sign-up-first_name").val($("#booking-form-first-name").val());
                    $("#sign-up-second_name").val($("#booking-form-second-name").val());
                    $("#sign-up-phone").val($("#booking-form-phone").val());
                    $("#sign-up-address").val($("#booking-form-address").val());
                    $("#sign-up-apartment_number").val($("#booking-form-appartment").val());
                    $("#logingMsgSuccModal").modal('toggle');
                    $('#confirmed-booking').css("display","inline");
                }else if(!checkBookingForm()){
                    $("#filling_form").css("display", "block");
                }else if(checkBookingForm()&&!x){
                    $("#logingModal").modal('toggle');
                    $(".addition").css("display", "none");
                    $("#sign-up-email").val($("#booking-form-email").val());
                    $("#sign-up-first_name").val($("#booking-form-first-name").val());
                    $("#sign-up-second_name").val($("#booking-form-second-name").val());
                    $("#sign-up-phone").val($("#booking-form-phone").val());
                    $("#sign-up-address").val($("#booking-form-address").val());
                    $("#confirmed-booking").css("display","inline");
                    $("#sign-up-apartment_number").val($("#booking-form-appartment").val());

                }
            });
        });
    </script>
@stop