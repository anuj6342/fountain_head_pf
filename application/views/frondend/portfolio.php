<!DOCTYPE html>

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

<head>
        <meta charset="utf-8" />
        <title>Fountainhead - United States | Portfolio</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
        <link href="assets/plugins/socicon/socicon.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/animate/animate.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN: BASE PLUGINS  -->
        <link href="assets/plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/slider-for-bootstrap/css/slider.css" rel="stylesheet" type="text/css" />
        <!-- END: BASE PLUGINS -->
        <!-- BEGIN THEME STYLES -->
        <link href="assets/base/css/plugins.css" rel="stylesheet" type="text/css" />
        <link href="assets/base/css/components.css" id="style_components" rel="stylesheet" type="text/css" />
        <link href="assets/base/css/themes/default.css" rel="stylesheet" id="style_theme" type="text/css" />
        <link href="assets/base/css/custom.css" rel="stylesheet" type="text/css" />
        <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>

    <body class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-topbar c-layout-header-topbar-collapse">
        <!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
        <!-- BEGIN: HEADER -->
        <?php include "includes/header.php"; ?>
        <!-- END: HEADER -->
        <!-- END: LAYOUT/HEADERS/HEADER-1 -->      
        
        <?php include "includes/quick-start.php"; ?>
        <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">
            
            <!-- BEGIN: PAGE CONTENT -->
            <div class="c-content-box c-size-md">
                <div class="container">
                    
                    <div id="grid-container" class="cbp">
                        <?php for ($i=1; $i<=16; $i++) { ?>
						<div class="cbp-item">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="assets/base/img/content/fces/portfolio/1.jpg" alt=""> </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <a href="assets/base/img/content/fces/portfolio/1.jpg" class="cbp-lightbox cbp-l-caption-buttonRight btn btn-sm c-btn-square c-btn-border-1x c-btn-white  c-btn-uppercase" data-title="Show / Event Name<?php echo $i;?><br>at Location">Zoom</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-l-grid-projects-title">Show / Event Name<?php echo $i;?></div>
                            <div class="cbp-l-grid-projects-desc">Location</div>
                        </div>
						<?php } ?>
                    </div>
                    <!-- <div id="loadMore-container" class="cbp-l-loadMore-button c-margin-t-60">
                        <a href="ajax/4col-portfolio/load-more.html" class="cbp-l-loadMore-link btn btn-sm c-btn-square c-btn-border-2x c-btn-dark  c-btn-uppercase">
                            <span class="cbp-l-loadMore-defaultText">LOAD MORE</span>
                            <span class="cbp-l-loadMore-loadingText">LOADING...</span>
                            <span class="cbp-l-loadMore-noMoreLoading">NO MORE WORKS</span>
                        </a>
                    </div> -->
                </div>
            </div>
            <!-- END: PAGE CONTENT -->
        </div>
        <!-- END: PAGE CONTAINER -->
        <?php include "includes/hm-pg-custom-booth.php"; ?>
		
		<?php include "includes/hm-pg-services.php"; ?>
		
		<?php include "includes/footer.php"; ?>
        <!-- END: LAYOUT/FOOTERS/GO2TOP -->
        <!-- BEGIN: LAYOUT/BASE/BOTTOM -->
        <!-- BEGIN: CORE PLUGINS -->
        <!--[if lt IE 9]>
	<script src="../assets/global/plugins/excanvas.min.js"></script> 
	<![endif]-->
        <script src="assets/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery.easing.min.js" type="text/javascript"></script>
        <script src="assets/plugins/reveal-animate/wow.js" type="text/javascript"></script>
        <script src="assets/base/js/scripts/reveal-animate/reveal-animate.js" type="text/javascript"></script>
        <!-- END: CORE PLUGINS -->
        <!-- BEGIN: LAYOUT PLUGINS -->
        <script src="assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
        <script src="assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
        <script src="assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
        <script src="assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js" type="text/javascript"></script>
        <!-- END: LAYOUT PLUGINS -->
        <!-- BEGIN: THEME SCRIPTS -->
        <script src="assets/base/js/components.js" type="text/javascript"></script>
        <script src="assets/base/js/components-shop.js" type="text/javascript"></script>
        <script src="assets/base/js/app.js" type="text/javascript"></script>
        <script>
            $(document).ready(function()
            {
                App.init(); // init core    
            });
        </script>
        <!-- END: THEME SCRIPTS -->
        <!-- BEGIN: PAGE SCRIPTS -->
        <script src="assets/base/js/scripts/pages/4col-portfolio.js" type="text/javascript"></script>
        <!-- END: PAGE SCRIPTS -->
        <!-- END: LAYOUT/BASE/BOTTOM -->

</body>
</html>