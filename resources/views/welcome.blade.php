<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>Class-Perfume - Home</title>
    <!--meta info-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!--stylesheet include-->
    <link rel="icon" type="image/ico" href="images/fav.ico">
    <link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/camera.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/owl.transitions.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/jquery.custom-scrollbar.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/style.css">
    <!--font include-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <!--boxed layout-->
    <div class="boxed_layout relative w_xs_auto">
        <!--markup header-->
        <header role="banner">
            <!--header top part-->
            <section class="h_top_part">
                <div class="container">
                    <div class="row clearfix">
                        @guest
                        <div class="col-lg-4 col-md-4 col-sm-5 t_xs_align_c">
                            <p class="f_size_small">Welcome visitor can you
                                <a href="#" data-popup="#login_popup">Login or register an Account</a>
                            </p>
                        </div>
                        @else
                        <div class="col-lg-4 col-md-4 col-sm-5 t_xs_align_c">
                            <p class="f_size_small">
                                @role('admin')
                                <a href="{{ url('/home') }}">My account</a> | @endrole
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </p>
                        </div>
                        @endguest
                        <div class="col-lg-4 col-md-4 col-sm-2 t_align_c t_xs_align_c">
                            <p class="f_size_small">Call us toll free:
                                <b class="color_dark">{{ $options->where('key', 'tel')->first()->value }}</b>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!--header bottom part-->
            <section class="h_bot_part container">
                <div class="clearfix row">
                    <div class="col-lg-6 col-md-6 col-sm-4 t_xs_align_c">
                        <a href="{{ url('/') }}" class="logo m_xs_bottom_15 d_xs_inline_b">
                            <img src="images/logo.png" alt="">
                        </a>
                    </div>
                </div>
            </section>
            <!--main menu container-->
            <section class="menu_wrap relative">
                <div class="container clearfix">
                    <!--button for responsive menu-->
                    <button id="menu_button" class="r_corners centered_db d_none tr_all_hover d_xs_block m_bottom_10">
                        <span class="centered_db r_corners"></span>
                        <span class="centered_db r_corners"></span>
                        <span class="centered_db r_corners"></span>
                    </button>
                    <!--main menu-->
                    <nav role="navigation" class="f_left f_xs_none d_xs_none">
                        <ul class="horizontal_list main_menu clearfix">
                            <li class="current relative f_xs_none m_xs_bottom_5">
                                <a href="index.html" class="tr_delay_hover color_light tt_uppercase">
                                    <b>Home</b>
                                </a>


                            </li>
                            <li class="relative f_xs_none m_xs_bottom_5">
                                <a href="#" class="tr_delay_hover color_light tt_uppercase">
                                    <b>About</b>
                                </a>


                            </li>
                            <li class="relative f_xs_none m_xs_bottom_5">
                                <a href="#" class="tr_delay_hover color_light tt_uppercase">
                                    <b>Perfumes</b>
                                </a>
                                <!--sub menu-->
                                <div class="sub_menu_wrap top_arrow d_xs_none tr_all_hover clearfix r_corners w_xs_auto">
                                    <div class="f_left f_xs_none">
                                        <b class="color_dark m_left_20 m_bottom_5 m_top_5 d_inline_b">Woman Products</b>
                                        <ul class="sub_menu first">
                                            <li>
                                                <a class="color_dark tr_delay_hover" href="#">Parfum D'or Group</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="f_left m_left_10 m_xs_left_0 f_xs_none">
                                        <b class="color_dark m_left_20 m_bottom_5 m_top_5 d_inline_b">Man Products</b>
                                        <ul class="sub_menu">
                                            <li>
                                                <a class="color_dark tr_delay_hover" href="#">Parfum D'or Group</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="f_left m_left_10 m_xs_left_0 f_xs_none">
                                        <b class="color_dark m_left_20 m_bottom_5 m_top_5 d_inline_b">Kids Products</b>
                                        <ul class="sub_menu">
                                            <li>
                                                <a class="color_dark tr_delay_hover" href="#">Evening Tops</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <img src="images/woman_image_1.jpg" class="d_sm_none f_right m_bottom_10" alt="">
                                </div>
                            </li>
                            <li class="relative f_xs_none m_xs_bottom_5">
                                <a href="#" class="tr_delay_hover color_light tt_uppercase">
                                    <b>Spray</b>
                                </a>
                                <!--sub menu-->
                                <div class="sub_menu_wrap top_arrow d_xs_none type_2 tr_all_hover clearfix r_corners">
                                    <ul class="sub_menu">

                                        <li>
                                            <a class="color_dark tr_delay_hover" href="portfolio_four_columns.html">For women</a>
                                        </li>
                                        <li>
                                            <a class="color_dark tr_delay_hover" href="portfolio_four_columns.html">For men</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="relative f_xs_none m_xs_bottom_5">
                                <a href="#" class="tr_delay_hover color_light tt_uppercase">
                                    <b>Roll On</b>
                                </a>
                                <!--sub menu-->
                                <div class="sub_menu_wrap top_arrow d_xs_none type_2 tr_all_hover clearfix r_corners">
                                    <ul class="sub_menu">
                                        <li>
                                            <a class="color_dark tr_delay_hover" href="portfolio_four_columns.html">For women</a>
                                        </li>
                                        <li>
                                            <a class="color_dark tr_delay_hover" href="portfolio_four_columns.html">For men</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="relative f_xs_none m_xs_bottom_5">
                                <a href="#" class="tr_delay_hover color_light tt_uppercase">
                                    <b>cleaner</b>
                                </a>
                                <!--sub menu-->
                                <div class="sub_menu_wrap top_arrow d_xs_none type_2 tr_all_hover clearfix r_corners">
                                    <ul class="sub_menu">
                                        <li>
                                            <a class="color_dark tr_delay_hover" href="portfolio_four_columns.html">For women</a>
                                        </li>
                                        <li>
                                            <a class="color_dark tr_delay_hover" href="portfolio_four_columns.html">For men</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="relative f_xs_none m_xs_bottom_5">
                                <a href="#" class="tr_delay_hover color_light tt_uppercase">
                                    <b>Pesticides</b>
                                </a>
                                <!--sub menu-->
                                <div class="sub_menu_wrap top_arrow d_xs_none type_2 tr_all_hover clearfix r_corners">
                                    <ul class="sub_menu">
                                        <li>
                                            <a class="color_dark tr_delay_hover" href="portfolio_four_columns.html">For women</a>
                                        </li>
                                        <li>
                                            <a class="color_dark tr_delay_hover" href="portfolio_four_columns.html">For men</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="relative f_xs_none m_xs_bottom_5">
                                <a href="#" class="tr_delay_hover color_light tt_uppercase">
                                    <b>Contact</b>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <button class="f_right search_button tr_all_hover f_xs_none d_xs_none">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
                <!--search form-->
                <div class="searchform_wrap tf_xs_none tr_all_hover">
                    <div class="container vc_child h_inherit relative">
                        <form role="search" class="d_inline_middle full_width">
                            <input type="text" name="search" placeholder="Type text and hit enter" class="f_size_large">
                        </form>
                        <button class="close_search_form tr_all_hover d_xs_none color_dark">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
            </section>
        </header>
        <!--slider-->
        <div class="camera_wrap m_bottom_0">
            <div data-src="images/slide_02.jpg" data-custom-thumb="images/slide_02.jpg">
                <div class="camera_caption_1 fadeFromTop t_align_c d_xs_none">
                    <div class="f_size_large color_light tt_uppercase slider_title_3 m_bottom_5">Meet New Theme</div>
                    <hr class="slider_divider d_inline_b m_bottom_5">
                    <div class="color_light slider_title tt_uppercase t_align_c m_bottom_45 m_sm_bottom_20">
                        <b>Attractive &amp; Elegant
                            <br>HTML Theme</b>
                    </div>
                    <div class="color_light slider_title_2 m_bottom_45">$
                        <b>15.00</b>
                    </div>
                    <a href="#" role="button" class="tr_all_hover button_type_4 bg_scheme_color color_light r_corners tt_uppercase">Buy Now</a>
                </div>
            </div>
            <div data-src="images/slide_01.jpg" data-custom-thumb="images/slide_01.jpg">
                <div class="camera_caption_2 fadeIn t_align_c d_xs_none">
                    <div class="f_size_large tt_uppercase slider_title_3 scheme_color">New arrivals</div>
                    <hr class="slider_divider type_2 m_bottom_5 d_inline_b">
                    <div class="color_light slider_title tt_uppercase t_align_c m_bottom_65 m_sm_bottom_20">
                        <b>
                            <span class="scheme_color">Spring/Summer 2014</span>
                            <br>
                            <span class="color_dark">Ready-To-Wear</span>
                        </b>
                    </div>
                    <a href="#" role="button" class="d_sm_inline_b button_type_4 bg_scheme_color color_light r_corners tt_uppercase tr_all_hover">View Collection</a>
                </div>
            </div>
            <div data-src="images/slide_03.jpg" data-custom-thumb="images/slide_03.jpg">
                <div class="camera_caption_3 fadeFromTop t_align_c d_xs_none">
                    <img src="images/slider_layer_img.png" alt="" class="m_bottom_5">
                    <div class="color_light slider_title tt_uppercase t_align_c m_bottom_60 m_sm_bottom_20">
                        <b class="color_dark">up to 70% off</b>
                    </div>
                    <a href="#" role="button" class="d_sm_inline_b button_type_4 bg_scheme_color color_light r_corners tt_uppercase tr_all_hover">Shop Now</a>
                </div>
            </div>
        </div>
        <!--content-->
        <div class="page_content_offset">
            <div class="container">
                <h2 class="tt_uppercase m_bottom_20 color_dark heading1 animate_ftr">Latest Products</h2>
                <!--filter navigation of products-->
                <ul class="horizontal_list clearfix tt_uppercase isotope_menu f_size_ex_large">
                    <li class="active m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr">
                        <button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter="*">All</button>
                    </li>
                    <li class="m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr">
                        <button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter=".featured">Woman</button>
                    </li>
                    <li class="m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr">
                        <button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter=".new">Man</button>
                    </li>
                    <li class="m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr">
                        <button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter=".specials">Kids</button>
                    </li>
                    <li class="m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr">
                        <button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter=".hit">Spray</button>
                    </li>
                    <li class="m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr">
                        <button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter=".random">Roll on</button>
                    </li>
                    <li class="m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr">
                        <button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter=".rated">Rated</button>
                    </li>
                </ul>
                <!--products-->
                <section class="products_container clearfix m_bottom_25 m_sm_bottom_15">
                    <!--product item-->
                    <div class="product_item">
                        <figure class="r_corners photoframe shadow relative hit animate_ftb long">
                            <!--product preview-->
                            <a href="#" class="d_block relative pp_wrap">
                                <!--hot product-->
                                <span class="hot_stripe">
                                    <img src="images/hot_product.png" alt="">
                                </span>
                                <img src="images/product_img_1.jpg" class="tr_all_hover" alt="">
                                <span data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
                            </a>
                            <!--description and price of product-->
                            <figcaption>
                                <h5 class="m_bottom_10">
                                    <a href="#" class="color_dark">Eget elementum vel</a>
                                </h5>
                                <div class="clearfix">

                                    <!--rating-->
                                    <ul class="horizontal_list f_right clearfix rating_list tr_all_hover">
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                    </ul>
                                </div>
                                <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0">More</button>
                            </figcaption>
                        </figure>
                    </div>
                    <!--product item-->
                    <div class="product_item featured">
                        <figure class="r_corners photoframe shadow relative animate_ftb long">
                            <!--product preview-->
                            <a href="#" class="d_block relative wrapper pp_wrap">
                                <img src="images/product_img_2.jpg" class="tr_all_hover" alt="">
                                <span data-popup="#quick_view_product" class="box_s_none button_type_5 color_light r_corners tr_all_hover d_xs_none">Quick View</span>
                            </a>
                            <!--description and price of product-->
                            <figcaption>
                                <h5 class="m_bottom_10">
                                    <a href="#" class="color_dark">Ut tellus dolor dapibus</a>
                                </h5>
                                <div class="clearfix m_bottom_15">

                                    <!--rating-->
                                    <ul class="horizontal_list f_right clearfix rating_list tr_all_hover">
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="clearfix">
                                    <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light f_left mw_0">More</button>
                                    <button class="button_type_4 bg_light_color_2 tr_all_hover f_right r_corners color_dark mw_0 m_left_5 p_hr_0">
                                        <i class="fa fa-files-o"></i>
                                    </button>

                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <!--product item-->
                    <div class="product_item new">
                        <figure class="r_corners photoframe shadow relative animate_ftb long">
                            <!--product preview-->
                            <a href="#" class="d_block relative wrapper pp_wrap">
                                <img src="images/product_img_3.jpg" class="tr_all_hover" alt="">
                                <span data-popup="#quick_view_product" class="box_s_none button_type_5 color_light r_corners tr_all_hover d_xs_none">Quick View</span>
                            </a>
                            <!--description and price of product-->
                            <figcaption>
                                <h5 class="m_bottom_10">
                                    <a href="#" class="color_dark">Cursus eleifend elit aenean aucto.</a>
                                </h5>
                                <div class="clearfix">

                                    <!--rating-->
                                    <ul class="horizontal_list f_right clearfix rating_list tr_all_hover">
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                    </ul>
                                </div>
                                <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0">More</button>
                            </figcaption>
                        </figure>
                    </div>
                    <!--product item-->
                    <div class="product_item specials">
                        <figure class="r_corners photoframe shadow relative animate_ftb long">
                            <!--product preview-->
                            <a href="#" class="d_block relative pp_wrap">
                                <!--sale product-->
                                <span class="hot_stripe">
                                    <img src="images/sale_product.png" alt="">
                                </span>
                                <img src="images/product_img_4.jpg" class="tr_all_hover" alt="">
                                <span data-popup="#quick_view_product" class="box_s_none button_type_5 color_light r_corners tr_all_hover d_xs_none">Quick View</span>
                            </a>
                            <!--description and price of product-->
                            <figcaption>
                                <h5 class="m_bottom_10">
                                    <a href="#" class="color_dark">Aliquam erat volutpat</a>
                                </h5>
                                <div class="clearfix">

                                    <!--rating-->
                                    <ul class="horizontal_list f_right clearfix rating_list tr_all_hover">
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                    </ul>
                                </div>
                                <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0">More</button>
                            </figcaption>
                        </figure>
                    </div>
                    <!--product item-->
                    <div class="product_item hit">
                        <figure class="r_corners photoframe shadow relative animate_ftb long">
                            <!--product preview-->
                            <a href="#" class="d_block relative pp_wrap">
                                <!--hot product-->
                                <span class="hot_stripe type_2">
                                    <img src="images/hot_product_type_2.png" alt="">
                                </span>
                                <img src="images/product_img_5.jpg" class="tr_all_hover" alt="">
                                <span data-popup="#quick_view_product" class="box_s_none button_type_5 color_light r_corners tr_all_hover d_xs_none">Quick View</span>
                            </a>
                            <!--description and price of product-->
                            <figcaption>
                                <h5 class="m_bottom_10">
                                    <a href="#" class="color_dark">Eget elementum vel</a>
                                </h5>
                                <div class="clearfix">

                                    <!--rating-->
                                    <ul class="horizontal_list f_right clearfix rating_list tr_all_hover">
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                    </ul>
                                </div>
                                <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0">More</button>
                            </figcaption>
                        </figure>
                    </div>
                    <!--product item-->
                    <div class="product_item featured">
                        <figure class="r_corners photoframe shadow relative animate_ftb long">
                            <!--product preview-->
                            <a href="#" class="d_block relative wrapper pp_wrap">
                                <img src="images/product_img_6.jpg" class="tr_all_hover" alt="">
                                <span data-popup="#quick_view_product" class="box_s_none button_type_5 color_light r_corners tr_all_hover d_xs_none">Quick View</span>
                                <span class="clearfix p_buttons d_block tr_all_hover">
                                    <span class="box_s_none button_type_5 tr_delay_hover f_left r_corners color_light p_hr_0">
                                        <i class="fa fa-heart-o"></i>
                                    </span>
                                    <span class="box_s_none button_type_5 tr_delay_hover f_left r_corners color_light m_left_5 p_hr_0">
                                        <i class="fa fa-files-o"></i>
                                    </span>
                                </span>
                            </a>
                            <!--description and price of product-->
                            <figcaption>
                                <h5 class="m_bottom_10">
                                    <a href="#" class="color_dark">Ut tellus dolor dapibus</a>
                                </h5>
                                <div class="clearfix m_bottom_15">

                                    <!--rating-->
                                    <ul class="horizontal_list f_right clearfix rating_list tr_all_hover">
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                    </ul>
                                </div>
                                <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0">More</button>
                            </figcaption>
                        </figure>
                    </div>
                    <!--product item-->
                    <div class="product_item specials">
                        <figure class="r_corners photoframe shadow relative animate_ftb long">
                            <!--product preview-->
                            <a href="#" class="d_block relative wrapper pp_wrap">
                                <img src="images/product_img_7.jpg" class="tr_all_hover" alt="">
                                <span data-popup="#quick_view_product" class="box_s_none button_type_5 color_light r_corners tr_all_hover d_xs_none">Quick View</span>
                            </a>
                            <!--description and price of product-->
                            <figcaption>
                                <h5 class="m_bottom_10">
                                    <a href="#" class="color_dark">Cursus eleifend elit aenean aucto.</a>
                                </h5>
                                <div class="clearfix">

                                    <!--rating-->
                                    <ul class="horizontal_list f_right clearfix rating_list tr_all_hover">
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                    </ul>
                                </div>
                                <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0">More</button>
                            </figcaption>
                        </figure>
                    </div>
                    <!--product item-->
                    <div class="product_item rated">
                        <figure class="r_corners photoframe shadow relative animate_ftb long">
                            <!--product preview-->
                            <a href="#" class="d_block relative pp_wrap">
                                <!--sale product-->
                                <span class="hot_stripe type_2">
                                    <img src="images/sale_product_type_2.png" alt="">
                                </span>
                                <img src="images/product_img_8.jpg" class="tr_all_hover" alt="">
                                <span data-popup="#quick_view_product" class="box_s_none button_type_5 color_light r_corners tr_all_hover d_xs_none">Quick View</span>
                            </a>
                            <!--description and price of product-->
                            <figcaption>
                                <h5 class="m_bottom_10">
                                    <a href="#" class="color_dark">Aliquam erat volutpat</a>
                                </h5>
                                <div class="clearfix">

                                    <!--rating-->
                                    <ul class="horizontal_list f_right clearfix rating_list tr_all_hover">
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li class="active">
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-o empty tr_all_hover"></i>
                                            <i class="fa fa-star active tr_all_hover"></i>
                                        </li>
                                    </ul>
                                </div>
                                <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0">More</button>
                            </figcaption>
                        </figure>
                    </div>
                </section>
                <!--banners-->
                <section class="row clearfix m_bottom_45 m_sm_bottom_35">
                    <div class="col-lg-6 col-md-6 col-sm-6 animate_half_tc">
                        <a href="#" class="d_block banner wrapper r_corners relative m_xs_bottom_30">
                            <img src="images/banner_img_1.png" alt="">
                            <span class="banner_caption d_block vc_child t_align_c w_sm_auto">
                                <span class="d_inline_middle">
                                    <span class="d_block color_dark tt_uppercase m_bottom_5 let_s">New Collection!</span>
                                    <span class="d_block divider_type_2 centered_db m_bottom_5"></span>
                                    <span class="d_block color_light tt_uppercase m_bottom_25 m_xs_bottom_10 banner_title">
                                        <b>Colored Fashion</b>
                                    </span>
                                    <span class="button_type_6 bg_scheme_color tt_uppercase r_corners color_light d_inline_b tr_all_hover box_s_none f_size_ex_large">Shop Now!</span>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 animate_half_tc">
                        <a href="#" class="d_block banner wrapper r_corners type_2 relative">
                            <img src="images/banner_img_2.png" alt="">
                            <span class="banner_caption d_block vc_child t_align_c w_sm_auto">
                                <span class="d_inline_middle">
                                    <span class="d_block scheme_color banner_title type_2 m_bottom_5 m_mxs_bottom_5">
                                        <b>-50%</b>
                                    </span>
                                    <span class="d_block divider_type_2 centered_db m_bottom_5 d_sm_none"></span>
                                    <span class="d_block color_light tt_uppercase m_bottom_15 banner_title_3 m_md_bottom_5 d_mxs_none">On All
                                        <br>
                                        <b>Sunglasses</b>
                                    </span>
                                    <span class="button_type_6 bg_dark_color tt_uppercase r_corners color_light d_inline_b tr_all_hover box_s_none f_size_ex_large">Shop Now!</span>
                                </span>
                            </span>
                        </a>
                    </div>
                </section>
                <!--product brands-->
                <div class="clearfix m_bottom_25 m_sm_bottom_20">
                    <h2 class="tt_uppercase color_dark f_left heading2 animate_fade f_mxs_none m_mxs_bottom_15">Product Brands</h2>
                    <div class="f_right clearfix nav_buttons_wrap animate_fade f_mxs_none">
                        <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left tr_delay_hover r_corners pb_prev">
                            <i class="fa fa-angle-left"></i>
                        </button>
                        <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners pb_next">
                            <i class="fa fa-angle-right"></i>
                        </button>
                    </div>
                </div>
                <!--product brands carousel-->
                <div class="product_brands m_bottom_45 m_sm_bottom_35">
                    <a href="#" class="d_block t_align_c animate_fade">
                        <img src="images/brand_logo.jpg" alt="">
                    </a>
                    <a href="#" class="d_block t_align_c animate_fade">
                        <img src="images/brand_logo_type_2.jpg" alt="">
                    </a>
                    <a href="#" class="d_block t_align_c animate_fade">
                        <img src="images/brand_logo.jpg" alt="">
                    </a>
                    <a href="#" class="d_block t_align_c animate_fade">
                        <img src="images/brand_logo_type_2.jpg" alt="">
                    </a>
                    <a href="#" class="d_block t_align_c animate_fade">
                        <img src="images/brand_logo.jpg" alt="">
                    </a>
                    <a href="#" class="d_block t_align_c animate_fade">
                        <img src="images/brand_logo_type_2.jpg" alt="">
                    </a>
                    <a href="#" class="d_block t_align_c animate_fade">
                        <img src="images/brand_logo_type_2.jpg" alt="">
                    </a>
                    <a href="#" class="d_block t_align_c animate_fade">
                        <img src="images/brand_logo.jpg" alt="">
                    </a>
                    <a href="#" class="d_block t_align_c animate_fade">
                        <img src="images/brand_logo_type_2.jpg" alt="">
                    </a>
                    <a href="#" class="d_block t_align_c animate_fade">
                        <img src="images/brand_logo.jpg" alt="">
                    </a>
                    <a href="#" class="d_block t_align_c animate_fade">
                        <img src="images/brand_logo_type_2.jpg" alt="">
                    </a>
                    <a href="#" class="d_block t_align_c animate_fade">
                        <img src="images/brand_logo.jpg" alt="">
                    </a>
                </div>
                <!--testimonials-->
                <div class="col-lg-12 col-md-12 col-sm-12 ti_animate animate_ftr">
                    <div class="clearfix m_bottom_25 m_sm_bottom_20">
                        <h2 class="tt_uppercase color_dark f_left f_mxs_none m_mxs_bottom_15">What Our Customers Say</h2>
                        <div class="f_right clearfix nav_buttons_wrap f_mxs_none">
                            <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large bg_light_color_1 f_left tr_delay_hover r_corners ti_prev">
                                <i class="fa fa-angle-left"></i>
                            </button>
                            <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners ti_next">
                                <i class="fa fa-angle-right"></i>
                            </button>
                        </div>
                    </div>
                    <!--testimonials carousel-->
                    <div class="testiomials_carousel">
                        <div>
                            <blockquote class="r_corners shadow f_size_large relative m_bottom_15 animate_ftr">Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum
                                vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis.
                            </blockquote>
                            <img class="circle m_left_20 d_inline_middle animate_ftr" src="images/testimonial_img_1.jpg" alt="">
                            <div class="d_inline_middle m_left_15 animate_ftr">
                                <h5 class="color_dark">
                                    <b>Marta Healy</b>
                                </h5>
                                <p>Los Angeles</p>
                            </div>
                        </div>
                        <div>
                            <blockquote class="r_corners shadow f_size_large relative m_bottom_15">Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at,
                                neque.
                            </blockquote>
                            <img class="circle m_left_20 d_inline_middle" src="images/testimonial_img_2.jpg" alt="">
                            <div class="d_inline_middle m_left_15">
                                <h5 class="color_dark">
                                    <b>Alan Smith</b>
                                </h5>
                                <p>New York</p>
                            </div>
                        </div>
                        <div>
                            <blockquote class="r_corners shadow f_size_large relative m_bottom_15">Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                                Curae; Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit agna,endrerit
                                sit amet, tincidunt.</blockquote>
                            <img class="circle m_left_20 d_inline_middle" src="images/testimonial_img_3.jpg" alt="">
                            <div class="d_inline_middle m_left_15">
                                <h5 class="color_dark">
                                    <b>Anna Johnson</b>
                                </h5>
                                <p>Detroid</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--banners-->
            <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <a href="#" class="d_block animate_ftb h_md_auto m_xs_bottom_15 banner_type_2 r_corners red t_align_c tt_uppercase vc_child n_sm_vc_child">
                        <span class="d_inline_middle">
                            <img class="d_inline_middle m_md_bottom_5" src="images/banner_img_3.png" alt="">
                            <span class="d_inline_middle m_left_10 t_align_l d_md_block t_md_align_c">
                                <b>100% Satisfaction</b>
                                <br>
                                <span class="color_dark">Guaranteed</span>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <a href="#" class="d_block animate_ftb h_md_auto m_xs_bottom_15 banner_type_2 r_corners green t_align_c tt_uppercase vc_child n_sm_vc_child">
                        <span class="d_inline_middle">
                            <img class="d_inline_middle m_md_bottom_5" src="images/banner_img_4.png" alt="">
                            <span class="d_inline_middle m_left_10 t_align_l d_md_block t_md_align_c">
                                <b>Free Shipping</b>
                                <br>
                                <span class="color_dark">On All Items</span>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <a href="#" class="d_block animate_ftb h_md_auto banner_type_2 r_corners orange t_align_c tt_uppercase vc_child n_sm_vc_child">
                        <span class="d_inline_middle">
                            <img class="d_inline_middle m_md_bottom_5" src="images/banner_img_5.png" alt="">
                            <span class="d_inline_middle m_left_10 t_align_l d_md_block t_md_align_c">
                                <b>Great Daily Deals</b>
                                <br>
                                <span class="color_dark">Shop Now!</span>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--markup footer-->
    <footer id="footer">
        <div class="footer_top_part">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_30">
                        <h3 class="color_light_2 m_bottom_20">About</h3>
                        <p class="m_bottom_25">{{ $options->where('key', 'about')->first()->value }}</p>
                        <!--social icons-->
                        <ul class="clearfix horizontal_list social_icons">
                            <li class="facebook m_bottom_5 relative">
                                <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Facebook</span>
                                <a href="{{ $options->where('key', 'facebook_link')->first()->value }}" class="r_corners t_align_c tr_delay_hover f_size_ex_large">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="twitter m_left_5 m_bottom_5 relative">
                                <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Twitter</span>
                                <a href="{{ $options->where('key', 'twitter_link')->first()->value }}" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="instagram m_left_5 m_bottom_5 relative">
                                <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Instagram</span>
                                <a href="{{ $options->where('key', 'instagram_link')->first()->value }}" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li class="youtube m_left_5 m_bottom_5 relative">
                                <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Youtube</span>
                                <a href="{{ $options->where('key', 'youtube_link')->first()->value }}" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
                                    <i class="fa fa-youtube-play"></i>
                                </a>
                            </li>
                            <li class="envelope m_left_5 m_bottom_5 relative">
                                <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Contact Us</span>
                                <a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
                                    <i class="fa fa-envelope-o"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <h3 class="color_light_2 m_bottom_20">Newsletter</h3>
                        <p class="f_size_medium m_bottom_15">Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!
                        </p>
                        <form id="newsletter">
                            <input type="email" placeholder="Your email address" class="m_bottom_20 r_corners f_size_medium full_width" name="newsletter-email">
                            <button type="submit" class="button_type_8 r_corners bg_scheme_color color_light tr_all_hover">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--copyright part-->
        <div class="footer_bottom_part">
            <div class="container clearfix t_mxs_align_c">
                <p class="f_left f_mxs_none m_mxs_bottom_10">&copy; {{ \Carbon\Carbon::now()->year }}
                    <span class="color_light">Class Perfume</span>. All Rights Reserved.</p>
                <ul class="f_right horizontal_list clearfix f_mxs_none d_mxs_inline_b">
                    <p class="f_left f_mxs_none m_mxs_bottom_10">Design By
                        <a href="mailto:eng.hala.salah@gmail.com">
                            <span class="color_light">Eng.Hala Salah Eldin</span>
                        </a>
                    </p>
                </ul>
            </div>
        </div>
    </footer>
    </div>
    <!--social widgets-->
    <ul class="social_widgets d_xs_none">
        <!--facebook-->
        <li class="relative">
            <button class="sw_button t_align_c facebook">
                <i class="fa fa-facebook"></i>
            </button>
            <div class="sw_content">
                <h3 class="color_dark m_bottom_20">Join Us on Facebook</h3>
                <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fenvato&amp;width=235&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=438889712801266"
                    style="border:none; overflow:hidden; width:235px; height:258px;"></iframe>
            </div>
        </li>
        <!--twitter feed-->
        <li class="relative">
            <button class="sw_button t_align_c twitter">
                <i class="fa fa-twitter"></i>
            </button>
            <div class="sw_content">
                <h3 class="color_dark m_bottom_20">Latest Tweets</h3>
                <div class="twitterfeed m_bottom_25"></div>
                <a role="button" class="button_type_4 d_inline_b r_corners tr_all_hover color_light tw_color" href="https://twitter.com/fanfbmltemplate">Follow on Twitter</a>
            </div>
        </li>
        <!--contact info-->
        <li class="relative">
            <button class="sw_button t_align_c googlemap">
                <i class="fa fa-map-marker"></i>
            </button>
            <div class="sw_content">
                <h3 class="color_dark m_bottom_20">Store Location</h3>
                <ul class="c_info_list">
                    <li class="m_bottom_10">
                        <div class="clearfix m_bottom_15">
                            <i class="fa fa-map-marker f_left color_dark"></i>
                            <p class="contact_e">{{ $options->where('key', 'address')->first()->value }}</p>
                        </div>
                    </li>
                    <li class="m_bottom_10">
                        <div class="clearfix m_bottom_10">
                            <i class="fa fa-phone f_left color_dark"></i>
                            <p class="contact_e">{{ $options->where('key', 'tel')->first()->value }}</p>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
    <!--login popup-->
    <div class="popup_wrap d_none" id="login_popup">
        <section class="popup r_corners shadow">
            <button class="bg_tr color_dark tr_all_hover text_cs_hover close f_size_large">
                <i class="fa fa-times"></i>
            </button>
            <h3 class="m_bottom_20 color_dark">Log In</h3>
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <ul>
                    <li class="m_bottom_15{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="username" class="m_bottom_5 d_inline_b">Username</label>
                        <br>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" class="r_corners full_width" required autofocus> @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </li>
                    <li class="m_bottom_25{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="m_bottom_5 d_inline_b">Password</label>
                        <br>
                        <input id="password" type="password" name="password" requiredclass="r_corners full_width"> @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </li>
                    <li class="m_bottom_15">
                        <input type="checkbox" class="d_none" id="checkbox_10" name="remember" {{ old( 'remember') ? 'checked' : '' }}>
                        <label for="checkbox_10">Remember me</label>
                    </li>
                    <li class="clearfix m_bottom_30">
                        <button class="button_type_4 tr_all_hover r_corners f_left bg_scheme_color color_light f_mxs_none m_mxs_bottom_15" type="submit">Log In</button>
                    </li>
                </ul>
            </form>
            <footer class="bg_light_color_1 t_mxs_align_c">
                <h3 class="color_dark d_inline_middle d_mxs_block m_mxs_bottom_15">New Customer?</h3>
                <a href="{{ url('/register') }}" role="button" class="tr_all_hover r_corners button_type_4 bg_dark_color bg_cs_hover color_light d_inline_middle m_mxs_left_0">Create an Account</a>
            </footer>
        </section>
    </div>
    <!--custom popup-->
    <div class="popup_wrap d_none" id="quick_view_product">
        <section class="popup r_corners shadow">
            <button class="bg_tr color_dark tr_all_hover text_cs_hover close f_size_large">
                <i class="fa fa-times"></i>
            </button>
            <div class="clearfix">
                <div class="custom_scrollbar">
                    <!--left popup column-->
                    <div class="f_left half_column">
                        <div class="relative d_inline_b m_bottom_10 qv_preview">
                            <span class="hot_stripe">
                                <img src="images/sale_product.png" alt="">
                            </span>
                            <img src="images/quick_view_img_1.jpg" class="tr_all_hover" alt="">
                        </div>
                        <!--carousel-->
                        <div class="relative qv_carousel_wrap m_bottom_20">
                            <button class="button_type_11 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_prev">
                                <i class="fa fa-angle-left "></i>
                            </button>
                            <ul class="qv_carousel d_inline_middle">
                                <li data-src="images/quick_view_img_1.jpg">
                                    <img src="images/quick_view_img_4.jpg" alt="">
                                </li>
                                <li data-src="images/quick_view_img_2.jpg">
                                    <img src="images/quick_view_img_5.jpg" alt="">
                                </li>
                                <li data-src="images/quick_view_img_3.jpg">
                                    <img src="images/quick_view_img_6.jpg" alt="">
                                </li>
                                <li data-src="images/quick_view_img_1.jpg">
                                    <img src="images/quick_view_img_4.jpg" alt="">
                                </li>
                                <li data-src="images/quick_view_img_2.jpg">
                                    <img src="images/quick_view_img_5.jpg" alt="">
                                </li>
                                <li data-src="images/quick_view_img_3.jpg">
                                    <img src="images/quick_view_img_6.jpg" alt="">
                                </li>
                            </ul>
                            <button class="button_type_11 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_next">
                                <i class="fa fa-angle-right "></i>
                            </button>
                        </div>
                        <div class="d_inline_middle">Share this:</div>
                        <div class="d_inline_middle m_left_5">
                            <!-- AddThis Button BEGIN -->
                            <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                                <button class="sw_button t_align_c facebook">
                                    <i class="fa fa-facebook"></i>
                                </button>
                                <button class="sw_button t_align_c twitter">
                                    <i class="fa fa-twitter"></i>
                                </button>
                                <button class="sw_button t_align_c contact">
                                    <i class="fa fa-envelope-o"></i>
                                </button>
                                <a class="addthis_counter addthis_bubble_style"></a>
                            </div>
                            <!-- AddThis Button END -->
                        </div>
                    </div>
                    <!--right popup column-->
                    <div class="f_right half_column">
                        <!--description-->
                        <h2 class="m_bottom_10">
                            <a href="#" class="color_dark fw_medium">Product Name</a>
                        </h2>
                        <div class="m_bottom_10">
                            <!--rating-->
                            <ul class="horizontal_list d_inline_middle type_2 clearfix rating_list tr_all_hover">
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li class="active">
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                    <i class="fa fa-star active tr_all_hover"></i>
                                </li>
                            </ul>
                            <a href="#" class="d_inline_middle default_t_color f_size_small m_left_5">1 Review(s) </a>
                        </div>
                        <hr class="m_bottom_10 divider_type_3">
                        <table class="description_table m_bottom_10">
                            <tr>
                                <td>Product Group:</td>
                                <td>
                                    <a href="#" class="color_dark">Chanel</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Availability:</td>
                                <td>
                                    <span class="color_green">in stock</span> 20 item(s)</td>
                            </tr>
                            <tr>
                                <td>Product Code:</td>
                                <td>PS06</td>
                            </tr>
                        </table>
                        <h5 class="fw_medium m_bottom_10">Product Descraptions</h5>

                        <hr class="divider_type_3 m_bottom_10">
                        <p class="m_bottom_10">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna.
                            Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consecvtetuer
                            adipiscing elit. </p>
                        <hr class="divider_type_3 m_bottom_15">

                        <table class="description_table type_2 m_bottom_15">
                            <tr>
                                <td class="v_align_m">Size:</td>
                                <td class="v_align_m">
                                    <div class="custom_select f_size_medium relative d_inline_middle">
                                        <div class="select_title r_corners relative color_dark">20 m</div>
                                        <ul class="select_list d_none"></ul>
                                        <select name="product_name">
                                            <option value="s">20 m</option>
                                            <option value="m">50 m</option>
                                            <option value="l">100 m</option>
                                        </select>
                                    </div>
                                </td>
                            </tr>

                        </table>
                        <div class="clearfix m_bottom_15">

                            <button class="button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0">
                                <i class="fa fa-heart-o f_size_big"></i>
                                <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Wishlist</span>
                            </button>

                            <button class="button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0 relative">
                                <i class="fa fa-question-circle f_size_big"></i>
                                <span class="tooltip tr_all_hover r_corners color_dark f_size_small">Ask a Question</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <button class="t_align_c r_corners tr_all_hover animate_ftl" id="go_to_top">
        <i class="fa fa-angle-up"></i>
    </button>
    <!--scripts include-->
    <script src="js/jquery-2.1.0.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/retina.js"></script>
    <script src="js/camera.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.tweet.min.js"></script>
    <script src="js/jquery.custom-scrollbar.js"></script>
    <script src="js/scripts.js"></script>
    <script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5306f8f674bfda4c"></script>
</body>

</html>