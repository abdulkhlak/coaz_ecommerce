<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">
    <title>Coaz Online shop</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{asset("frontend")}}/assets/css/bootstrap.min.css">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="{{asset("frontend")}}/assets/css/main.css">
    <link rel="stylesheet" href="{{asset("frontend")}}/assets/css/blue.css">
    <link rel="stylesheet" href="{{asset("frontend")}}/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="{{asset("frontend")}}/assets/css/owl.transitions.css">
    <link rel="stylesheet" href="{{asset("frontend")}}/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{asset("frontend")}}/assets/css/rateit.css">
    <link rel="stylesheet" href="{{asset("frontend")}}/assets/css/bootstrap-select.min.css">

    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="{{asset("frontend")}}/assets/css/font-awesome.css">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>
<body class="cnt-home">
<!-- ============================================== HEADER ============================================== -->
@include('layouts.frontend.include.header')

<!-- ============================================== HEADER : END ============================================== -->
<div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
            <!-- ============================================== SIDEBAR ============================================== -->
            <div class="col-xs-12 col-sm-12 col-md-3 sidebar">

                <!-- ================================== TOP NAVIGATION ================================== -->
                <div class="side-menu animate-dropdown outer-bottom-xs">
                    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
                    <nav class="yamm megamenu-horizontal">
                        <ul class="nav">

                            <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-diamond"></i>Jewellery</a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <div class="row">

                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li><a href="#">Sandals </a></li>
                                                    <li><a href="#">Shorts</a></li>
                                                    <li><a href="#">Dresses</a></li>
                                                    <li><a href="#">Jwellery</a></li>
                                                    <li><a href="#">Bags</a></li>
                                                    <li><a href="#">Night Dress</a></li>
                                                    <li><a href="#">Swim Wear</a></li>
                                                    <li><a href="#">Toys</a></li>
                                                </ul>
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.row -->
                                    </li>
                                    <!-- /.yamm-content -->
                                </ul>
                                <!-- /.dropdown-menu --> </li>
                            <!-- /.menu-item -->
                        </ul>
                        <!-- /.nav -->
                    </nav>
                    <!-- /.megamenu-horizontal -->
                </div>
                <!-- /.side-menu -->
                <!-- ================================== TOP NAVIGATION : END ================================== -->
            </div>
            <!-- /.sidemenu-holder -->
            <!-- ============================================== SIDEBAR : END ============================================== -->

            <!-- ============================================== CONTENT ============================================== -->
            <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                <!-- ========================================== SECTION – HERO ========================================= -->

                <div id="hero">
                    <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                        <div class="item" style="background-image: url({{asset("frontend")}}/assets/images/sliders/01.jpg);">
                            <div class="container-fluid">
                                <div class="caption bg-color vertical-center text-left">
                                    <div class="slider-header fadeInDown-1">Top Brands</div>
                                    <div class="big-text fadeInDown-1"> New Collections </div>
                                    <div class="excerpt fadeInDown-2 hidden-xs"> <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span> </div>
                                    <div class="button-holder fadeInDown-3"> <a href="index6c11.html?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
                                </div>
                                <!-- /.caption -->
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /.item -->

                        <div class="item" style="background-image: url({{asset("frontend")}}/assets/images/sliders/02.jpg);">
                            <div class="container-fluid">
                                <div class="caption bg-color vertical-center text-left">
                                    <div class="slider-header fadeInDown-1">Spring 2016</div>
                                    <div class="big-text fadeInDown-1"> Women <span class="highlight">Fashion</span> </div>
                                    <div class="excerpt fadeInDown-2 hidden-xs"> <span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</span> </div>
                                    <div class="button-holder fadeInDown-3"> <a href="index6c11.html?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
                                </div>
                                <!-- /.caption -->
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /.item -->

                    </div>
                    <!-- /.owl-carousel -->
                </div>

                <!-- ========================================= SECTION – HERO : END ========================================= -->





            </div>
            <!-- /.homebanner-holder -->
            <!-- ============================================== CONTENT : END ============================================== -->
        </div>
        <!-- /.row -->
        <section>
            <!-- ============================================== INFO BOXES ============================================== -->
            <div class="info-boxes wow fadeInUp">
                <div class="info-boxes-inner">
                    <div class="row">
                        <div class="col-md-6 col-sm-4 col-lg-4">
                            <div class="info-box">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h4 class="info-box-heading green">money back</h4>
                                    </div>
                                </div>
                                <h6 class="text">30 Days Money Back Guarantee</h6>
                            </div>
                        </div>
                        <!-- .col -->

                        <div class="hidden-md col-sm-4 col-lg-4">
                            <div class="info-box">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h4 class="info-box-heading green">free shipping</h4>
                                    </div>
                                </div>
                                <h6 class="text">Shipping on orders over $99</h6>
                            </div>
                        </div>
                        <!-- .col -->

                        <div class="col-md-6 col-sm-4 col-lg-4">
                            <div class="info-box">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h4 class="info-box-heading green">Special Sale</h4>
                                    </div>
                                </div>
                                <h6 class="text">Extra $5 off on all items </h6>
                            </div>
                        </div>
                        <!-- .col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.info-boxes-inner -->

            </div>
            <!-- /.info-boxes -->
            <!-- ============================================== INFO BOXES : END ============================================== -->
            <!-- ============================================== SCROLL TABS ============================================== -->

{{--            <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">--}}
{{--                <div class="more-info-tab clearfix ">--}}
{{--                    <h3 class="new-product-title pull-left">New Products</h3>--}}
{{--                    <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">--}}
{{--                        <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">All</a></li>--}}
{{--                        <li><a data-transition-type="backSlide" href="#smartphone" data-toggle="tab">Clothing</a></li>--}}
{{--                        <li><a data-transition-type="backSlide" href="#laptop" data-toggle="tab">Electronics</a></li>--}}
{{--                        <li><a data-transition-type="backSlide" href="#apple" data-toggle="tab">Shoes</a></li>--}}
{{--                    </ul>--}}
{{--                    <!-- /.nav-tabs -->--}}
{{--                </div>--}}
{{--                <div class="tab-content outer-top-xs">--}}
{{--                    <div class="tab-pane in active" id="all">--}}
{{--                        <div class="product-slider">--}}
{{--                            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">--}}
{{--                                <div class="item item-carousel">--}}
{{--                                    <div class="products">--}}
{{--                                        <div class="product">--}}
{{--                                            <div class="product-image">--}}
{{--                                                <div class="image"> <a href="detail.html"><img  src="{{asset("frontend")}}/assets/images/products/p1.jpg" alt=""></a> </div>--}}
{{--                                                <!-- /.image -->--}}

{{--                                                <div class="tag new"><span>new</span></div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /.product-image -->--}}

{{--                                            <div class="product-info text-left">--}}
{{--                                                <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>--}}
{{--                                                <div class="rating rateit-small"></div>--}}
{{--                                                <div class="description"></div>--}}
{{--                                                <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>--}}
{{--                                                <!-- /.product-price -->--}}

{{--                                            </div>--}}
{{--                                            <!-- /.product-info -->--}}
{{--                                            <div class="cart clearfix animate-effect">--}}
{{--                                                <div class="action">--}}
{{--                                                    <ul class="list-unstyled">--}}
{{--                                                        <li class="add-cart-button btn-group">--}}
{{--                                                            <button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart"> <i class="fa fa-shopping-cart"></i> </button>--}}
{{--                                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>--}}
{{--                                                        <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <!-- /.action -->--}}
{{--                                            </div>--}}
{{--                                            <!-- /.cart -->--}}
{{--                                        </div>--}}
{{--                                        <!-- /.product -->--}}

{{--                                    </div>--}}
{{--                                    <!-- /.products -->--}}
{{--                                </div>--}}
{{--                                <!-- /.item -->--}}

{{--                                <div class="item item-carousel">--}}
{{--                                    <div class="products">--}}
{{--                                        <div class="product">--}}
{{--                                            <div class="product-image">--}}
{{--                                                <div class="image"> <a href="detail.html"><img  src="{{asset("frontend")}}/assets/images/products/p2.jpg" alt=""></a> </div>--}}
{{--                                                <!-- /.image -->--}}

{{--                                                <div class="tag hot"><span>hot</span></div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /.product-image -->--}}

{{--                                            <div class="product-info text-left">--}}
{{--                                                <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>--}}
{{--                                                <div class="rating rateit-small"></div>--}}
{{--                                                <div class="description"></div>--}}
{{--                                                <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>--}}
{{--                                                <!-- /.product-price -->--}}

{{--                                            </div>--}}
{{--                                            <!-- /.product-info -->--}}
{{--                                            <div class="cart clearfix animate-effect">--}}
{{--                                                <div class="action">--}}
{{--                                                    <ul class="list-unstyled">--}}
{{--                                                        <li class="add-cart-button btn-group">--}}
{{--                                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>--}}
{{--                                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>--}}
{{--                                                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <!-- /.action -->--}}
{{--                                            </div>--}}
{{--                                            <!-- /.cart -->--}}
{{--                                        </div>--}}
{{--                                        <!-- /.product -->--}}

{{--                                    </div>--}}
{{--                                    <!-- /.products -->--}}
{{--                                </div>--}}
{{--                                <!-- /.item -->--}}

{{--                                <div class="item item-carousel">--}}
{{--                                    <div class="products">--}}
{{--                                        <div class="product">--}}
{{--                                            <div class="product-image">--}}
{{--                                                <div class="image"> <a href="detail.html"><img  src="{{asset("frontend")}}/assets/images/products/p4.jpg" alt=""></a> </div>--}}
{{--                                                <!-- /.image -->--}}

{{--                                                <div class="tag sale"><span>sale</span></div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /.product-image -->--}}

{{--                                            <div class="product-info text-left">--}}
{{--                                                <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>--}}
{{--                                                <div class="rating rateit-small"></div>--}}
{{--                                                <div class="description"></div>--}}
{{--                                                <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>--}}
{{--                                                <!-- /.product-price -->--}}

{{--                                            </div>--}}
{{--                                            <!-- /.product-info -->--}}
{{--                                            <div class="cart clearfix animate-effect">--}}
{{--                                                <div class="action">--}}
{{--                                                    <ul class="list-unstyled">--}}
{{--                                                        <li class="add-cart-button btn-group">--}}
{{--                                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>--}}
{{--                                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>--}}
{{--                                                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <!-- /.action -->--}}
{{--                                            </div>--}}
{{--                                            <!-- /.cart -->--}}
{{--                                        </div>--}}
{{--                                        <!-- /.product -->--}}

{{--                                    </div>--}}
{{--                                    <!-- /.products -->--}}
{{--                                </div>--}}
{{--                                <!-- /.item -->--}}

{{--                                <div class="item item-carousel">--}}
{{--                                    <div class="products">--}}
{{--                                        <div class="product">--}}
{{--                                            <div class="product-image">--}}
{{--                                                <div class="image"> <a href="detail.html"><img  src="{{asset("frontend")}}/assets/images/products/p3.jpg" alt=""></a> </div>--}}
{{--                                                <!-- /.image -->--}}

{{--                                                <div class="tag sale"><span>sale</span></div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /.product-image -->--}}

{{--                                            <div class="product-info text-left">--}}
{{--                                                <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>--}}
{{--                                                <div class="rating rateit-small"></div>--}}
{{--                                                <div class="description"></div>--}}
{{--                                                <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>--}}
{{--                                                <!-- /.product-price -->--}}

{{--                                            </div>--}}
{{--                                            <!-- /.product-info -->--}}
{{--                                            <div class="cart clearfix animate-effect">--}}
{{--                                                <div class="action">--}}
{{--                                                    <ul class="list-unstyled">--}}
{{--                                                        <li class="add-cart-button btn-group">--}}
{{--                                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>--}}
{{--                                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>--}}
{{--                                                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <!-- /.action -->--}}
{{--                                            </div>--}}
{{--                                            <!-- /.cart -->--}}
{{--                                        </div>--}}
{{--                                        <!-- /.product -->--}}

{{--                                    </div>--}}
{{--                                    <!-- /.products -->--}}
{{--                                </div>--}}
{{--                                <!-- /.item -->--}}

{{--                                <div class="item item-carousel">--}}
{{--                                    <div class="products">--}}
{{--                                        <div class="product">--}}
{{--                                            <div class="product-image">--}}
{{--                                                <div class="image"> <a href="detail.html"><img  src="{{asset("frontend")}}/assets/images/products/p30.jpg" alt=""></a> </div>--}}
{{--                                                <!-- /.image -->--}}

{{--                                                <div class="tag hot"><span>hot</span></div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /.product-image -->--}}

{{--                                            <div class="product-info text-left">--}}
{{--                                                <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>--}}
{{--                                                <div class="rating rateit-small"></div>--}}
{{--                                                <div class="description"></div>--}}
{{--                                                <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>--}}
{{--                                                <!-- /.product-price -->--}}

{{--                                            </div>--}}
{{--                                            <!-- /.product-info -->--}}
{{--                                            <div class="cart clearfix animate-effect">--}}
{{--                                                <div class="action">--}}
{{--                                                    <ul class="list-unstyled">--}}
{{--                                                        <li class="add-cart-button btn-group">--}}
{{--                                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>--}}
{{--                                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>--}}
{{--                                                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <!-- /.action -->--}}
{{--                                            </div>--}}
{{--                                            <!-- /.cart -->--}}
{{--                                        </div>--}}
{{--                                        <!-- /.product -->--}}

{{--                                    </div>--}}
{{--                                    <!-- /.products -->--}}
{{--                                </div>--}}
{{--                                <!-- /.item -->--}}

{{--                                <div class="item item-carousel">--}}
{{--                                    <div class="products">--}}
{{--                                        <div class="product">--}}
{{--                                            <div class="product-image">--}}
{{--                                                <div class="image"> <a href="detail.html"><img  src="{{asset("frontend")}}/assets/images/products/p29.jpg" alt=""></a> </div>--}}
{{--                                                <!-- /.image -->--}}

{{--                                                <div class="tag new"><span>new</span></div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /.product-image -->--}}

{{--                                            <div class="product-info text-left">--}}
{{--                                                <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>--}}
{{--                                                <div class="rating rateit-small"></div>--}}
{{--                                                <div class="description"></div>--}}
{{--                                                <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>--}}
{{--                                                <!-- /.product-price -->--}}

{{--                                            </div>--}}
{{--                                            <!-- /.product-info -->--}}
{{--                                            <div class="cart clearfix animate-effect">--}}
{{--                                                <div class="action">--}}
{{--                                                    <ul class="list-unstyled">--}}
{{--                                                        <li class="add-cart-button btn-group">--}}
{{--                                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>--}}
{{--                                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>--}}
{{--                                                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <!-- /.action -->--}}
{{--                                            </div>--}}
{{--                                            <!-- /.cart -->--}}
{{--                                        </div>--}}
{{--                                        <!-- /.product -->--}}

{{--                                    </div>--}}
{{--                                    <!-- /.products -->--}}
{{--                                </div>--}}
{{--                                <!-- /.item -->--}}
{{--                            </div>--}}
{{--                            <!-- /.home-owl-carousel -->--}}
{{--                        </div>--}}
{{--                        <!-- /.product-slider -->--}}
{{--                    </div>--}}
{{--                    <!-- /.tab-pane -->--}}

{{--                    <div class="tab-pane" id="smartphone">--}}
{{--                        <div class="product-slider">--}}
{{--                            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">--}}
{{--                                <div class="item item-carousel">--}}
{{--                                    <div class="products">--}}
{{--                                        <div class="product">--}}
{{--                                            <div class="product-image">--}}
{{--                                                <div class="image"> <a href="detail.html"><img  src="{{asset("frontend")}}/assets/images/products/p5.jpg" alt=""></a> </div>--}}
{{--                                                <!-- /.image -->--}}

{{--                                                <div class="tag sale"><span>sale</span></div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /.product-image -->--}}

{{--                                            <div class="product-info text-left">--}}
{{--                                                <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>--}}
{{--                                                <div class="rating rateit-small"></div>--}}
{{--                                                <div class="description"></div>--}}
{{--                                                <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>--}}
{{--                                                <!-- /.product-price -->--}}

{{--                                            </div>--}}
{{--                                            <!-- /.product-info -->--}}
{{--                                            <div class="cart clearfix animate-effect">--}}
{{--                                                <div class="action">--}}
{{--                                                    <ul class="list-unstyled">--}}
{{--                                                        <li class="add-cart-button btn-group">--}}
{{--                                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>--}}
{{--                                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>--}}
{{--                                                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <!-- /.action -->--}}
{{--                                            </div>--}}
{{--                                            <!-- /.cart -->--}}
{{--                                        </div>--}}
{{--                                        <!-- /.product -->--}}

{{--                                    </div>--}}
{{--                                    <!-- /.products -->--}}
{{--                                </div>--}}
{{--                                <!-- /.item -->--}}

{{--                                <div class="item item-carousel">--}}
{{--                                    <div class="products">--}}
{{--                                        <div class="product">--}}
{{--                                            <div class="product-image">--}}
{{--                                                <div class="image"> <a href="detail.html"><img  src="{{asset("frontend")}}/assets/images/products/p6.jpg" alt=""></a> </div>--}}
{{--                                                <!-- /.image -->--}}

{{--                                                <div class="tag new"><span>new</span></div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /.product-image -->--}}

{{--                                            <div class="product-info text-left">--}}
{{--                                                <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>--}}
{{--                                                <div class="rating rateit-small"></div>--}}
{{--                                                <div class="description"></div>--}}
{{--                                                <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>--}}
{{--                                                <!-- /.product-price -->--}}

{{--                                            </div>--}}
{{--                                            <!-- /.product-info -->--}}
{{--                                            <div class="cart clearfix animate-effect">--}}
{{--                                                <div class="action">--}}
{{--                                                    <ul class="list-unstyled">--}}
{{--                                                        <li class="add-cart-button btn-group">--}}
{{--                                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>--}}
{{--                                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>--}}
{{--                                                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <!-- /.action -->--}}
{{--                                            </div>--}}
{{--                                            <!-- /.cart -->--}}
{{--                                        </div>--}}
{{--                                        <!-- /.product -->--}}

{{--                                    </div>--}}
{{--                                    <!-- /.products -->--}}
{{--                                </div>--}}
{{--                                <!-- /.item -->--}}

{{--                                <div class="item item-carousel">--}}
{{--                                    <div class="products">--}}
{{--                                        <div class="product">--}}
{{--                                            <div class="product-image">--}}
{{--                                                <div class="image"> <a href="detail.html"><img  src="{{asset("frontend")}}/assets/images/products/p7.jpg" alt=""></a> </div>--}}
{{--                                                <!-- /.image -->--}}

{{--                                                <div class="tag sale"><span>sale</span></div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /.product-image -->--}}

{{--                                            <div class="product-info text-left">--}}
{{--                                                <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>--}}
{{--                                                <div class="rating rateit-small"></div>--}}
{{--                                                <div class="description"></div>--}}
{{--                                                <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>--}}
{{--                                                <!-- /.product-price -->--}}

{{--                                            </div>--}}
{{--                                            <!-- /.product-info -->--}}
{{--                                            <div class="cart clearfix animate-effect">--}}
{{--                                                <div class="action">--}}
{{--                                                    <ul class="list-unstyled">--}}
{{--                                                        <li class="add-cart-button btn-group">--}}
{{--                                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>--}}
{{--                                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>--}}
{{--                                                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <!-- /.action -->--}}
{{--                                            </div>--}}
{{--                                            <!-- /.cart -->--}}
{{--                                        </div>--}}
{{--                                        <!-- /.product -->--}}

{{--                                    </div>--}}
{{--                                    <!-- /.products -->--}}
{{--                                </div>--}}
{{--                                <!-- /.item -->--}}

{{--                                <div class="item item-carousel">--}}
{{--                                    <div class="products">--}}
{{--                                        <div class="product">--}}
{{--                                            <div class="product-image">--}}
{{--                                                <div class="image"> <a href="detail.html"><img  src="{{asset("frontend")}}/assets/images/products/p8.jpg" alt=""></a> </div>--}}
{{--                                                <!-- /.image -->--}}

{{--                                                <div class="tag new"><span>new</span></div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /.product-image -->--}}

{{--                                            <div class="product-info text-left">--}}
{{--                                                <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>--}}
{{--                                                <div class="rating rateit-small"></div>--}}
{{--                                                <div class="description"></div>--}}
{{--                                                <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>--}}
{{--                                                <!-- /.product-price -->--}}

{{--                                            </div>--}}
{{--                                            <!-- /.product-info -->--}}
{{--                                            <div class="cart clearfix animate-effect">--}}
{{--                                                <div class="action">--}}
{{--                                                    <ul class="list-unstyled">--}}
{{--                                                        <li class="add-cart-button btn-group">--}}
{{--                                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>--}}
{{--                                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>--}}
{{--                                                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <!-- /.action -->--}}
{{--                                            </div>--}}
{{--                                            <!-- /.cart -->--}}
{{--                                        </div>--}}
{{--                                        <!-- /.product -->--}}

{{--                                    </div>--}}
{{--                                    <!-- /.products -->--}}
{{--                                </div>--}}
{{--                                <!-- /.item -->--}}

{{--                                <div class="item item-carousel">--}}
{{--                                    <div class="products">--}}
{{--                                        <div class="product">--}}
{{--                                            <div class="product-image">--}}
{{--                                                <div class="image"> <a href="detail.html"><img  src="{{asset("frontend")}}/assets/images/products/p9.jpg" alt=""></a> </div>--}}
{{--                                                <!-- /.image -->--}}

{{--                                                <div class="tag hot"><span>hot</span></div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /.product-image -->--}}

{{--                                            <div class="product-info text-left">--}}
{{--                                                <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>--}}
{{--                                                <div class="rating rateit-small"></div>--}}
{{--                                                <div class="description"></div>--}}
{{--                                                <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>--}}
{{--                                                <!-- /.product-price -->--}}

{{--                                            </div>--}}
{{--                                            <!-- /.product-info -->--}}
{{--                                            <div class="cart clearfix animate-effect">--}}
{{--                                                <div class="action">--}}
{{--                                                    <ul class="list-unstyled">--}}
{{--                                                        <li class="add-cart-button btn-group">--}}
{{--                                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>--}}
{{--                                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>--}}
{{--                                                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <!-- /.action -->--}}
{{--                                            </div>--}}
{{--                                            <!-- /.cart -->--}}
{{--                                        </div>--}}
{{--                                        <!-- /.product -->--}}

{{--                                    </div>--}}
{{--                                    <!-- /.products -->--}}
{{--                                </div>--}}
{{--                                <!-- /.item -->--}}

{{--                                <div class="item item-carousel">--}}
{{--                                    <div class="products">--}}
{{--                                        <div class="product">--}}
{{--                                            <div class="product-image">--}}
{{--                                                <div class="image"> <a href="detail.html"><img  src="{{asset("frontend")}}/assets/images/products/p10.jpg" alt=""></a> </div>--}}
{{--                                                <!-- /.image -->--}}

{{--                                                <div class="tag hot"><span>hot</span></div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /.product-image -->--}}

{{--                                            <div class="product-info text-left">--}}
{{--                                                <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>--}}
{{--                                                <div class="rating rateit-small"></div>--}}
{{--                                                <div class="description"></div>--}}
{{--                                                <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>--}}
{{--                                                <!-- /.product-price -->--}}

{{--                                            </div>--}}
{{--                                            <!-- /.product-info -->--}}
{{--                                            <div class="cart clearfix animate-effect">--}}
{{--                                                <div class="action">--}}
{{--                                                    <ul class="list-unstyled">--}}
{{--                                                        <li class="add-cart-button btn-group">--}}
{{--                                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>--}}
{{--                                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>--}}
{{--                                                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <!-- /.action -->--}}
{{--                                            </div>--}}
{{--                                            <!-- /.cart -->--}}
{{--                                        </div>--}}
{{--                                        <!-- /.product -->--}}

{{--                                    </div>--}}
{{--                                    <!-- /.products -->--}}
{{--                                </div>--}}
{{--                                <!-- /.item -->--}}
{{--                            </div>--}}
{{--                            <!-- /.home-owl-carousel -->--}}
{{--                        </div>--}}
{{--                        <!-- /.product-slider -->--}}
{{--                    </div>--}}
{{--                    <!-- /.tab-pane -->--}}

{{--                    <div class="tab-pane" id="laptop">--}}
{{--                        <div class="product-slider">--}}
{{--                            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">--}}
{{--                                <div class="item item-carousel">--}}
{{--                                    <div class="products">--}}
{{--                                        <div class="product">--}}
{{--                                            <div class="product-image">--}}
{{--                                                <div class="image"> <a href="detail.html"><img  src="{{asset("frontend")}}/assets/images/products/p11.jpg" alt=""></a> </div>--}}
{{--                                                <!-- /.image -->--}}

{{--                                                <div class="tag new"><span>new</span></div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /.product-image -->--}}

{{--                                            <div class="product-info text-left">--}}
{{--                                                <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>--}}
{{--                                                <div class="rating rateit-small"></div>--}}
{{--                                                <div class="description"></div>--}}
{{--                                                <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>--}}
{{--                                                <!-- /.product-price -->--}}

{{--                                            </div>--}}
{{--                                            <!-- /.product-info -->--}}
{{--                                            <div class="cart clearfix animate-effect">--}}
{{--                                                <div class="action">--}}
{{--                                                    <ul class="list-unstyled">--}}
{{--                                                        <li class="add-cart-button btn-group">--}}
{{--                                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>--}}
{{--                                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>--}}
{{--                                                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <!-- /.action -->--}}
{{--                                            </div>--}}
{{--                                            <!-- /.cart -->--}}
{{--                                        </div>--}}
{{--                                        <!-- /.product -->--}}

{{--                                    </div>--}}
{{--                                    <!-- /.products -->--}}
{{--                                </div>--}}
{{--                                <!-- /.item -->--}}

{{--                                <div class="item item-carousel">--}}
{{--                                    <div class="products">--}}
{{--                                        <div class="product">--}}
{{--                                            <div class="product-image">--}}
{{--                                                <div class="image"> <a href="detail.html"><img  src="{{asset("frontend")}}/assets/images/products/p12.jpg" alt=""></a> </div>--}}
{{--                                                <!-- /.image -->--}}

{{--                                                <div class="tag new"><span>new</span></div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /.product-image -->--}}

{{--                                            <div class="product-info text-left">--}}
{{--                                                <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>--}}
{{--                                                <div class="rating rateit-small"></div>--}}
{{--                                                <div class="description"></div>--}}
{{--                                                <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>--}}
{{--                                                <!-- /.product-price -->--}}

{{--                                            </div>--}}
{{--                                            <!-- /.product-info -->--}}
{{--                                            <div class="cart clearfix animate-effect">--}}
{{--                                                <div class="action">--}}
{{--                                                    <ul class="list-unstyled">--}}
{{--                                                        <li class="add-cart-button btn-group">--}}
{{--                                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>--}}
{{--                                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>--}}
{{--                                                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <!-- /.action -->--}}
{{--                                            </div>--}}
{{--                                            <!-- /.cart -->--}}
{{--                                        </div>--}}
{{--                                        <!-- /.product -->--}}

{{--                                    </div>--}}
{{--                                    <!-- /.products -->--}}
{{--                                </div>--}}
{{--                                <!-- /.item -->--}}

{{--                                <div class="item item-carousel">--}}
{{--                                    <div class="products">--}}
{{--                                        <div class="product">--}}
{{--                                            <div class="product-image">--}}
{{--                                                <div class="image"> <a href="detail.html"><img  src="{{asset("frontend")}}/assets/images/products/p13.jpg" alt=""></a> </div>--}}
{{--                                                <!-- /.image -->--}}

{{--                                                <div class="tag sale"><span>sale</span></div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /.product-image -->--}}

{{--                                            <div class="product-info text-left">--}}
{{--                                                <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>--}}
{{--                                                <div class="rating rateit-small"></div>--}}
{{--                                                <div class="description"></div>--}}
{{--                                                <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>--}}
{{--                                                <!-- /.product-price -->--}}

{{--                                            </div>--}}
{{--                                            <!-- /.product-info -->--}}
{{--                                            <div class="cart clearfix animate-effect">--}}
{{--                                                <div class="action">--}}
{{--                                                    <ul class="list-unstyled">--}}
{{--                                                        <li class="add-cart-button btn-group">--}}
{{--                                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>--}}
{{--                                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>--}}
{{--                                                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <!-- /.action -->--}}
{{--                                            </div>--}}
{{--                                            <!-- /.cart -->--}}
{{--                                        </div>--}}
{{--                                        <!-- /.product -->--}}

{{--                                    </div>--}}
{{--                                    <!-- /.products -->--}}
{{--                                </div>--}}
{{--                                <!-- /.item -->--}}

{{--                                <div class="item item-carousel">--}}
{{--                                    <div class="products">--}}
{{--                                        <div class="product">--}}
{{--                                            <div class="product-image">--}}
{{--                                                <div class="image"> <a href="detail.html"><img src="{{asset("frontend")}}/assets/images/products/p14.jpg" alt=""></a> </div>--}}
{{--                                                <!-- /.image -->--}}

{{--                                                <div class="tag hot"><span>hot</span></div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /.product-image -->--}}

{{--                                            <div class="product-info text-left">--}}
{{--                                                <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>--}}
{{--                                                <div class="rating rateit-small"></div>--}}
{{--                                                <div class="description"></div>--}}
{{--                                                <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>--}}
{{--                                                <!-- /.product-price -->--}}

{{--                                            </div>--}}
{{--                                            <!-- /.product-info -->--}}
{{--                                            <div class="cart clearfix animate-effect">--}}
{{--                                                <div class="action">--}}
{{--                                                    <ul class="list-unstyled">--}}
{{--                                                        <li class="add-cart-button btn-group">--}}
{{--                                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>--}}
{{--                                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>--}}
{{--                                                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <!-- /.action -->--}}
{{--                                            </div>--}}
{{--                                            <!-- /.cart -->--}}
{{--                                        </div>--}}
{{--                                        <!-- /.product -->--}}

{{--                                    </div>--}}
{{--                                    <!-- /.products -->--}}
{{--                                </div>--}}
{{--                                <!-- /.item -->--}}

{{--                                <div class="item item-carousel">--}}
{{--                                    <div class="products">--}}
{{--                                        <div class="product">--}}
{{--                                            <div class="product-image">--}}
{{--                                                <div class="image"> <a href="detail.html"><img  src="{{asset("frontend")}}/assets/images/products/p15.jpg" alt="image"></a> </div>--}}
{{--                                                <!-- /.image -->--}}

{{--                                                <div class="tag hot"><span>hot</span></div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /.product-image -->--}}

{{--                                            <div class="product-info text-left">--}}
{{--                                                <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>--}}
{{--                                                <div class="rating rateit-small"></div>--}}
{{--                                                <div class="description"></div>--}}
{{--                                                <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>--}}
{{--                                                <!-- /.product-price -->--}}

{{--                                            </div>--}}
{{--                                            <!-- /.product-info -->--}}
{{--                                            <div class="cart clearfix animate-effect">--}}
{{--                                                <div class="action">--}}
{{--                                                    <ul class="list-unstyled">--}}
{{--                                                        <li class="add-cart-button btn-group">--}}
{{--                                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>--}}
{{--                                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>--}}
{{--                                                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <!-- /.action -->--}}
{{--                                            </div>--}}
{{--                                            <!-- /.cart -->--}}
{{--                                        </div>--}}
{{--                                        <!-- /.product -->--}}

{{--                                    </div>--}}
{{--                                    <!-- /.products -->--}}
{{--                                </div>--}}
{{--                                <!-- /.item -->--}}

{{--                                <div class="item item-carousel">--}}
{{--                                    <div class="products">--}}
{{--                                        <div class="product">--}}
{{--                                            <div class="product-image">--}}
{{--                                                <div class="image"> <a href="detail.html"><img src="{{asset("frontend")}}/assets/images/products/p16.jpg" alt=""></a> </div>--}}
{{--                                                <!-- /.image -->--}}

{{--                                                <div class="tag sale"><span>sale</span></div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /.product-image -->--}}

{{--                                            <div class="product-info text-left">--}}
{{--                                                <h3 class="name"><a href="detail.html">Apple Iphone 5s 32GB</a></h3>--}}
{{--                                                <div class="rating rateit-small"></div>--}}
{{--                                                <div class="description"></div>--}}
{{--                                                <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>--}}
{{--                                                <!-- /.product-price -->--}}

{{--                                            </div>--}}
{{--                                            <!-- /.product-info -->--}}
{{--                                            <div class="cart clearfix animate-effect">--}}
{{--                                                <div class="action">--}}
{{--                                                    <ul class="list-unstyled">--}}
{{--                                                        <li class="add-cart-button btn-group">--}}
{{--                                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>--}}
{{--                                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>--}}
{{--                                                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <!-- /.action -->--}}
{{--                                            </div>--}}
{{--                                            <!-- /.cart -->--}}
{{--                                        </div>--}}
{{--                                        <!-- /.product -->--}}

{{--                                    </div>--}}
{{--                                    <!-- /.products -->--}}
{{--                                </div>--}}
{{--                                <!-- /.item -->--}}
{{--                            </div>--}}
{{--                            <!-- /.home-owl-carousel -->--}}
{{--                        </div>--}}
{{--                        <!-- /.product-slider -->--}}
{{--                    </div>--}}
{{--                    <!-- /.tab-pane -->--}}

{{--                    <div class="tab-pane" id="apple">--}}
{{--                        <div class="product-slider">--}}
{{--                            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">--}}
{{--                                <div class="item item-carousel">--}}
{{--                                    <div class="products">--}}
{{--                                        <div class="product">--}}
{{--                                            <div class="product-image">--}}
{{--                                                <div class="image"> <a href="detail.html"><img src="{{asset("frontend")}}/assets/images/products/p18.jpg" alt=""></a> </div>--}}
{{--                                                <!-- /.image -->--}}

{{--                                                <div class="tag sale"><span>sale</span></div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /.product-image -->--}}

{{--                                            <div class="product-info text-left">--}}
{{--                                                <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>--}}
{{--                                                <div class="rating rateit-small"></div>--}}
{{--                                                <div class="description"></div>--}}
{{--                                                <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>--}}
{{--                                                <!-- /.product-price -->--}}

{{--                                            </div>--}}
{{--                                            <!-- /.product-info -->--}}
{{--                                            <div class="cart clearfix animate-effect">--}}
{{--                                                <div class="action">--}}
{{--                                                    <ul class="list-unstyled">--}}
{{--                                                        <li class="add-cart-button btn-group">--}}
{{--                                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>--}}
{{--                                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>--}}
{{--                                                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <!-- /.action -->--}}
{{--                                            </div>--}}
{{--                                            <!-- /.cart -->--}}
{{--                                        </div>--}}
{{--                                        <!-- /.product -->--}}

{{--                                    </div>--}}
{{--                                    <!-- /.products -->--}}
{{--                                </div>--}}
{{--                                <!-- /.item -->--}}

{{--                                <div class="item item-carousel">--}}
{{--                                    <div class="products">--}}
{{--                                        <div class="product">--}}
{{--                                            <div class="product-image">--}}
{{--                                                <div class="image"> <a href="detail.html"><img  src="{{asset("frontend")}}/assets/images/products/p18.jpg" alt=""></a> </div>--}}
{{--                                                <!-- /.image -->--}}

{{--                                                <div class="tag hot"><span>hot</span></div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /.product-image -->--}}

{{--                                            <div class="product-info text-left">--}}
{{--                                                <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>--}}
{{--                                                <div class="rating rateit-small"></div>--}}
{{--                                                <div class="description"></div>--}}
{{--                                                <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>--}}
{{--                                                <!-- /.product-price -->--}}

{{--                                            </div>--}}
{{--                                            <!-- /.product-info -->--}}
{{--                                            <div class="cart clearfix animate-effect">--}}
{{--                                                <div class="action">--}}
{{--                                                    <ul class="list-unstyled">--}}
{{--                                                        <li class="add-cart-button btn-group">--}}
{{--                                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>--}}
{{--                                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>--}}
{{--                                                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <!-- /.action -->--}}
{{--                                            </div>--}}
{{--                                            <!-- /.cart -->--}}
{{--                                        </div>--}}
{{--                                        <!-- /.product -->--}}

{{--                                    </div>--}}
{{--                                    <!-- /.products -->--}}
{{--                                </div>--}}
{{--                                <!-- /.item -->--}}

{{--                                <div class="item item-carousel">--}}
{{--                                    <div class="products">--}}
{{--                                        <div class="product">--}}
{{--                                            <div class="product-image">--}}
{{--                                                <div class="image"> <a href="detail.html"><img  src="{{asset("frontend")}}/assets/images/products/p17.jpg" alt=""></a> </div>--}}
{{--                                                <!-- /.image -->--}}

{{--                                                <div class="tag sale"><span>sale</span></div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /.product-image -->--}}

{{--                                            <div class="product-info text-left">--}}
{{--                                                <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>--}}
{{--                                                <div class="rating rateit-small"></div>--}}
{{--                                                <div class="description"></div>--}}
{{--                                                <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>--}}
{{--                                                <!-- /.product-price -->--}}

{{--                                            </div>--}}
{{--                                            <!-- /.product-info -->--}}
{{--                                            <div class="cart clearfix animate-effect">--}}
{{--                                                <div class="action">--}}
{{--                                                    <ul class="list-unstyled">--}}
{{--                                                        <li class="add-cart-button btn-group">--}}
{{--                                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>--}}
{{--                                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>--}}
{{--                                                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <!-- /.action -->--}}
{{--                                            </div>--}}
{{--                                            <!-- /.cart -->--}}
{{--                                        </div>--}}
{{--                                        <!-- /.product -->--}}

{{--                                    </div>--}}
{{--                                    <!-- /.products -->--}}
{{--                                </div>--}}
{{--                                <!-- /.item -->--}}

{{--                                <div class="item item-carousel">--}}
{{--                                    <div class="products">--}}
{{--                                        <div class="product">--}}
{{--                                            <div class="product-image">--}}
{{--                                                <div class="image"> <a href="detail.html"><img  src="{{asset("frontend")}}/assets/images/products/p16.jpg" alt=""></a> </div>--}}
{{--                                                <!-- /.image -->--}}

{{--                                                <div class="tag new"><span>new</span></div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /.product-image -->--}}

{{--                                            <div class="product-info text-left">--}}
{{--                                                <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>--}}
{{--                                                <div class="rating rateit-small"></div>--}}
{{--                                                <div class="description"></div>--}}
{{--                                                <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>--}}
{{--                                                <!-- /.product-price -->--}}

{{--                                            </div>--}}
{{--                                            <!-- /.product-info -->--}}
{{--                                            <div class="cart clearfix animate-effect">--}}
{{--                                                <div class="action">--}}
{{--                                                    <ul class="list-unstyled">--}}
{{--                                                        <li class="add-cart-button btn-group">--}}
{{--                                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>--}}
{{--                                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>--}}
{{--                                                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <!-- /.action -->--}}
{{--                                            </div>--}}
{{--                                            <!-- /.cart -->--}}
{{--                                        </div>--}}
{{--                                        <!-- /.product -->--}}

{{--                                    </div>--}}
{{--                                    <!-- /.products -->--}}
{{--                                </div>--}}
{{--                                <!-- /.item -->--}}

{{--                                <div class="item item-carousel">--}}
{{--                                    <div class="products">--}}
{{--                                        <div class="product">--}}
{{--                                            <div class="product-image">--}}
{{--                                                <div class="image"> <a href="detail.html"><img  src="{{asset("frontend")}}/assets/images/products/p13.jpg" alt=""></a> </div>--}}
{{--                                                <!-- /.image -->--}}

{{--                                                <div class="tag new"><span>new</span></div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /.product-image -->--}}

{{--                                            <div class="product-info text-left">--}}
{{--                                                <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>--}}
{{--                                                <div class="rating rateit-small"></div>--}}
{{--                                                <div class="description"></div>--}}
{{--                                                <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>--}}
{{--                                                <!-- /.product-price -->--}}

{{--                                            </div>--}}
{{--                                            <!-- /.product-info -->--}}
{{--                                            <div class="cart clearfix animate-effect">--}}
{{--                                                <div class="action">--}}
{{--                                                    <ul class="list-unstyled">--}}
{{--                                                        <li class="add-cart-button btn-group">--}}
{{--                                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>--}}
{{--                                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>--}}
{{--                                                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <!-- /.action -->--}}
{{--                                            </div>--}}
{{--                                            <!-- /.cart -->--}}
{{--                                        </div>--}}
{{--                                        <!-- /.product -->--}}

{{--                                    </div>--}}
{{--                                    <!-- /.products -->--}}
{{--                                </div>--}}
{{--                                <!-- /.item -->--}}

{{--                                <div class="item item-carousel">--}}
{{--                                    <div class="products">--}}
{{--                                        <div class="product">--}}
{{--                                            <div class="product-image">--}}
{{--                                                <div class="image"> <a href="detail.html"><img  src="{{asset("frontend")}}/assets/images/products/p14.jpg" alt=""></a> </div>--}}
{{--                                                <!-- /.image -->--}}

{{--                                                <div class="tag hot"><span>hot</span></div>--}}
{{--                                            </div>--}}
{{--                                            <!-- /.product-image -->--}}

{{--                                            <div class="product-info text-left">--}}
{{--                                                <h3 class="name"><a href="detail.html">Samsung Galaxy S4</a></h3>--}}
{{--                                                <div class="rating rateit-small"></div>--}}
{{--                                                <div class="description"></div>--}}
{{--                                                <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>--}}
{{--                                                <!-- /.product-price -->--}}

{{--                                            </div>--}}
{{--                                            <!-- /.product-info -->--}}
{{--                                            <div class="cart clearfix animate-effect">--}}
{{--                                                <div class="action">--}}
{{--                                                    <ul class="list-unstyled">--}}
{{--                                                        <li class="add-cart-button btn-group">--}}
{{--                                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>--}}
{{--                                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>--}}
{{--                                                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <!-- /.action -->--}}
{{--                                            </div>--}}
{{--                                            <!-- /.cart -->--}}
{{--                                        </div>--}}
{{--                                        <!-- /.product -->--}}

{{--                                    </div>--}}
{{--                                    <!-- /.products -->--}}
{{--                                </div>--}}
{{--                                <!-- /.item -->--}}
{{--                            </div>--}}
{{--                            <!-- /.home-owl-carousel -->--}}
{{--                        </div>--}}
{{--                        <!-- /.product-slider -->--}}
{{--                    </div>--}}
{{--                    <!-- /.tab-pane -->--}}

{{--                </div>--}}
{{--                <!-- /.tab-content -->--}}
{{--            </div>--}}
            <!-- /.scroll-tabs -->
            <!-- ============================================== SCROLL TABS : END ============================================== -->
        </section>
    </div>
    <!-- /.container -->
</div>
<!-- /#top-banner-and-menu -->

<!-- ============================================================= FOOTER ============================================================= -->
@include('layouts.frontend.include.footer')
<!-- ============================================================= FOOTER : END============================================================= -->

<!-- For demo purposes – can be removed on production -->

<!-- For demo purposes – can be removed on production : End -->

<!-- JavaScripts placed at the end of the document so the pages load faster -->
<script src="{{asset("frontend")}}/assets/js/jquery-1.11.1.min.js"></script>
<script src="{{asset("frontend")}}/assets/js/bootstrap.min.js"></script>
<script src="{{asset("frontend")}}/assets/js/bootstrap-hover-dropdown.min.js"></script>
<script src="{{asset("frontend")}}/assets/js/owl.carousel.min.js"></script>
<script src="{{asset("frontend")}}/assets/js/echo.min.js"></script>
<script src="{{asset("frontend")}}/assets/js/jquery.easing-1.3.min.js"></script>
<script src="{{asset("frontend")}}/assets/js/bootstrap-slider.min.js"></script>
<script src="{{asset("frontend")}}/assets/js/jquery.rateit.min.js"></script>
<script type="text/javascript" src="{{asset("frontend")}}/assets/js/lightbox.min.js"></script>
<script src="{{asset("frontend")}}/assets/js/bootstrap-select.min.js"></script>
<script src="{{asset("frontend")}}/assets/js/wow.min.js"></script>
<script src="{{asset("frontend")}}/assets/js/scripts.js"></script>
</body>

</html>