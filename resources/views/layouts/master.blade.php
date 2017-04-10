<!-- Mermaid Site HTML template  -  Ahmed El-Shinawy 2016 -->
<!DOCTYPE html>

<html>

<head>

    <title>Mermaid - Maid Easy</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" type="text/css" href="style/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,700,900&amp;subset=latin,latin-ext">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=PT+Serif:700italic,700,400italic&amp;subset=latin,cyrillic-ext,latin-ext,cyrillic">

    <link rel="stylesheet" type="text/css" href="style/jquery.qtip.css"/>
    <link rel="stylesheet" type="text/css" href="style/jquery-ui.min.css"/>
    <link rel="stylesheet" type="text/css" href="style/superfish.css"/>
    <link rel="stylesheet" type="text/css" href="style/flexnav.css"/>
    <link rel="stylesheet" type="text/css" href="style/DateTimePicker.min.css"/>
    <link rel="stylesheet" type="text/css" href="style/fancybox/jquery.fancybox.css"/>
    <link rel="stylesheet" type="text/css" href="style/fancybox/helpers/jquery.fancybox-buttons.css"/>
    <link rel="stylesheet" type="text/css" href="style/revolution/layers.css"/>
    <link rel="stylesheet" type="text/css" href="style/revolution/settings.css"/>
    <link rel="stylesheet" type="text/css" href="style/revolution/navigation.css"/>
    <link rel="stylesheet" type="text/css" href="style/base.css"/>
    <link rel="stylesheet" type="text/css" href="style/responsive.css"/>

    <link rel="stylesheet" type="text/css" href="style/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="style/ui-notification.css"/>

    <script type="text/javascript" src="script/jquery.min.js"></script>

</head>

<body class="template-page-home">
@yield('page')
<!-- Footer -->
<div class="template-footer">

    <div class="template-main">

        <!-- Footer top -->
        <div class="template-footer-top">

            <!-- Layout 25x25x25x25 -->
            <div class="template-layout-25x25x25x25 template-clear-fix">

                <!-- Left column -->
                <div class="template-layout-column-left">
                    <h6>About</h6>
                    <p>Marmaid is a professional on demand house cleaning service based in Egypt.</p>
                    <img src="{{url('/media/image/logo.png')}}" alt="" class="template-logo" />
                </div>

                <!-- Center left column -->
                <div class="template-layout-column-center-left">
                    <h6>Join Us</h6>
                    <ul class="template-list-reset">
                        <li><a href="#mermaidModal" id="becomeMermaid">Book A Mermaid</a></li>
                    </ul>
                </div>

                <!-- Center right column -->
                <div class="template-layout-column-center-right">
                    <h6>Company</h6>
                    <ul class="template-list-reset">
                        <li><a href=" ">Pricing</a></li>
                        <li><a href=" ">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Right column -->
                <div class="template-layout-column-right">
                    <h6>Newsletter</h6>
                    <form class="template-component-newsletter-form">
                        <div class="template-component-form-field">
                            <label for="newsletter-form-email">Your e-mail address *</label>
                            <input type="text" name="newsletter-form-email" id="newsletter-form-email"/>
                        </div>
                        <div class="template-margin-top-2">
                            <input type="button" value="Subscribe" class="template-component-button" name="newsletter-form-subscribe" id="newsletter-form-subscribe"/>
                        </div>
                    </form>
                </div>

            </div>

        </div>

        <!-- Footer bottom -->
        <div class="template-footer-bottom">

            <!-- Social icon list -->
            <ul class="template-component-social-icon-list template-component-social-icon-list-2">
                <li><a href="" class="template-icon-social-twitter" target="_blank"></a></li>
                <li><a href="" class="template-icon-social-facebook" target="_blank"></a></li>
                <li><a href="" class="template-icon-social-youtube" target="_blank"></a></li>
            </ul>

            <!-- Copyright -->
            <div class="template-footer-bottom-copyright">
                <a href=" " target="_blank">Mermaid</a> &copy; 2017
            </div>

        </div>

    </div>

</div>

<!-- Search box -->
<div class="template-component-search-form">
    <div></div>
    <form>
        <div>
            <input type="search" name="search"/>
            <span class="template-icon-meta-search"></span>
            <input type="submit" name="submit" value=""/>
        </div>
    </form>
</div>
<!--mermaid modal-->
<div id="mermaidModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">&times;</button>
                <h4 class="modal-title">Confirmation</h4>
            </div>
            <div class="modal-body">
                <form id="joinUs" class="form-horizontal" role="form">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input id="joinUs-name" name="name" type="text" placeholder="NAME *" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input id="joinUs-phone" type="text" placeholder="PHONE *" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input id="joinUs-email"  type="email" placeholder="EMAIL *" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" id="joinUs-submit" class="btn btn-primary">Join Us</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Go to top button -->
<a href="#go-to-top" class="template-component-go-to-top template-icon-meta-arrow-large-tb"></a>

<!-- JS files -->
<script type="text/javascript" src="script/jquery-ui.min.js"></script>
<script type="text/javascript" src="script/bootstrap.min.js"></script>
<script type="text/javascript" src="script/superfish.min.js"></script>
<script type="text/javascript" src="script/jquery.easing.js"></script>
<script type="text/javascript" src="script/jquery.blockUI.js"></script>
<script type="text/javascript" src="script/jquery.qtip.min.js"></script>
<script type="text/javascript" src="script/jquery.fancybox.js"></script>
<script type="text/javascript" src="script/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="script/jquery.actual.min.js"></script>
<script type="text/javascript" src="script/jquery.flexnav.min.js"></script>
<script type="text/javascript" src="script/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="script/sticky.min.js"></script>
<script type="text/javascript" src="script/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="script/jquery.fancybox-media.js"></script>
<script type="text/javascript" src="script/jquery.fancybox-buttons.js"></script>
<script type="text/javascript" src="script/jquery.carouFredSel.packed.js"></script>
<script type="text/javascript" src="script/jquery.responsiveElement.js"></script>
<script type="text/javascript" src="script/jquery.touchSwipe.min.js"></script>
<script type="text/javascript" src="script/DateTimePicker.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

<!-- Revolution Slider files -->
<script type="text/javascript" src="script/revolution/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="script/revolution/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="script/revolution/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="script/revolution/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="script/revolution/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="script/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="script/revolution/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="script/revolution/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="script/revolution/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="script/revolution/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="script/revolution/extensions/revolution.extension.video.min.js"></script>

<!-- Plugins files -->
<script type="text/javascript" src="plugin/booking/jquery.booking.js"></script>

<!-- Components files -->
<script type="text/javascript" src="script/template/jquery.template.tab.js"></script>
<script type="text/javascript" src="script/template/jquery.template.image.js"></script>
<script type="text/javascript" src="script/template/jquery.template.helper.js"></script>
<script type="text/javascript" src="script/template/jquery.template.header.js"></script>
<script type="text/javascript" src="script/template/jquery.template.counter.js"></script>
<script type="text/javascript" src="script/template/jquery.template.gallery.js"></script>
<script type="text/javascript" src="script/template/jquery.template.goToTop.js"></script>
<script type="text/javascript" src="script/template/jquery.template.fancybox.js"></script>
<script type="text/javascript" src="script/template/jquery.template.moreLess.js"></script>
<script type="text/javascript" src="script/template/jquery.template.googleMap.js"></script>
<script type="text/javascript" src="script/template/jquery.template.accordion.js"></script>
<script type="text/javascript" src="script/template/jquery.template.searchForm.js"></script>
<script type="text/javascript" src="script/template/jquery.template.testimonial.js"></script>
<script type="text/javascript" src="script/public.js"></script>
<script>
    $(document).ready(function () {
        $("#newsletter-form-subscribe").click(function () {
            $.post("{{route('follow')}}",
                    {
                        email: $("#newsletter-form-email").val()
                    },
                    function (data, status) {
                        alert("Data: " + data + "\nStatus: " + status);
                    });
        });
        $("#joinUs-submit").click(function () {
            $.post("{{route('request')}}",
                    {
                        email: $("#joinUs-email").val(),
                        phone_number: $("#joinUs-phone").val(),
                        name: $("#joinUs-name").val()
                    },
                    function (data, status) {

                        alert("Data: " + data + "\nStatus: " + status);
                        $("#mermaidModal").modal('hide')
                    });
        });
        $("#becomeMermaid").click(function () {
            $("#mermaidModal").modal('toggle')
        })
    });
</script>
</body>

</html>