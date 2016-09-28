@extends('layouts.master')

@section('title')
    @parent
    News
    @stop

    {{-- page level styles --}}
    @section('header_styles')
            <!--page level css starts-->
    <style></style>
    <!--end of page level css-->
    @stop

        <!-- .header -->
    @section('header_page')
        <div class="header_page basic single" style=" -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">

            <div class="container">

                <h1>{{$response['newdetail']->name}}</h1>
                <div class="breadcrumbss">

                    <ul class="page_parents pull-right">
                        <li class="breadcrumbs_c"><i class="moon-home-3"></i>&nbsp;&nbsp;&nbsp;You are here</li>
                        <li class="breadcrumbs_c"><a class="breadcrumbs_c" href="/">Home</a>
                        </li>
                        <li class="breadcrumbs_c"><a class="breadcrumbs_c" href="{{route('our-news')}}">News</a>
                        </li>
                        <li class="breadcrumbs_c"><a class="breadcrumbs_c" href="{{route('news-detail', $response['newdetail']->id)}}">{{$response['newdetail']->name}}</a>
                        </li>

                    </ul>
                </div>

            </div>

        </div>
    @stop

{{-- content --}}
    @section('content')
        <section id="content" class="composer_content">


            <div class="container" id="blog">
                <br/><br/><br/>
                <div class="row">

                    <div class="span9">

                        <div class="posts_here">

                            <article id="post-1847" class="post-1847 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized tag-portfolio tag-showcase v1 normal">

                                <div id="fws_5486f93a31205" class="wpb_row animate_onoffset  vc_row-fluid  animate_onoffset row-dynamic-el standard_section    " style="padding-top: 0px !important; padding-bottom: 0px !important; ">
                                    <div class="container  dark">
                                        <div class="section_clear">
                                            <div class="vc_col-sm-12 wpb_column column_container" style="" data-animation="" data-delay="0">
                                                <div class="wpb_wrapper">
                                                    <div class="dynamic_slideshow wpb_content_element">
                                                        <div class="with_thumbnails_container">
                                                            <div class="slideshow_container flexslider with_thumbnails slide_layout_fixed" id="contentflex">
                                                                <ul class="slides slide_image_thumbnails">
                                                                    @foreach($response['newdetail']->newsimages as $newsimage)
                                                                        <li class=' slide_element slide1 frame1'>
                                                                            <img src='../newsImages/{{$newsimage->image}}' title='{{$response['newdetail']->name}}' alt='' />
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                            <div class="slideshow_container flexslider with_thumbnails_carousel slide_layout_fixed" id="carouselflex">
                                                                <ul class="slides slide_image_thumbnails">
                                                                    @foreach($response['newdetail']->newsimages as $newsimage)
                                                                    <li class=' slide_element slide1 frame1'>
                                                                        <img src='../newsImages/{{$newsimage->image}}' title='{{$response['newdetail']->name}}' alt='' />
                                                                    </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="content post_format_standart">

                                    <ul class="shares">

                                        <li class="google_plus"><a href="https://plus.google.com/share?url=http://newthemes.themeple.co/solveto/?p=1847" target="_blank"><i class="moon-google_plus"></i></a>
                                        </li>



                                        <li class="linkedin"><a href="http://linkedin.com/shareArticle?mini=true&amp;url=http://newthemes.themeple.co/solveto/?p=1847&amp;title=Share and promote Solveto Wp" target="_blank"><i class="moon-linkedin"></i></a>
                                        </li>



                                        <li class="twitter"><a href="http://twitter.com/home?status=Share and promote Solveto Wp http://newthemes.themeple.co/solveto/?p=1847" target="_blank"><i class="moon-twitter"></i></a>
                                        </li>



                                        <li class="facebook"><a href="http://www.facebook.com/sharer.php?u=http://newthemes.themeple.co/solveto/?p=1847" target="_blank"><i class="moon-facebook"></i></a>
                                        </li>


                                    </ul>

                                    <h1><a href="{{route('news-detail', $response['newdetail']->id)}}">{{$response['newdetail']->name}}</a></h1>

                                    <div class="blog-content">
                                        <p>{{$response['newdetail']->body}}</p>
                                    </div>


                                </div>
                            </article>










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
                                            <img width="61" height="61" src="../news/{{$news->image}}" class="attachment-61x61 wp-post-image" alt="9232183203_fe2c32594b_h">                                      </dt>

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