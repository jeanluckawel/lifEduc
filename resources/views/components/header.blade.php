<header id="header" class="tra-menu navbar-dark inner-page-header white-scroll">
    <div class="header-wrapper blog-header">


        <!-- MOBILE HEADER -->
        <div class="wsmobileheader clearfix">
            <span class="smllogo"><img src="images/logo-blog.png" alt="mobile-logo"></span>
            <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
        </div>


        <!-- NAVIGATION MENU -->
        <div class="wsmainfull menu clearfix">
            <div class="wsmainwp clearfix">


                <!-- HEADER BLACK LOGO -->
                <div class="desktoplogo">
                    <a href="#blog-page" class="logo-black">
                        <img class="light-theme-img" src="images/logo-blog.png" alt="logo">
                        <img class="dark-theme-img" src="images/logo-blog-white.png" alt="logo">
                    </a>
                </div>


                <!-- HEADER WHITE LOGO -->
                <div class="desktoplogo">
                    <a href="#blog-page" class="logo-white"><img src="images/logo-blog-white.png" alt="logo"></a>
                </div>


                <!-- MAIN MENU -->
                <nav class="wsmenu clearfix">
                    <ul class="wsmenu-list nav-theme">
                        <li class="nl-simple" aria-haspopup="true"><a href="" class="h-link">Accueil</a></li>
                        <li class="nl-simple" aria-haspopup="true"><a href="" class="h-link">Domaine</a></li>
                        <li class="nl-simple" aria-haspopup="true"><a href="" class="h-link">Decouverte</a></li>
                        <li class="nl-simple" aria-haspopup="true"><a href="" class="h-link">A Propos</a></li>
                        <li class="nl-simple" aria-haspopup="true">
                            <a href="" class="btn r-04 btn--theme hover--theme last-link">Publier Votre Travail</a>
                        </li>


                    </ul>
                </nav>	<!-- END MAIN MENU -->


            </div>
        </div>	<!-- END NAVIGATION MENU -->


    </div>     <!-- End header-wrapper -->
</header>	<!-- END HEADER -->



<!-- EXTERNAL SCRIPTS
============================================= -->
<script src="js/jquery-3.7.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.easing.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/menu.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/pricing-toggle.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/request-form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/lunar.js"></script>
<script src="js/wow.js"></script>

<!-- Custom Script -->
<script src="js/custom.js"></script>

<script>
    $(document).on({
        "contextmenu": function (e) {
            console.log("ctx menu button:", e.which);

            // Stop the context menu
            e.preventDefault();
        },
        "mousedown": function(e) {
            console.log("normal mouse down:", e.which);
        },
        "mouseup": function(e) {
            console.log("normal mouse up:", e.which);
        }
    });
</script>

<script>
    $(function() {
        $(".switch").click(function() {
            $("body").toggleClass("theme--dark");
            if( $( "body" ).hasClass( "theme--dark" )) {
                $( ".switch" ).text( "Light Mode" );
            } else {
                $( ".switch" ).text( "Dark Mode" );
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        if( $( "body" ).hasClass( "theme--dark" )) {
            $( ".switch" ).text( "Light Mode" );
        } else {
            $( ".switch" ).text( "Dark Mode" );
        }
    });
</script>



<script src="js/changer.js"></script>
<script defer src="js/styleswitch.js"></script>

