<!DOCTYPE html>

<html lang="en-US" class="css3transitions">

<head>

    <meta charset="UTF-8" />


    <!-- Title -->

    <title>
        @section('title')
            IBG General Trading |
        @show
    </title>

    <link rel="stylesheet" href="{{asset('plugins/sitepress-multilingual-cms/res/css/language-selector.css?v=3.1.6')}}" type="text/css" media="all" />

    <!-- Responsive Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Pingback URL -->
    <link rel="pingback" href="http://newthemes.themeple.co/solveto/xmlrpc.php" />
    <!-- Favicon
   ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/2014/11/fav_icon.png')}}">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->

    <!--[if lt IE 9]>

    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>


    <![endif]-->



    <link rel='stylesheet' id='flick-css' href='{{asset('plugins/mailchimp/css/flick/flick.css')}}' type='text/css' media='all' />
    <!--[if IE]>
    <link rel='stylesheet' id='mailchimpSF_ie_css-css'  href='http://newthemes.themeple.co/solveto/plugins/mailchimp/css/ie.css?ver=4.0.1' type='text/css' media='all' />
    <![endif]-->
    <link rel='stylesheet' id='rs-plugin-settings-css' href='{{asset('plugins/revslider/rs-plugin/css/settings.css')}}' type='text/css' media='all' />

    <link rel='stylesheet' id='woocommerce-layout-css' href='{{asset('plugins/woocommerce/assets/css/woocommerce-layout.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css' href='{{asset('plugins/woocommerce/assets/css/woocommerce-smallscreen.css')}}' type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css' href='{{asset('plugins/woocommerce/assets/css/woocommerce.css')}}' type='text/css' media='all' />

    <link rel='stylesheet' id='font_extra-css' href='{{asset('css/font.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='style-css' href='{{asset('style.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-responsive-css' href='{{asset('css/bootstrap-responsive.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='jquery.fancybox-css' href='{{asset('fancybox/source/jquery.fancybox.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='hoverex-css' href='{{asset('css/hoverex-all.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='vector-icons-css' href='{{asset('css/vector-icons.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css' href='{{asset('css/font-awesome.min.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='linecon-css' href='{{asset('css/linecon.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='steadysets-css' href='{{asset('css/steadysets.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='jquery.easy-pie-chart-css' href='{{asset('css/jquery.easy-pie-chart.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='idangerous.swiper-css' href='{{asset('css/idangerous.swiper.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='js_composer_front-css' href='{{asset('plugins/js_composer/assets/css/js_composer.css')}}' type='text/css' media='all' />

    <!--[if IE 8]><link rel="stylesheet" type="text/css" href="{{asset('plugins/js_composer/assets/css/vc-ie8.css')}}" media="screen"><![endif]-->

    @yield('header_styles')

   <style>
   </style>
</head>

<!-- End of Header -->

<body class="page header_6_body fixed_slider with_slider_page wpb-js-composer vc_responsive">

<!-- Used for boxed layout -->


<!-- Start Top Navigation -->
<div class="top_nav">

    <div class="container">
        <div class="row-fluid">
            <div class="span6">
                <div class="pull-left">
                    <div id="text-2" class="widget widget_text">
                        <div class="textwidget">Bldg No.92-A3, Thiri Street, (2) Quarter,</div>
                    </div>
                    <div id="text-3" class="widget widget_text">
                        <div class="textwidget">Hlaing Tsp, Yangon, Union of Myanmar</div>
                    </div>
                    <div id="widget_topnav-2" class="widget widget_topnav">
                        <div class="login small_widget">
                            <div class="widget_activation">
                                <a href="#" data-box="login">Welcome @if(Auth::check()){{ Auth::user()->name }}@else Guest @endif</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="span6">
                <div class="pull-right">
                    <div id="text-4" class="widget widget_text">
                        <div class="textwidget">Follow us:</div>
                    </div>
                    <div id="social_widget-3" class="widget social_widget">
                        <div class="row-fluid social_row">
                            <div class="span12">
                                <ul class="footer_social_icons">
                                    <li class="google_plus"><a href="#"><i class="moon-google_plus"></i></a>
                                    </li>
                                    <li class="linkedin"><a href="#"><i class="moon-linkedin"></i></a>
                                    </li>
                                    <li class="pinterest"><a href="#"><i class="moon-pinterest"></i></a>
                                    </li>
                                    <li class="twitter"><a href="#"><i class="moon-twitter"></i></a>
                                    </li>
                                    <li class="facebook"><a href="#"><i class="moon-facebook"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="widget_topnav-3" class="widget widget_topnav">
                        <div style="width: 100px; margin-top: 18px; font-size: 13px">
                            <div>
                                @if(Auth::check())
                                    <a href="{{url('/logout')}}" class="logoutcolor" style="margin-left: 30px;">Logout</a>
                                @else
                                    <a href="{{route('signin')}}" class="logincolor">Login |</a>
                                @endif

                            </div>
                        </div>
                        <div style="margin-top: -20px; margin-left: 54px; font-size: 13px">
                            <div>
                                @if(Auth::check())

                                @else
                                    <a href="{{  route('registers') }}" class="regcolor">Register</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div id="icl_lang_sel_widget-2" class="widget widget_icl_lang_sel_widget">
                        <div id="lang_sel">
                            <ul>
                                <li>
                                    <a href="#" class="lang_sel_sel icl-en">

                                        <img class="iclflag" src="{{asset('plugins/sitepress-multilingual-cms/res/flags/en.png')}}" alt="en" title="English" />&nbsp;English
                                    </a>
                                    <ul>
                                        <li class="icl-it">
                                            <a href="#">

                                                <img class="iclflag" src="{{asset('plugins/sitepress-multilingual-cms/res/flags/mm.png')}}" alt="it" title="Myanmar" />&nbsp; Myanmar</a>
                                        </li>
                                        <li class="icl-es">
                                            <a href="#">

                                                <img class="iclflag" src="{{asset('plugins/sitepress-multilingual-cms/res/flags/en.png')}}" alt="en" title="English" />&nbsp; English</a>
                                        </li>
                                    </ul>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<!-- End of Top Navigation -->



<!-- Page Background used for background images -->
<div id="page-bg"></div>


<!-- Header BEGIN -->

<div class="header_wrapper header_1 no-transparent  ">
    <header id="header" class=" ">



        <div class="container">
            <div class="row-fluid">
                <div class="span12">

                    <!-- Logo -->
                    <div id="logo" class="">
                        <a href='/'>
                            <img src="{{asset('images/2014/09/logo22.png')}}" alt='' />
                            <img src="{{asset('images/2014/09/logo-white.png')}}" alt="" class="light" />
                        </a>
                    </div>
                    <!-- #logo END -->

                    <div class="after_logo">

                    </div>


                    <!-- Show for all header expect header 4 -->

                    <div id="navigation" class="nav_top pull-right">
                        <nav>
                            <ul id="menu-menu-1" class="menu themeple_megemenu sub-menu">

                                <li @if(Request::is('/'))class="hasSubMenu current-menu-ancestor current_page_ancestor"@endif><a href="/">Home</a>
                                </li>

                                <li @if(Request::segment(1) == 'company-detail' || Request::is('our-companies') ) class="hasSubMenu current-menu-ancestor current_page_ancestor" @endif>
                                    <a href="{{route('our-companies')}}">Our Companies</a>
                                    <ul class="sub-menu non_mega_menu">
                                        @foreach($response['our_company'] as $company)
                                            <li @if(Request::segment(2)== $company->id)class="current-menu-item current-page-item"@endif>
                                                <a href="{{ route('company-detail', $company->id) }}">{{$company->name}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>

                                <li @if(Request::is('our-products') || Request::is('men-products') || Request::is('women-products'))class="hasSubMenu current-menu-ancestor current_page_ancestor"@endif><a href="{{route('our-products')}}">Our Products</a>
                                    <ul class="sub-menu non_mega_menu">
                                        <li @if(Request::is('men-products'))class="current-menu-item current-page-item"@endif>
                                            <a href="{{route('men-products')}}">For Men</a>
                                        </li>
                                        <li @if(Request::is('women-products'))class="current-menu-item current-page-item"@endif>
                                            <a href="{{route('women-products')}}">For Women</a>
                                        </li>
                                    </ul>
                                </li>


                                <li @if(Request::is('about-us')|| Request::is('our-company') || Request::is('vision-&-mission'))class="hasSubMenu current-menu-ancestor current_page_ancestor"@endif><a href="{{route('about-us')}}">About Us</a>
                                    <ul class="sub-menu non_mega_menu">
                                        <li @if(Request::is('our-company'))class="current-menu-item current-page-item"@endif><a href="{{route('our-company')}}">Our Company</a>
                                        </li>
                                        <li @if(Request::is('vision-&-mission'))class="current-menu-item current-page-item"@endif><a href="{{route('vision-&-mission')}}">Vision & Mission</a>
                                        </li>
                                    </ul>
                                </li>

                                <li @if(Request::is('our-package') || Request::is('dubai-package'))class="hasSubMenu current-menu-ancestor current_page_ancestor"@endif><a href="{{route('our-news')}}">Our Tour Packages</a>
                                    <ul class="sub-menu non_mega_menu">
                                        <li @if(Request::is('dubai-package'))class="current-menu-item current-page-item"@endif><a href="{{route('dubai-package')}}">Dubai</a>
                                        </li>
                                    </ul>
                                </li>

                                <li @if(Request::is('contact'))class="hasSubMenu current-menu-ancestor current_page_ancestor"@endif><a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>

                    <!-- #navigation -->


                    <!-- End custom menu here -->
                    <a href="#" class="mobile_small_menu open"></a>
                </div>
            </div>



        </div>



    </header>
    <div class="header_bar">
        <div class="container">
            <div class="row-fluid">
                <div class="span12">
                    <h3 class="pull-left">Bldg No.92-A3, Thiri Street, (2) Quarter, Hlaing Tsp, Yangon, Union of Myanmar</h3>
                    <ul class="pull-right socials">

                        <li><a href="#"><i class="moon-google_plus"></i></a>
                        </li>
                        <li><a href="#"><i class="moon-linkedin"></i></a>
                        </li>
                        <li><a href="#"><i class="moon-pinterest"></i></a>
                        </li>
                        <li><a href="#"><i class="moon-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="moon-facebook"></i></a>
                        </li>
                    </ul>
                    <h3 style="float:right">Follow Us on</h3>
                </div>
            </div>
        </div>
    </div>


    <div class="header_shadow"><span class=""></span>
    </div>
    <!-- Responsive Menu -->
    <div class="menu-small">

        <ul class="menu">
            <li class="hasSubMenu current-menu-ancestor current_page_ancestor"><a href="/">Home</a>

                <ul class="sub-menu non_mega_menu">

                    <li class=" current-menu-item current_page_item"><a href="/">Home</a>
                    </li>
                </ul>
            </li>

            <li class="hasSubMenu"><a href="{{route('our-companies')}}">Our Companies</a>


                <ul class="sub-menu non_mega_menu">
                    @foreach($response['our_company'] as $company)
                        <li><a href="{{ route('company-detail', $company->id) }}">{{$company->name}}</a>
                        </li>
                    @endforeach
                </ul>
            </li>

            <li class="hasSubMenu"><a href="{{route('our-products')}}">Our Products</a>
                <ul class="sub-menu non_mega_menu">
                    <li><a href="{{route('men-products')}}">For Men</a>
                    </li>
                    <li><a href="{{route('women-products')}}">For Women</a>
                    </li>
                </ul>
            </li>

            <li class="hasSubMenu"><a href="{{route('about-us')}}">About Us</a>

                <ul class="sub-menu non_mega_menu">
                    <li><a href="{{route('our-company')}}">Our Company</a>
                    </li>
                    <li><a href="{{route('vision-&-mission')}}">Vision & Mission</a>
                    </li>
                </ul>
            </li>

            <li class="hasSubMenu"><a href="{{route('our-news')}}">Our Tour Packages</a>
            </li>

            <li class="hasSubMenu"><a href="{{route('contact')}}">Contact</a></li>
        </ul>
    </div>
    <!-- End Responsive Menu -->
</div>

<div class="top_wrapper   no-transparent">

    <!-- .header -->

    <!-- Page Head -->

    @yield('header_page')

    @yield('content')

    {{--Partner Data Retrieve--}}

    <div id="fws_5481c35f5e7af" class="wpb_row animate_onoffset  vc_row-fluid  animate_onoffset row-dynamic-el section-style" style="padding-top: 40px !important; padding-bottom: 0px !important; ">
        <div class="container  dark">
            <div class="section_clear">
                <div class="vc_col-sm-12 wpb_column column_container" style="" data-animation="" data-delay="0">
                    <div class="wpb_wrapper">
                        <div class="dark_clients clients_el yes">
                            <section class="row clients clients_caro">
                                @if(isset($response['partners']))
                                    @foreach($response['partners'] as $partners)
                                        <div class="item">
                                            <a href="../{{$partners->link}}" class="tooltip_text" title="{{$partners->name}}">
                                                <img src="../partners/x100/{{$partners->image}}" alt="{{$partners->name}}">
                                            </a>
                                        </div>
                                    @endforeach
                                @endif
                            </section>
                            <div class="controls">
                                <a class="prev"></a>
                                <a class="next"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="#" class="scrollup">Scroll</a>
    <!-- Social Profiles -->


    <!-- Footer -->

</div>

<div class="footer_wrapper">

    <div class="footer_social_bar" style="background: #FFFFFF">
        <div class="container">
            <div class="row-fluid">
                <div class="span12">
                    <div class="top_footer">
                        <div class="container">
                            <ul class='tweet_list' id='tweet_footer'>
                                <li class="tweet" hidden>
                                    <h5><img alt="twitter" src=""> <a href="" class="twitter-link"></a></h5>
                                </li>
                                <li class="tweet" hidden>
                                    <h5><img alt="twitter" src="">  <a href="" class="twitter-link"></a></h5>
                                </li>
                            </ul>
                            <div class="pagination pull-right">
                                <a href="#" class="back" style="display: block"><i class="moon-arrow-left"></i></a>
                                <a href="#" class="next" style="display: block"><i class="moon-arrow-right-2"></i></a>
                            </div>
                            <span class="shadow_top_footer"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer id="footer" class="type_">


        <div class="inner">
            <div class="container">
                <div class="row-fluid ff">

                    <!-- widget -->
                    <div class="span3">

                        <div id="text-5" class="widget widget_text">
                            <h4 class="widget-title">L o c a t i o n</h4>
                            <div class="thin_line"></div>
                            <div class="textwidget">Bldg No.92-A3, Thiri Street, (2) Quarter,
                                Hlaing Tsp, Yangon, Union of Myanmar</div>
                            <div class="textwidget" style="margin-top: 15px">Email: intelligencebglobal@gmail.com</div>
                            <div class="textwidget" style="margin-top: 15px">Phone: +95 9 431 244 04</div>
                        </div>

                    </div>




                    <div class="span3">

                        <div id="recent-posts-4" class="widget widget_recent_entries">
                            <h4 class="widget-title">O u r &nbsp; C o m p a n i e s</h4>
                            <div class="thin_line"></div>
                            <ul>
                                @if(isset($response['our_company']))
                                    @foreach($response['our_company'] as $row)
                                        <li>
                                            <a href="{{route('company-detail', $row->id)}}">{{$row->name}}</a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>


                    <div class="span3">

                        <div id="tag_cloud-2" class="widget widget_tag_cloud">
                            <h4 class="widget-title">S i g n &nbsp; U p &nbsp; f o r &nbsp; N e w s l e t t e r</h4>
                            <div class="thin_line"></div>
                            <div id="mailchimpsf_widget-2" class="widget widget_mailchimpsf_widget">


                                <div id="mc_signup">
                                    <form id="mc_signup_form" method="post" enctype="multipart/form-data" action="{{route('newsletter')}}">
                                        <?php echo csrf_field(); ?>

                                        <div class="mc_form_inside">

                                            <div class="mc_merge_var">
                                                <label for="email" class="mc_var_label mc_header mc_header_email">Email Address</label>
                                                <input type="text" size="18" placeholder="Type your email address" name="email" id="email" class="mc_input" required/>
                                                @if ($errors->has('email'))
                                                    <span class="help-block error_message">
                                                          <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <!-- /mc_merge_var -->
                                            <div class="">
                                                <input type="submit" name="mc_signup_submit" id="mc_signup_submit" value="Subscribe" class="button" />
                                            </div>
                                            <!-- /mc_signup_submit -->


                                            <br/>
                                            <div id="mc_display_rewards">
                                                powered by <a href="#">IBG General Trading</a>!
                                            </div>
                                            <!-- /mc_display_rewards -->

                                        </div>
                                        <!-- /mc_form_inside -->
                                    </form>
                                    <!-- /mc_signup_form -->
                                </div>
                                <!-- /mc_signup_container -->
                            </div>
                        </div>
                    </div>


                    <div class="span3">

                        <div id="widget_flickr-2" class="widget widget_flickr">
                            <h4 class="widget-title">F o l l o w &nbsp; U s</h4>
                            <div class="thin_line"></div>
                            <div class="col-sm-12">
                                <div class="col-sm-3">
                                    <ul>
                                        <li class="facebook col-sm-1"><a href="#" title="Facebook">
                                                <i class="moon-facebook" style="font-size: 20px;"></i></a>
                                        </li>
                                        <li style="margin-right: 50px"></li>
                                    </ul>
                                </div>
                                <div class="col-sm-3">
                                    <ul>
                                        <li class="google_plus"><a href="#" title="Google Plus">
                                                <i class="moon-google_plus" style="font-size: 20px;"></i></a>
                                        </li>
                                        <li style="margin-right: 50px"></li>
                                    </ul>
                                </div>
                                <div class="col-sm-3">
                                    <ul>
                                        <li class="twitter"><a href="#" title="twitter">
                                                <i class="moon-twitter" style="font-size: 20px;"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </div>

        <div id="copyright">
            <div class="container">
                <div class="row-fluid">
                    <div class="span12 desc">Copyright &copy; 2016 by INTELLIGENCE BUSINESS GLOBAL COMPANY LIMITED - Designed by 528Go Technology</div>

                </div>
            </div>
        </div>
        <!-- #copyright -->

    </footer>
    <!-- #footer -->
</div>

<script type='text/javascript' src='{{asset('js/jquery/jquery.js')}}'></script>
<script type='text/javascript' src='{{asset('js/jquery/jquery-migrate.min.js')}}'></script>
<script type='text/javascript' src='{{asset('plugins/mailchimp/js/scrollTo.js')}}'></script>
<script type='text/javascript' src='{{asset('js/jquery/jquery.form.min.js')}}'></script>
<script type='text/javascript' src='{{asset('js/jquery/ui/jquery.ui.core.min.js')}}'></script>
<script type='text/javascript' src='{{asset('plugins/mailchimp/js/datepicker.js')}}'></script>
<script type='text/javascript' src='{{asset('plugins/revslider/rs-plugin/js/jquery.themepunch.tools.min.js')}}'></script>
<script type='text/javascript' src='{{asset('plugins/revslider/rs-plugin/js/jquery.themepunch.revolution.min.js')}}'></script>
<script type='text/javascript' src='{{asset('js/jquery.easy-pie-chart.js')}}'></script>
<script type='text/javascript' src='{{asset('js/jquery.appear.js')}}'></script>
<script type='text/javascript' src='{{asset('js/modernizr.custom.66803.js')}}'></script>
<script type='text/javascript' src='{{asset('js/odometer.min.js')}}'></script>
<script type='text/javascript' src='{{asset('js/animations.js')}}'></script>
<script type='text/javascript' src='{{asset('plugins/woocommerce/assets/js/frontend/add-to-cart.min.js')}}'></script>
<script type='text/javascript' src='{{asset('plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js')}}'></script>

<script type='text/javascript' src='{{asset('plugins/woocommerce/assets/js/frontend/woocommerce.min.js')}}'></script>
<script type='text/javascript' src='{{asset('plugins/woocommerce/assets/js/jquery-cookie/jquery.cookie.min.js')}}'></script>

<script type='text/javascript' src='{{asset('plugins/woocommerce/assets/js/frontend/cart-fragments.min.js')}}'></script>
<script type='text/javascript' src='{{asset('js/bootstrap.min.js')}}'></script>

<script type='text/javascript' src='{{asset('js/jquery.easing.1.3.js')}}'></script>
<script type='text/javascript' src='{{asset('js/jquery.mobilemenu.js')}}'></script>
<script type='text/javascript' src='{{asset('js/isotope.js')}}'></script>
<script type='text/javascript' src='{{asset('js/layout-mode.js')}}'></script>
<script type='text/javascript' src='{{asset('js/masonry.pkgd.min.js')}}'></script>
<script type='text/javascript' src='{{asset('js/jquery.cycle.all.js')}}'></script>
<script type='text/javascript' src='{{asset('js/customSelect.jquery.min.js')}}'></script>
<script type='text/javascript' src='{{asset('js/jquery.flexslider-min.js')}}'></script>
<script type='text/javascript' src='{{asset('fancybox/source/jquery.fancybox.js')}}'></script>
<script type='text/javascript' src='{{asset('fancybox/source/helpers/jquery.fancybox-media.js')}}'></script>
<script type='text/javascript' src='{{asset('js/jquery.carouFredSel-6.1.0-packed.js')}}'></script>
<script type='text/javascript' src='{{asset('js/tooltip.js')}}'></script>
<script type='text/javascript' src='{{asset('js/jquery.hoverex.js')}}'></script>
<script type='text/javascript' src='{{asset('js/imagesloaded.pkgd.min.js')}}'></script>
<script type='text/javascript' src='{{asset('js/jquery.parallax.js')}}'></script>
<script type='text/javascript' src='{{asset('js/jquery.cookie.js')}}'></script>
<script type='text/javascript' src='{{asset('js/main.js')}}'></script>
<script type='text/javascript' src='{{asset('js/jquery.placeholder.min.js')}}'></script>
<script type='text/javascript' src='{{asset('js/jquery.livequery.js')}}'></script>
<script type='text/javascript' src='{{asset('js/jquery.countdown.min.js')}}'></script>
<script type='text/javascript' src='{{asset('js/waypoints.min.js')}}'></script>
<script type='text/javascript' src='{{asset('js/background-check.min.js')}}'></script>
<script type='text/javascript' src='{{asset('js/idangerous.swiper.min.js')}}'></script>
<script type='text/javascript' src='{{asset('js/jquery.infinitescroll.js')}}'></script>


<script type='text/javascript' src='{{asset('js/jquery/ui/jquery.ui.widget.min.js')}}'></script>
<script type='text/javascript' src='{{asset('js/jquery/ui/jquery.ui.accordion.min.js')}}'></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('ul li ul li a').click(function(){
            $('li a').removeClass("active");
            $(this).addClass("active");
        });
    });
</script>

@yield('footer_scripts')



</body>

</html>