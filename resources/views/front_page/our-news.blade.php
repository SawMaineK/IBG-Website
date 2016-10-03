@extends('layouts.master')

@section('title')
    @parent
    Our Tour Packages
    @stop

    {{-- page level styles --}}
    @section('header_styles')
            <!--page level css starts-->
    <style></style>
    <!--end of page level css-->
    @stop


        <!-- .header -->
    @section('header_page')
        <div class="header_page basic background_image colored_bg" style="background-image:url();background-repeat: no-repeat;background:#f6f6f6; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; color:#2f383d; ">
            <div class="container">
                <style>
                    .breadcrumbs_c {
                        color: #7c7c7c;
                        font-size: 13px;
                    }
                    h1.title {
                        color: #7c7c7c !important;
                        font-size: 40px
                    }
                </style>
                <h1 class="title">Our Tour Packages</h1>
                <div class="breadcrumbss">

                    <ul class="page_parents pull-right">
                        <li class="breadcrumbs_c"><i class="moon-home-3"></i>&nbsp;&nbsp;&nbsp;You are here</li>
                        <li class="breadcrumbs_c"><a class="breadcrumbs_c" href="/">Home</a>
                        </li>

                        <li class="breadcrumbs_c"><a class="breadcrumbs_c" href="{{route('our-news')}}">Our Tour Packages</a>
                        </li>

                    </ul>
                </div>
            </div>

        </div>
    @stop

        {{-- content --}}
    @section('content')

        <section id="content" class="masonry" style="background:#ffffff">
            <br/> <br/> <br/>
            <div class="container" id="blog">
                <div class="row">

                    <div class="span9">

                        @foreach($response['news'] as $row)
                            <article id="post-1847" class="post-1847 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized tag-portfolio tag-showcase row-fluid blog-article v2 normal">

                            <div class="span12">



                                <div class="span6">



                                    <div class="media">


                                        <img src="news/{{$row->image}}" alt="">


                                    </div>

                                </div>



                                <div class="span6">
                                    <div class="content post_format_standart">

                                        <h1><a href="{{route('news-detail', $row->id)}}">{{$row->name}}</a></h1>

                                        <ul class="info"></ul>

                                        <div class="blog-content">{!! Illuminate\Support\Str::words($row->body, 30,'...') !!}</div>
                                        <a class="pull-right readm" style="margin-top: 30px;"
                                           href="{{route('news-detail', $row->id)}}">Read More
                                            <img class="readm_img" src="{{asset('img/arrow-right.png')}}"></a>
                                    </div>
                                </div>


                            </div>
                        </article>
                        @endforeach

                        <div class="p_pagination">

                            <div class="pull-right">
                                <div class="nav-previous"></div>
                                <div class="nav-next"></div>
                            </div>
                        </div>


                    </div>



                    <aside class="span3 sidebar" id="widgetarea-sidebar">

                        <div id="categories-2" class="widget widget_categories">
                            <h5 class="widget-title">Our Company</h5>
                            <ul>
                                @foreach($response['our_company'] as $companies)
                                    <li class="cat-item cat-item-1"><a href="{{route('company-detail', $companies->id)}}">{{$companies->name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div id="widget_recent_content-2" class="widget widget_recent_content">
                            <h5 class="widget-title">News Content</h5>



                            <div id="popular_widget">

                                @foreach($response['news'] as $news)
                                    <dl>

                                        <dt>
                                            <img width="61" height="61" src="news/{{$news->image}}" class="attachment-61x61 wp-post-image" alt="9232183203_fe2c32594b_h">                                      </dt>

                                        <dd>
                                            <div class="title"><a href="{{route('news-detail', $news->id)}}">{{$news->name}}</a>
                                            </div>

                                            <span>{{ date('F d, Y', strtotime($news->created_at)) }}</span>

                                        </dd>

                                    </dl>
                                @endforeach


                            </div>










                        </div>

                        <div id="meta-2" class="widget widget_meta">
                            <h5 class="widget-title">Meta</h5>
                            <ul>
                                <li><a href="{{ url('/login') }}">Log in</a>
                                </li>
                                <li><a href="{{ url('/register') }}">Register</a>
                                </li>
                            </ul>
                        </div>










                    </aside>





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