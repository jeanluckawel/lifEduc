<!doctype html>
<html lang="en">
<head>

    <x-layout/>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="DSAThemes">
    <meta name="description" content="Martex - Software, App, SaaS & Startup Landing Pages Pack">
    <meta name="keywords" content="Responsive, HTML5, DSAThemes, Landing, Software, Mobile App, SaaS, Startup, Creative, Digital Product">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SITE TITLE -->
    <title>Martex - Software, App, SaaS & Startup Landing Pages Pack</title>

    <!-- FAVICON AND TOUCH ICONS -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="icon" href="images/apple-touch-icon.png" type="image/x-icon">

    <!-- GOOGLE FONTS -->
    <link href="../../../../fonts.googleapis.com/css2e2f8.css?family=Rubik:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="../../../../fonts.googleapis.com/css22abb.css?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="../../../../fonts.googleapis.com/css23585.css?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">

    <!-- BOOTSTRAP CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- FONT ICONS -->
    <link href="css/flaticon.css" rel="stylesheet">

    <!-- PLUGINS STYLESHEET -->
    <link href="css/menu.css" rel="stylesheet">
    <link id="effect" href="css/dropdown-effects/fade-down.css" media="all" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/owl.theme.default.min.css" rel="stylesheet">
    <link href="css/lunar.css" rel="stylesheet">

    <!-- ON SCROLL ANIMATION -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- TEMPLATE CSS -->
    <link href="css/blue-theme.css" rel="stylesheet">

    <!-- Style Switcher CSS -->
    <link href="css/crocus-theme.css" rel="alternate stylesheet" title="crocus-theme">
    <link href="css/green-theme.css" rel="alternate stylesheet" title="green-theme">
    <link href="css/magenta-theme.css" rel="alternate stylesheet" title="magenta-theme">
    <link href="css/pink-theme.css" rel="alternate stylesheet" title="pink-theme">
    <link href="css/purple-theme.css" rel="alternate stylesheet" title="purple-theme">
    <link href="css/skyblue-theme.css" rel="alternate stylesheet" title="skyblue-theme">
    <link href="css/red-theme.css" rel="alternate stylesheet" title="red-theme">
    <link href="css/violet-theme.css" rel="alternate stylesheet" title="violet-theme">

    <!-- RESPONSIVE CSS -->
    <link href="css/responsive.css" rel="stylesheet">

</head>




<body>












<!-- PAGE CONTENT
============================================= -->
<div id="page" class="page font--jakarta">


    <x-header/>

    <!-- HEADER
    ============================================= -->




    <!-- BLOG POSTS LISTING
    ============================================= -->
    <section id="blog-page" class=" inner-page-hero blog-page-section">
        <div class="container">


          <x-hero/>


        </div>	   <!-- End container -->
    </section>	<!-- END BLOG POSTS LISTING -->
<x-footer/>
</div>	<!-- END PAGE CONTENT -->




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

</body>

</html>
