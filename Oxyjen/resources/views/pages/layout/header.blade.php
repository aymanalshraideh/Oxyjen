<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themetechmount.com/html/altech/home-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Aug 2022 06:55:20 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Altech – IT Sollutions and Services HTML Template" />
<meta name="author" content="https://www.themetechmount.com/" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>@yield('title')</title>

<!-- favicon icon -->
<link rel="shortcut icon" href="images/favicon.png" />

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>

<!-- animate -->
<link rel="stylesheet" type="text/css" href="css/animate.css"/>

<!-- owl-carousel -->
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">

<!-- fontawesome -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>

<!-- themify -->
<link rel="stylesheet" type="text/css" href="css/themify-icons.css"/>

<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="css/flaticon.css"/>


<!-- REVOLUTION LAYERS STYLES -->

    <link rel="stylesheet" type="text/css" href="revolution/css/rs6.css">

<!-- prettyphoto -->
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">

<!-- shortcodes -->
<link rel="stylesheet" type="text/css" href="css/shortcodes.css"/>

<!-- main -->
<link rel="stylesheet" type="text/css" href="css/main.css"/>

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>

</head>

<body>

    <!--page start-->
    <div class="page">

        <!-- preloader start -->
        <div id="preloader">
          <div id="status">&nbsp;</div>
        </div>
        <!-- preloader end -->

        <!--header start-->
        <header id="masthead" class="header ttm-header-style-01">
            <!-- ttm-topbar-wrapper -->
            <div class="ttm-topbar-wrapper clearfix">
                <div class="container">
                    <div class="ttm-topbar-content">
                        <ul class="top-contact text-left">
                            <li><i class="fa fa-map-marker"></i>24 Tech Roqad st Ny 10023</li>
                            <li><i class="fa fa-envelope-o"></i><a href="mailto:info@example.com.com">info@example.com</a></li>
                        </ul>
                        <div class="topbar-right text-right">
                            <ul class="top-contact">
                                <li><i class="fa fa-clock-o"></i>Office Hour: 08:00am - 6:00pm</li>
                            </ul>
                            <div class="ttm-social-links-wrapper list-inline">
                                <ul class="social-icons">
                                    <li><a href="#" class=" tooltip-bottom" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#" class=" tooltip-bottom" data-tooltip="Twitter"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#" class=" tooltip-bottom" data-tooltip="Flickr"><i class="fa fa-flickr"></i></a>
                                    </li>
                                    <li><a href="#" class=" tooltip-bottom" data-tooltip="Linkedin"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="header-btn">
                                <a class="ttm-btn ttm-btn-size-md  ttm-btn-bgcolor-skincolor" href="#">Get A Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- ttm-topbar-wrapper end -->
            <!-- ttm-header-wrap -->
            <div class="ttm-header-wrap">
                <!-- ttm-stickable-header-w -->
                <div id="ttm-stickable-header-w" class="ttm-stickable-header-w clearfix">
                    <div id="site-header-menu" class="site-header-menu">
                        <div class="site-header-menu-inner ttm-stickable-header">
                            <div class="container">
                                <!-- site-branding -->
                                <div class="site-branding">
                                    <a class="home-link" href="index.html" title="Altech" rel="home">
                                        <img id="logo-img" class="img-center" src="images/logo.png" alt="logo">
                                    </a>
                                </div><!-- site-branding end -->
                                <!--site-navigation -->
                                <div id="site-navigation" class="site-navigation">
                                    <div class="ttm-rt-contact">
                                        <!-- header-icons -->
                                        <div class="ttm-header-icons ">
                                            <span class="ttm-header-icon ttm-header-cart-link">
                                                <a href="#"><i class="ti ti-shopping-cart"></i>
                                                    <span class="number-cart">0</span>
                                                </a>
                                            </span>
                                            <div class="ttm-header-icon ttm-header-search-link">
                                                <a href="#"><i class="ti ti-search"></i></a>
                                                <div class="ttm-search-overlay">
                                                    <form method="get" class="ttm-site-searchform" action="#">
                                                        <div class="w-search-form-h">
                                                            <div class="w-search-form-row">
                                                                <div class="w-search-input">
                                                                    <input type="search" class="field searchform-s" name="s" placeholder="Type Word Then Enter...">
                                                                    <button type="submit">
                                                                        <i class="ti ti-search"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div><!-- header-icons end -->
                                    </div>
                                    <div class="ttm-menu-toggle">
                                        <input type="checkbox" id="menu-toggle-form" />
                                        <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                            <span class="toggle-block toggle-blocks-1"></span>
                                            <span class="toggle-block toggle-blocks-2"></span>
                                            <span class="toggle-block toggle-blocks-3"></span>
                                        </label>
                                    </div>
                                    <nav id="menu" class="menu">
                                        <ul class="dropdown">
                                           <li class="@yield('home')"><a href="#">Home</a>
                                                <ul>
                                                    <li><a href="index.html">Homepage 1</a></li>
                                                    <li><a href="home-2.html">Homepage 2</a></li>
                                                    <li class="active"><a href="home-3.html">Homepage 3</a></li>
                                                    <li><a href="home-4.html">Homepage 4<span class="label-new">New</span></a></li>
                                                    <li><a href="home-5.html">Homepage 5<span class="label-new">New</span></a></li>
                                                    <li><a href="#">Header Styles</a>
                                                        <ul>
                                                            <li><a href="index.html">Header Style 01</a></li>
                                                            <li><a target="_blank" href="header-style-02.html">Header Style 02</a></li>
                                                            <li><a target="_blank" href="header-style-03.html">Header Style 03</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Pages</a>
                                                <ul>
                                                    <li><a href="aboutus-01.html">About Us 1</a></li>
                                                    <li><a href="aboutus-02.html">About Us 2</a></li>
                                                    <li><a href="services-01.html">Services 1</a></li>
                                                    <li><a href="services-02.html">Services 2</a></li>
                                                    <li><a href="our-expert.html">Our Expert</a></li>
                                                    <li><a href="faq.html">FAQs</a></li>
                                                    <li><a href="contact-01.html">Contact Us 1</a></li>
                                                    <li><a href="contact-02.html">Contact Us 2</a></li>

                                                    <li><a href="error.html">Error Page</a></li>
                                                    <li><a href="element.html">Elements</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Services</a>
                                                <ul>
                                                    <li><a href="it-consultancy.html">IT Consultancy</a></li>
                                                    <li><a href="digital-services.html">Digital Services</a></li>
                                                    <li><a href="advisory-services.html">Advisory Services</a></li>
                                                    <li><a href="data-structuring.html">Data Structuring</a></li>
                                                    <li><a href="experience-design.html">Experience Design</a></li>
                                                    <li><a href="content-engineering.html">Content Engineering</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Project</a>
                                                <ul>
                                                    <li><a href="project-style-01.html">Project Style 1</a></li>
                                                    <li><a href="project-style-02.html">Project Style 2</a></li>
                                                    <li><a href="#">Project Single</a>
                                                        <ul>
                                                            <li><a href="single-style-01.html">Single Style 1</a></li>
                                                            <li><a href="single-style-02.html">Single Style 2</a></li>
                                                            <li><a href="single-style-03.html">Single Style 3</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Blog</a>
                                                <ul>
                                                    <li><a href="blog.html">Blog Classic</a></li>
                                                    <li><a href="blog-grid.html">Blog Grid View</a></li>
                                                    <li><a href="blog-top-image.html">Blog Top Image</a></li>
                                                    <li><a href="blog-left-image.html">Blog Left Image</a></li>
                                                    <li><a href="single-blog.html">Blog Single View</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Shop</a>
                                                <ul>
                                                    <li><a href="shop.html">Default Shop</a></li>
                                                    <li><a href="product-details.html">Single Product Details</a></li>
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div><!-- site-navigation end-->
                            </div>
                        </div>
                    </div>
                </div><!-- ttm-stickable-header-w end-->
            </div><!--ttm-header-wrap end -->

        </header><!--header end-->
