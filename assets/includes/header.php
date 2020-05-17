<?php 
$basename = substr(strtolower(basename($_SERVER['PHP_SELF'])),0,strlen(basename($_SERVER['PHP_SELF']))-4);
?>

<header class="c-layout-header c-layout-header-4 c-layout-header-default-mobile" data-minimize-offset="80">
            <div class="c-topbar c-topbar-light">
                <div class="container">
                    <!-- BEGIN: INLINE NAV -->
                    <nav class="c-top-menu c-pull-left">
                        <ul class="c-icons c-theme-ul">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                    </nav>
                    <!-- END: INLINE NAV -->
                    <!-- BEGIN: INLINE NAV -->
                    <nav class="c-top-menu c-pull-right">
                        <ul class="c-icons c-theme-ul">
                            <li>
                                <a href="#"><i class="fa fa-phone"></i> 1 800 888 8888</a>
                            </li>
                            <li class="c-divider">|</li>
                            <li>
                                <a href="#"><i class="fa fa-envelope"></i> contact@fountainhead.us</a>
                            </li>
							<li style="padding: 0px 5px 0px 5px; margin-bottom:5px;">
								<a href="#" data-toggle="modal" data-target="#login-form" class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-dark c-btn-circle c-btn-uppercase c-btn-sbold"/>
								<i class="fa fa-flash"></i> Quick Start</a>
							</li>
                        </ul>                        
                    </nav>
                    <!-- END: INLINE NAV -->
                </div>
            </div>
            <div class="c-navbar">
                <div class="container">
                    <!-- BEGIN: BRAND -->
                    <div class="c-navbar-wrapper clearfix">
                        <div class="c-brand c-pull-left">
                            <a href="index-2.html" class="c-logo">
                                <img src="assets/base/img/layout/logos/logo.png" alt="Fountainhead - United States" class="c-desktop-logo" style="height:75px;">
                                <img src="assets/base/img/layout/logos/logo.png" alt="Fountainhead - United States" class="c-desktop-logo-inverse" style="height:65px;">
                                <img src="assets/base/img/layout/logos/logo.png" alt="Fountainhead - United States" class="c-mobile-logo" style="height:60px;"> </a>
                            <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                            </button>
                        </div>
                        <!-- END: BRAND -->
                        
                        <!-- BEGIN: HOR NAV -->
                        <!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU -->
                        <!-- BEGIN: MEGA MENU -->
                        <!-- Dropdown menu toggle on mobile: c-toggler class can be applied to the link arrow or link itself depending on toggle mode -->
                        <nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold">
                            <ul class="nav navbar-nav c-theme-nav">
                                <li <?php if ($basename == 'index') echo 'class="c-active"'; ?>><a href="index.php" class="c-link">Home</a></li>
                                    
                                <li class="c-menu-type-classic">
                                    <a href="#" class="c-link dropdown-toggle">Services<span class="c-arrow c-toggler"></span></a>
                                    <ul class="dropdown-menu c-menu-type-classic c-pull-left">
                                        <li><a href="create-your-own-design.php">CREATE YOUR OWN DESIGN</a></li>
                                        <li><a href="#">Booth Designing</a></li>
										<li><a href="#">Booth Construction</a></li>
										<li><a href="#">3D Designing</a></li>
										<li><a href="#">Graphic Production</a></li>
										<li><a href="#">Project Management</a></li>
										<li><a href="#">Install & Dismantle</a></li>
										<li><a href="#">Logistic & Transport</a></li>
										<li><a href="#">Location Service</a></li>
										<li><a href="#">On Site Supervision</a></li>
                                    </ul>
                                </li>
                                
                                <li class="c-menu-type-classic <?php if ($basename == 'rent-a-booth' || $basename == 'rent-booth-description') echo 'c-active'; ?>">
                                    <a href="#" class="c-link dropdown-toggle">Rent Booth<span class="c-arrow c-toggler"></span></a>
                                    <ul class="dropdown-menu c-menu-type-classic c-pull-left">
                                        <li><a href="rent-a-booth.php">10 x 10 Feet</a></li>
                                        <li><a href="#">10 x 20 Feet</a></li>
                                        <li><a href="#">10 x 30 Feet</a></li>
                                        <li><a href="#">20 x 20 Feet</a></li>
                                        <li><a href="#">20 x 30 Feet</a></li>
                                        <li><a href="#">20 x 40 Feet</a></li>
                                        <li><a href="#">20 x 50 Feet</a></li>
                                        <li><a href="#">30 x 30 Feet</a></li>
                                        <li><a href="#">30 x 40 Feet</a></li>
                                        <li><a href="#">30 x 50 Feet</a></li>
                                        <li><a href="#">40 x 40 Feet</a></li>
                                        <li><a href="#">40 x 50 Feet</a></li>
                                        <li><a href="#">50 x 50 Feet</a></li>
                                    </ul>
                                </li>
								
								<li <?php if ($basename == 'create-your-own-design') echo 'class="c-active"'; ?>><a href="create-your-own-design.php" class="c-link">Create Own Design</a></li>
								
								<li class="c-menu-type-classic">
                                    <a href="#" class="c-link dropdown-toggle">Company<span class="c-arrow c-toggler"></span></a>
                                    <ul class="dropdown-menu c-menu-type-classic c-pull-left">
                                        <li><a href="#">Company Profile</a></li>
                                        <li><a href="#">Our Clients</a></li>
                                        <li><a href="#">Testimonials</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">FAQ's</a></li>
                                    </ul>
                                </li>
								
								<li <?php if ($basename == 'portfolio') echo 'class="c-active"'; ?>><a href="portfolio.php" class="c-link">Portfolio</a></li>
								
								<li class=""><a href="#" class="c-link">Contact</a></li>
								
                                <!-- <li>
                                    <a href="javascript:;" data-toggle="modal" data-target="#login-form" class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-dark c-btn-circle c-btn-uppercase c-btn-sbold">
                                        <i class="fa fa-flash"></i> Quick Start</a>
                                </li> -->
                                <!-- <li class="c-quick-sidebar-toggler-wrapper">
                                    <a href="#" class="c-quick-sidebar-toggler">
                                        <span class="c-line"></span>
                                        <span class="c-line"></span>
                                        <span class="c-line"></span>
                                    </a>
                                </li> -->
                            </ul>
                        </nav>
                        <!-- END: MEGA MENU -->
                        <!-- END: LAYOUT/HEADERS/MEGA-MENU -->
                        <!-- END: HOR NAV -->
                    </div>
                    <!-- BEGIN: LAYOUT/HEADERS/QUICK-CART -->
                    
                    <!-- END: LAYOUT/HEADERS/QUICK-CART -->
                </div>
            </div>
        </header>