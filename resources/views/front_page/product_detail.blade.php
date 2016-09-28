@extends('layouts.master')

@section('title')
    @parent
    Product Detail
    @stop

    {{-- page level styles --}}
    @section('header_styles')
            <!--page level css starts-->
    <style></style>
    <!--end of page level css-->
    @stop





                <!-- .header -->
            @section('header_page')
                <div class="header_page basic background_image" style="background-image:url({{asset('images/2014/11/default_header.jpg')}});background-repeat: no-repeat; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; color:#2f383d; ">
                    <div class="container">







                        <style>
                            .breadcrumbs_c {
                                color: #fff;
                                font-size: 13px;
                            }
                            h1.title {
                                color: #fff !important;
                                font-size: 50px
                            }
                        </style>
                            <h1 class="title">{{$response['productsimage']->name}}</h1>

                        <div class="breadcrumbss">
                            <ul class="page_parents pull-right">
                                <li class="breadcrumbs_c"><i class="moon-home-3"></i>&nbsp;&nbsp;&nbsp;You are here</li>
                                <li class="breadcrumbs_c"><a class="breadcrumbs_c" href="/">Home</a>
                                </li>
                                <li class="breadcrumbs_c"><a class="breadcrumbs_c" href="{{route('products-detail', $response['productsimage']->id)}}">{{$response['productsimage']->name}}</a>
                                </li>

                            </ul>
                        </div>

                    </div>

                </div>
            @stop
            {{-- content --}}
            @section('content')
                <div class="single single-product postid-221 woocommerce woocommerce-page header_1_body with_featured_img page_header_yes wpb-js-composer js-comp-ver-4.3.4 vc_responsive">
                    <section id="content" class="composer_content">

                        <div class="container " id="woocommerce">

                            <div class="row">



                                <div class="span12">



                                    <div itemscope itemtype="" id="product-221" class="post-221 product type-product status-publish has-post-thumbnail shipping-taxable purchasable product-type-simple product-cat-clothing product-cat-hoodies instock">

                                        <div class="images">

                                            <div class="with_thumbnails_container">
                                                <div class="slideshow_container flexslider with_thumbnails slide_layout_" id="contentflex">
                                                    <ul class="slides slide_image_thumbnails">
                                                        @foreach($response['productsimage']->productsimages as $row)
                                                            <li class=' slide_element slide1 frame1'>
                                                                <img src='../productsImages/{{$row->image}}' title='image1xxl (6)' alt='' Array/>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="slideshow_container flexslider with_thumbnails_carousel slide_layout_" id="carouselflex">
                                                    <ul class="slides slide_image_thumbnails">
                                                        @foreach($response['productsimage']->productsimages as $row)
                                                            <li class=' slide_element slide1 frame1'>
                                                                <img src='../productsImages/{{$row->image}}' title='image1xxl (6)' alt='' Array/>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="summary entry-summary">

                                            <h1 itemprop="name" class="product_title entry-title">{{$response['productsimage']->name}}</h1>
                                            <div class="price_rating">

                                                <div class="price_square">
                                                    <div itemprop="offers" itemscope itemtype="">

                                                        <div class="price"><span class="amount">{{$response['productsimage']->price}} Ks</span>
                                                        </div>

                                                        <meta itemprop="price" content="35" />
                                                        <meta itemprop="priceCurrency" content="GBP" />
                                                        <link itemprop="availability" href="http://schema.org/InStock" />

                                                    </div>
                                                </div>
                                            </div>
                                            <div itemprop="description" class="desc_shop">
                                                <p>{{$response['productsimage']->body}}</p>
                                            </div>

                                        </div>
                                        <!-- .summary -->

                                    </div>
                                    <!-- #product-221 -->




                                </div>




                            </div>

                        </div>


                        {{--partner logo line--}}
                        <div id="fws_5481c35f3fb25" class="wpb_row animate_onoffset  vc_row-fluid  animate_onoffset row-dynamic-el section-style    " style="padding-top: 60px !important; padding-bottom: 20px !important; ">
                            <div class="container  dark">
                                <div class="section_clear">
                                    <div class="vc_col-sm-12 wpb_column column_container" style="" data-animation="" data-delay="0">
                                        <div class="wpb_wrapper">
                                            <div class="divider__ solid_border"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>

                <!-- Footer -->
                </div>
            @stop


{{-- footer scripts --}}
@section('footer_scripts')

@stop