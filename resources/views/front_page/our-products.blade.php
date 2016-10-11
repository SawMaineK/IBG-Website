@extends('layouts.master')

@section('title')
    @parent
    Our Products
    @stop

    {{-- page level styles --}}
    @section('header_styles')
            <!--page level css starts-->
    <style></style>
    <!--end of page level css-->
    @stop





            <!-- .header -->
    @section('header_page')
        <div class="header_page basic background_image" style="background-image:url({{asset('img/default_header.jpg')}});background-repeat: no-repeat; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; color:#2f383d; ">
                <div class="container">







                    <style>
                        .breadcrumbs_c {
                            color: #fff;
                            font-size: 16px;
                        }
                        h1.title {
                            color: #fff !important;
                            font-size: 50px
                        }
                    </style>

                    <h1 class="title">Our Products</h1>
                    <div class="breadcrumbss">

                        <ul class="page_parents pull-right">
                            <li class="breadcrumbs_c"><i class="moon-home-3"></i>&nbsp;&nbsp;&nbsp;You are here</li>
                            <li class="breadcrumbs_c"><a class="breadcrumbs_c" href="/">Home</a>
                            </li>

                            <li class="breadcrumbs_c"><a class="breadcrumbs_c" href="{{route('our-products')}}">Our Products</a>
                            </li>

                        </ul>
                    </div>








                </div>



            </div>
    @stop




    {{-- content --}}
    @section('content')

        <section id="content" class="content_portfolio layout-fullsize items-layout-boxed" style="background:;">
            <br/><br/><br/>
            <h1 class="portfolio_big_title">Our Products</h1>

            {{--divided--}}
            <div id="fws_5481c35f3fb25" class="wpb_row animate_onoffset  vc_row-fluid  animate_onoffset row-dynamic-el section-style    " style="padding-top: 20px !important; padding-bottom: 20px !important; ">
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

            <div class="container">

                <div class="row-fluid">
                    <section id="portfolio-preview-items" class="three-cols span12" data-nr="3">

                        <div class="row filterable isotope" style="position: relative; overflow: hidden; height: 1077px;">


                            <!-- Portfolio Normal Mode -->

                            <!-- item -->

                            @foreach($response['paginateproducts'] as $row)
                                <div class="portfolio-item cool php  v1 isotope-item" data-id="1923" style="position: absolute; left: 0px; top: 0px; transform: translate3d(371px, 0px, 0px);">
                                    <div class="he-wrap tpl2">
                                        <img src="products/{{$row->image}}" alt="" class="start_animation">
                                        <div class="shape3"></div>

                                        <div class="overlay he-view">
                                            <div class="bg a0" data-animate="fadeIn">
                                                <div class="center-bar v1">
                                                    <div class="centered">
                                                        <a href="products/{{$row->image}}" class="btn-system a1 lightbox-gallery lightbox" data-animate="fadeInUp">View Large</a>
                                                        <a href="{{route('products-detail', $row->id)}}" class="btn-system second a2" data-animate="fadeInUp">Read More</a>
                                                    </div>
                                                    <a href="{{route('products-detail', $row->id)}}" class="title a3 lightbox-gallery lightbox" data-animate="fadeInUp">{{$row->name}}</a>
                                                    <a href="#" class="categories a4" data-animate="fadeInUp">{{$row->price}} Ks </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="info">
                                        <h3><a href="{{route('products-detail', $row->id)}}">{{$row->name}}</a></h3>
                                        <span class="categories">{{$row->price}} Ks </span>
                                    </div>
                                </div>

                                @endforeach

                            <!-- Portfolio Normal Mode End -->

                                <div class="p_pagination">

                                    <div class="pagi">
                                        <ul>
                                            <li>{!! $response['paginateproducts']->render() !!}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                        </div>
                    </section>
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
    @stop


{{-- footer scripts --}}
@section('footer_scripts')


@stop