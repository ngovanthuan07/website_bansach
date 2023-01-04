<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pustok - Book Store HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Use Minified Plugins Version For Fast Page Load -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('user/css/plugins.css')}}"/>
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('user/css/main.css')}}"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('user/image/favicon.ico')}}">
</head>

<body>
<div class="site-wrapper" id="top">
    @include('layout-include.user.login-layout.header')
    <div class="site-mobile-menu">
        <header class="mobile-header d-block d-lg-none pt--10 pb-md--10">
            <div class="container">
                <div class="row align-items-sm-end align-items-center">
                    <div class="col-md-4 col-7">
                        <a href="index.html" class="site-brand">
                            <img src="image/logo.png" alt="">
                        </a>
                    </div>
                    <div class="col-md-5 order-3 order-md-2">
                        <nav class="category-nav   ">
                            <div>
                                <a href="javascript:void(0)" class="category-trigger"><i
                                        class="fa fa-bars"></i>Browse
                                    categories</a>
                                <ul class="category-menu">
                                    <li class="cat-item has-children">
                                        <a href="#">Arts & Photography</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Bags & Cases</a></li>
                                            <li><a href="#">Binoculars & Scopes</a></li>
                                            <li><a href="#">Digital Cameras</a></li>
                                            <li><a href="#">Film Photography</a></li>
                                            <li><a href="#">Lighting & Studio</a></li>
                                        </ul>
                                    </li>
                                    <li class="cat-item has-children mega-menu"><a href="#">Biographies</a>
                                        <ul class="sub-menu">
                                            <li class="single-block">
                                                <h3 class="title">WHEEL SIMULATORS</h3>
                                                <ul>
                                                    <li><a href="#">Bags & Cases</a></li>
                                                    <li><a href="#">Binoculars & Scopes</a></li>
                                                    <li><a href="#">Digital Cameras</a></li>
                                                    <li><a href="#">Film Photography</a></li>
                                                    <li><a href="#">Lighting & Studio</a></li>
                                                </ul>
                                            </li>
                                            <li class="single-block">
                                                <h3 class="title">WHEEL SIMULATORS</h3>
                                                <ul>
                                                    <li><a href="#">Bags & Cases</a></li>
                                                    <li><a href="#">Binoculars & Scopes</a></li>
                                                    <li><a href="#">Digital Cameras</a></li>
                                                    <li><a href="#">Film Photography</a></li>
                                                    <li><a href="#">Lighting & Studio</a></li>
                                                </ul>
                                            </li>
                                            <li class="single-block">
                                                <h3 class="title">WHEEL SIMULATORS</h3>
                                                <ul>
                                                    <li><a href="#">Bags & Cases</a></li>
                                                    <li><a href="#">Binoculars & Scopes</a></li>
                                                    <li><a href="#">Digital Cameras</a></li>
                                                    <li><a href="#">Film Photography</a></li>
                                                    <li><a href="#">Lighting & Studio</a></li>
                                                </ul>
                                            </li>
                                            <li class="single-block">
                                                <h3 class="title">WHEEL SIMULATORS</h3>
                                                <ul>
                                                    <li><a href="#">Bags & Cases</a></li>
                                                    <li><a href="#">Binoculars & Scopes</a></li>
                                                    <li><a href="#">Digital Cameras</a></li>
                                                    <li><a href="#">Film Photography</a></li>
                                                    <li><a href="#">Lighting & Studio</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="cat-item has-children"><a href="#">Business & Money</a>
                                        <ul class="sub-menu">
                                            <li><a href="">Brake Tools</a></li>
                                            <li><a href="">Driveshafts</a></li>
                                            <li><a href="">Emergency Brake</a></li>
                                            <li><a href="">Spools</a></li>
                                        </ul>
                                    </li>
                                    <li class="cat-item has-children"><a href="#">Calendars</a>
                                        <ul class="sub-menu">
                                            <li><a href="">Brake Tools</a></li>
                                            <li><a href="">Driveshafts</a></li>
                                            <li><a href="">Emergency Brake</a></li>
                                            <li><a href="">Spools</a></li>
                                        </ul>
                                    </li>
                                    <li class="cat-item has-children"><a href="#">Children's Books</a>
                                        <ul class="sub-menu">
                                            <li><a href="">Brake Tools</a></li>
                                            <li><a href="">Driveshafts</a></li>
                                            <li><a href="">Emergency Brake</a></li>
                                            <li><a href="">Spools</a></li>
                                        </ul>
                                    </li>
                                    <li class="cat-item has-children"><a href="#">Comics</a>
                                        <ul class="sub-menu">
                                            <li><a href="">Brake Tools</a></li>
                                            <li><a href="">Driveshafts</a></li>
                                            <li><a href="">Emergency Brake</a></li>
                                            <li><a href="">Spools</a></li>
                                        </ul>
                                    </li>
                                    <li class="cat-item"><a href="#">Perfomance Filters</a></li>
                                    <li class="cat-item has-children"><a href="#">Cookbooks</a>
                                        <ul class="sub-menu">
                                            <li><a href="">Brake Tools</a></li>
                                            <li><a href="">Driveshafts</a></li>
                                            <li><a href="">Emergency Brake</a></li>
                                            <li><a href="">Spools</a></li>
                                        </ul>
                                    </li>
                                    <li class="cat-item "><a href="#">Accessories</a></li>
                                    <li class="cat-item "><a href="#">Education</a></li>
                                    <li class="cat-item hidden-menu-item"><a href="#">Indoor Living</a></li>
                                    <li class="cat-item"><a href="#" class="js-expand-hidden-menu">More
                                            Categories</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-md-3 col-5  order-md-3 text-right">
                        <div class="mobile-header-btns header-top-widget">
                            <ul class="header-links">
                                <li class="sin-link">
                                    <a href="cart.html" class="cart-link link-icon"><i class="ion-bag"></i></a>
                                </li>
                                <li class="sin-link">
                                    <a href="javascript:" class="link-icon hamburgur-icon off-canvas-btn"><i
                                            class="ion-navicon"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--Off Canvas Navigation Start-->
        <aside class="off-canvas-wrapper">
            <div class="btn-close-off-canvas">
                <i class="ion-android-close"></i>
            </div>
            <div class="off-canvas-inner">
                <!-- search box start -->
                <div class="search-box offcanvas">
                    <form>
                        <input type="text" placeholder="Search Here">
                        <button class="search-btn"><i class="ion-ios-search-strong"></i></button>
                    </form>
                </div>
                <!-- search box end -->
                <!-- mobile menu start -->
                <div class="mobile-navigation">
                    <!-- mobile menu navigation start -->
                    <nav class="off-canvas-nav">
                        <ul class="mobile-menu main-mobile-menu">
                            <li class="menu-item-has-children">
                                <a href="#">Home</a>
                                <ul class="sub-menu">
                                    <li> <a href="index.html">Home One</a></li>
                                    <li> <a href="index-2.html">Home Two</a></li>
                                    <li> <a href="index-3.html">Home Three</a></li>
                                    <li> <a href="index-4.html">Home Four</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Blog</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="#">Blog Grid</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Full Widh (Default)</a></li>
                                            <li><a href="blog-left-sidebar.html">left Sidebar</a></li>
                                            <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Blog List</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-list.html">Full Widh (Default)</a></li>
                                            <li><a href="blog-list-left-sidebar.html">left Sidebar</a></li>
                                            <li><a href="blog-list-right-sidebar.html">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Blog Details</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-details.html">Image Format (Default)</a></li>
                                            <li><a href="blog-details-gallery.html">Gallery Format</a></li>
                                            <li><a href="blog-details-audio.html">Audio Format</a></li>
                                            <li><a href="blog-details-video.html">Video Format</a></li>
                                            <li><a href="blog-details-left-sidebar.html">left Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Shop</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="#">Shop Grid</a>
                                        <ul class="sub-menu">
                                            <li><a href="shop-grid.html">Fullwidth</a></li>
                                            <li><a href="shop-grid-left-sidebar.html">left Sidebar</a></li>
                                            <li><a href="shop-grid-right-sidebar.html">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Shop List</a>
                                        <ul class="sub-menu">
                                            <li><a href="shop-list.html">Fullwidth</a></li>
                                            <li><a href="shop-list-left-sidebar.html">left Sidebar</a></li>
                                            <li><a href="shop-list-right-sidebar.html">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Product Details 1</a>
                                        <ul class="sub-menu">
                                            <li><a href="product-details.html">Product Details Page</a></li>
                                            <li><a href="product-details-affiliate.html">Product Details
                                                    Affiliate</a></li>
                                            <li><a href="product-details-group.html">Product Details Group</a></li>
                                            <li><a href="product-details-variable.html">Product Details
                                                    Variables</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Product Details 2</a>
                                        <ul class="sub-menu">
                                            <li><a href="product-details-left-thumbnail.html">left Thumbnail</a>
                                            </li>
                                            <li><a href="product-details-right-thumbnail.html">Right Thumbnail</a>
                                            </li>
                                            <li><a href="product-details-left-gallery.html">Left Gallery</a></li>
                                            <li><a href="product-details-right-gallery.html">Right Gallery</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="compare.html">Compare</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="login-register.html">Login Register</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="order-complete.html">Order Complete</a></li>
                                    <li><a href="faq.html">Faq</a></li>
                                    <li><a href="contact-2.html">contact 02</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- mobile menu end -->
                <nav class="off-canvas-nav">
                    <ul class="mobile-menu menu-block-2">
                        <li class="menu-item-has-children">
                            <a href="#">Currency - USD $ <i class="fas fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li> <a href="cart.html">USD $</a></li>
                                <li> <a href="checkout.html">EUR €</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Lang - Eng<i class="fas fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li>Eng</li>
                                <li>Ban</li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">My Account <i class="fas fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="">My Account</a></li>
                                <li><a href="">Order History</a></li>
                                <li><a href="">Transactions</a></li>
                                <li><a href="">Downloads</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="off-canvas-bottom">
                    <div class="contact-list mb--10">
                        <a href="" class="sin-contact"><i class="fas fa-mobile-alt"></i>(12345) 78790220</a>
                        <a href="" class="sin-contact"><i class="fas fa-envelope"></i>examle@handart.com</a>
                    </div>
                    <div class="off-canvas-social">
                        <a href="#" class="single-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="single-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="single-icon"><i class="fas fa-rss"></i></a>
                        <a href="#" class="single-icon"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="single-icon"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </aside>
        <!--Off Canvas Navigation End-->
    </div>
    <div class="sticky-init fixed-header common-sticky">
        <div class="container d-none d-lg-block">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <a href="index.html" class="site-brand">
                        <img src="image/logo.png" alt="">
                    </a>
                </div>
                <div class="col-lg-8">
                    <div class="main-navigation flex-lg-right">
                        <ul class="main-menu menu-right ">
                            <li class="menu-item has-children">
                                <a href="javascript:void(0)">Home <i
                                        class="fas fa-chevron-down dropdown-arrow"></i></a>
                                <ul class="sub-menu">
                                    <li> <a href="index.html">Home One</a></li>
                                    <li> <a href="index-2.html">Home Two</a></li>
                                    <li> <a href="index-3.html">Home Three</a></li>
                                    <li> <a href="index-4.html">Home Four</a></li>
                                </ul>
                            </li>
                            <!-- Shop -->
                            <li class="menu-item has-children mega-menu">
                                <a href="javascript:void(0)">shop <i
                                        class="fas fa-chevron-down dropdown-arrow"></i></a>
                                <ul class="sub-menu four-column">
                                    <li class="cus-col-25">
                                        <h3 class="menu-title"><a href="javascript:void(0)">Shop Grid </a></h3>
                                        <ul class="mega-single-block">
                                            <li><a href="shop-grid.html">Fullwidth</a></li>
                                            <li><a href="shop-grid-left-sidebar.html">left Sidebar</a></li>
                                            <li><a href="shop-grid-right-sidebar.html">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="cus-col-25">
                                        <h3 class="menu-title"> <a href="javascript:void(0)">Shop List</a></h3>
                                        <ul class="mega-single-block">
                                            <li><a href="shop-list.html">Fullwidth</a></li>
                                            <li><a href="shop-list-left-sidebar.html">left Sidebar</a></li>
                                            <li><a href="shop-list-right-sidebar.html">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="cus-col-25">
                                        <h3 class="menu-title"> <a href="javascript:void(0)">Product Details 1</a>
                                        </h3>
                                        <ul class="mega-single-block">
                                            <li><a href="product-details.html">Product Details Page</a></li>
                                            <li><a href="product-details-affiliate.html">Product Details
                                                    Affiliate</a></li>
                                            <li><a href="product-details-group.html">Product Details Group</a></li>
                                            <li><a href="product-details-variable.html">Product Details
                                                    Variables</a></li>
                                        </ul>
                                    </li>
                                    <li class="cus-col-25">
                                        <h3 class="menu-title"><a href="javascript:void(0)">Product Details 2</a>
                                        </h3>
                                        <ul class="mega-single-block">
                                            <li><a href="product-details-left-thumbnail.html">left Thumbnail</a>
                                            </li>
                                            <li><a href="product-details-right-thumbnail.html">Right Thumbnail</a>
                                            </li>
                                            <li><a href="product-details-left-gallery.html">Left Gallery</a></li>
                                            <li><a href="product-details-right-gallery.html">Right Gallery</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- Pages -->
                            <li class="menu-item has-children">
                                <a href="javascript:void(0)">Pages <i
                                        class="fas fa-chevron-down dropdown-arrow"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="compare.html">Compare</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="login-register.html">Login Register</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="order-complete.html">Order Complete</a></li>
                                    <li><a href="faq.html">Faq</a></li>
                                    <li><a href="contact-2.html">contact 02</a></li>
                                </ul>
                            </li>
                            <!-- Blog -->
                            <li class="menu-item has-children mega-menu">
                                <a href="javascript:void(0)">Blog <i
                                        class="fas fa-chevron-down dropdown-arrow"></i></a>
                                <ul class="sub-menu three-column">
                                    <li class="cus-col-33">
                                        <h3 class="menu-title"><a href="javascript:void(0)">Blog Grid</a></h3>
                                        <ul class="mega-single-block">
                                            <li><a href="blog.html">Full Widh (Default)</a></li>
                                            <li><a href="blog-left-sidebar.html">left Sidebar</a></li>
                                            <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="cus-col-33">
                                        <h3 class="menu-title"><a href="javascript:void(0)">Blog List </a></h3>
                                        <ul class="mega-single-block">
                                            <!-- <li><a href="blog-list.html">Full Widh (Default)</a></li> -->
                                            <li><a href="blog-list-left-sidebar.html">left Sidebar</a></li>
                                            <li><a href="blog-list-right-sidebar.html">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="cus-col-33">
                                        <h3 class="menu-title"><a href="javascript:void(0)">Blog Details</a></h3>
                                        <ul class="mega-single-block">
                                            <li><a href="blog-details.html">Image Format (Default)</a></li>
                                            <li><a href="blog-details-gallery.html">Gallery Format</a></li>
                                            <li><a href="blog-details-audio.html">Audio Format</a></li>
                                            <li><a href="blog-details-video.html">Video Format</a></li>
                                            <li><a href="blog-details-left-sidebar.html">left Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="breadcrumb-section">
        <h2 class="sr-only">Site Breadcrumb</h2>
        <div class="container">
            <div class="breadcrumb-contents">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Login</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!--=============================================
=            Login Register page content         =
=============================================-->
    <main class="page-section inner-page-sec-padding-bottom">
        <div class="container">
           @yield('content')
        </div>
    </main>
</div>
<!--=================================
Brands Slider
===================================== -->
<section class="section-margin">
    <h2 class="sr-only">Brand Slider</h2>
    <div class="container">
        <div class="brand-slider sb-slick-slider border-top border-bottom" data-slick-setting='{
                                            "autoplay": true,
                                            "autoplaySpeed": 8000,
                                            "slidesToShow": 6
                                            }' data-slick-responsive='[
                {"breakpoint":992, "settings": {"slidesToShow": 4} },
                {"breakpoint":768, "settings": {"slidesToShow": 3} },
                {"breakpoint":575, "settings": {"slidesToShow": 3} },
                {"breakpoint":480, "settings": {"slidesToShow": 2} },
                {"breakpoint":320, "settings": {"slidesToShow": 1} }
            ]'>
            <div class="single-slide">
                <img src="image/others/brand-1.jpg" alt="">
            </div>
            <div class="single-slide">
                <img src="image/others/brand-2.jpg" alt="">
            </div>
            <div class="single-slide">
                <img src="image/others/brand-3.jpg" alt="">
            </div>
            <div class="single-slide">
                <img src="image/others/brand-4.jpg" alt="">
            </div>
            <div class="single-slide">
                <img src="image/others/brand-5.jpg" alt="">
            </div>
            <div class="single-slide">
                <img src="image/others/brand-6.jpg" alt="">
            </div>
            <div class="single-slide">
                <img src="image/others/brand-1.jpg" alt="">
            </div>
            <div class="single-slide">
                <img src="image/others/brand-2.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<!--=================================
Footer Area
===================================== -->
@include('layout-include.user.footer')
<!-- Use Minified Plugins Version For Fast Page Load -->
<script src="{{asset('user/js/plugins.js')}}"></script>
<script src="{{asset('user/js/ajax-mail.js')}}"></script>
<script src="{{asset('user/js/custom.js')}}"></script>
</body>

</html>
