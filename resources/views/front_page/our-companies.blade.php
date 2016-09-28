@extends('layouts.master')

@section('title')
    @parent
    Our Companies
    @stop

    {{-- page level styles --}}
    @section('header_styles')
            <!--page level css starts-->
    <style></style>
    <!--end of page level css-->
    @stop

        <!-- .header -->

    @section('header_page')
         <div class="header_page basic background_image" style="background-image:url(img/default_header.jpg);background-repeat: no-repeat; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; color:#2f383d; ">
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
                    <h1 class="title">Our Companies</h1>
                    <div class="breadcrumbss">

                        <ul class="page_parents pull-right">
                            <li class="breadcrumbs_c"><i class="moon-home-3"></i>&nbsp;&nbsp;&nbsp;You are here</li>
                            <li class="breadcrumbs_c"><a class="breadcrumbs_c" href="/">Home</a>
                            </li>

                            <li class="breadcrumbs_c"><a class="breadcrumbs_c" href="#">Our Companies</a>
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
            <div class="container">

                <div class="row-fluid">
                    <section id="portfolio-preview-items" class="three-cols span12" data-nr="3">

                        <div class="row filterable isotope" style="position: relative; overflow: hidden; height: 876px;">


                            <!-- Portfolio Normal Mode -->

                            <!-- item -->
                            @foreach($response['our_company'] as $companies)
                                <div class="portfolio-item photography  v2 isotope-item" data-id="1925" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">
                                        <div class="he-wrap tpl2">
                                            <img src="companies/{{$companies->homeimage}}" alt="" class="start_animation">
                                            <div class="overlay he-view">
                                                <div class="bg a0" data-animate="fadeIn">
                                                    <div class="center-bar v1">
                                                        <div class="centered">
                                                            <a href="companies/{{$companies->homeimage}}" class="btn-system a1 lightbox-gallery lightbox" data-animate="fadeInUp">View Large</a>
                                                            <a href="{{route('company-detail', $companies->id)}}" class="btn-system second a2" data-animate="fadeInUp">Read More</a>
                                                        </div>
                                                        <a href="{{route('company-detail', $companies->id)}}" class="title a3 lightbox-gallery lightbox" data-animate="fadeInUp">{{$companies->name}}</a>
                                                        <a href="#" class="categories a4" data-animate="fadeInUp">{{$companies->description}} </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            @endforeach
                            <!-- Portfolio Normal Mode End -->


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