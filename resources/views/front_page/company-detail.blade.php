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
            <!-- Page Head -->

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
                    <h1 class="title">
                        {{$response['company']->name}}
                    </h1>
                    <div class="breadcrumbss">

                        <ul class="page_parents pull-right">
                            <li class="breadcrumbs_c"><i class="moon-home-3"></i>&nbsp;&nbsp;&nbsp;You are here</li>
                            <li class="breadcrumbs_c"><a class="breadcrumbs_c" href="/">Home</a>
                            </li>
                            <li class="breadcrumbs_c"><a class="breadcrumbs_c" href="{{route('company-detail', $response['company']->id)}}">{{$response['company']->name}}</a>
                            </li>

                        </ul>
                    </div>
                </div>



            </div>
@stop
            {{-- content --}}
@section('content')

    <section id="content" class="composer_content">
        <div class="row-fluid">
            <div class="span12 portfolio_single" data-id="473">
                <div class="container">

                    <div class="row-fluid single_content side_single">

                        <div class="row-fluid" style="margin-top:0px;">

                            <div class="span12 slider_full">

                                <div class="slideshow_container flexslider slide_layout_" id="flex">
                                    <ul class="slides slide_flexslider">
                                        @foreach($response['company']->companiesimage as $companyimage)
                                            <li class="slide_element slide1 frame1 flex-active-slide" style="width: 100%; float: left; margin-right: -100%; position: relative; display: list-item;">
                                                 <img src="../companyImages/{{$companyimage->image}}" title="" alt="">
                                            </li>
                                        @endforeach
                                    </ul>
                                    <ol class="flex-control-nav flex-control-paging">
                                        <li><a class="flex-active">1</a>
                                        </li>
                                        <li><a class="">2</a>
                                        </li>
                                    </ol>
                                    <ul class="flex-direction-nav">
                                        <li><a class="flex-prev" href="#">Previous</a>
                                        </li>
                                        <li><a class="flex-next" href="#">Next</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                            <div class="span12">
                                <br/><br/><br/>
                                <div class="details_side">
                                    <article id="post-1847" class="post-1847 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized tag-portfolio tag-showcase row-fluid blog-article v2 normal" style="background:#ffffff">

                                        <div class="span12">



                                            <div class="span6">



                                                <div class="media">


                                                    <img src="../companies/{{$response['company']->logo_image}}" alt="" style="margin-left: 90px;width: 332px;">


                                                </div>

                                            </div>

                                            <div class="span6">
                                                <div class="content post_format_standart">

                                                    <div class="blog-content">
                                                        <p style="margin-bottom: 10px">{!!$response['company']->body!!}</p>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </article>
                                </div>

                            </div>


                        </div>

                    </div>
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
@stop


{{-- footer scripts --}}
@section('footer_scripts')

@stop