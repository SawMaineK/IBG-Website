@extends('layouts.master')

@section('title')
    @parent
    Contact
    @stop

    {{-- page level styles --}}
    @section('header_styles')
            <!--page level css starts-->
    <style></style>
    <!--end of page level css-->
    @stop

    {{-- content --}}
    @section('content')

        <!-- .header -->
        <section id="content" style="" class="composer_content">








            <div id="fws_5486f9743fcb6" class="wpb_row animate_onoffset  vc_row-fluid  animate_onoffset row-dynamic-el full-width-content section-style    " style="padding-top: 0px !important; padding-bottom: 0px !important; ">
                <div class="col span_12  dark">
                    <div class="vc_col-sm-12 wpb_column column_container" style="" data-animation="" data-delay="0">
                        <div class="wpb_wrapper">
                            <div class="wpb_content_element">
                                <div class="row-fluid row-google-map " style="position:relative; height:450px;">
                                    <div class="overlay" onClick=" style.pointerEvents= &apos; none &apos; "></div>
                                    <iframe class="googlemap " style="height:450px;" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3154.055389998706!2d-122.16522420000003!3d37.7652993999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f8f50366a04d5%3A0x797bb69851540a55!2sNey+Ave%2C+Oakland%2C+CA+94605!5e0!3m2!1ssq!2s!4v1414082013945"></iframe>
                                    <div class="desc"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="fws_5486f974404b9" class="wpb_row animate_onoffset  vc_row-fluid  animate_onoffset row-dynamic-el section-style    " style="padding-top: 60px !important; padding-bottom: 0px !important; ">
                <div class="container  dark">
                    <div class="section_clear">
                        <div class="vc_col-sm-12 wpb_column column_container" style="" data-animation="" data-delay="0">
                            <div class="wpb_wrapper">
                                <div class="wpb_content_element dynamic_page_header style_1">
                                    <h1 style="font-size:36px; font-family:Bebas Neue; color:#009dd1">Contacts</h1>
                                    <div class="line_under">
                                        <div class="line_left"></div>
                                        <div class="line_center"></div>
                                        <div class="line_right"></div>
                                    </div>
                                    <p class="description">We want to hear from you. Whether you have an enquiry, feedback or simply want to talk, there are a number of ways you can reach us.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="fws_5486f97440b3d" class="wpb_row animate_onoffset  vc_row-fluid  animate_onoffset row-dynamic-el standard_section    " style="padding-top: 0px !important; padding-bottom: 0px !important; ">
                <div class="container  dark">
                    <div class="section_clear">
                        <div class="vc_col-sm-8 wpb_column column_container" style="" data-animation="" data-delay="0">
                            <div class="wpb_wrapper">
                                <div class="contact_form wpb_content_element">
                                    <div class="row-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <form name="contactForm" class="standard-form row-fluid" action="#" method="post">
                                                    <input class="span6" name="themeple_name" placeholder="Name" type="text" id="themeple_name" value="" />
                                                    <input class="span6" name="themeple_e-mail" placeholder="E-Mail" type="text" id="themeple_e-mail" value="" />
                                                    <input class="span6" name="themeple_subject" placeholder="Subject" type="text" id="themeple_subject" value="" />
                                                    <textarea class="span12" placeholder="Message" name="themeple_message" cols="40" rows="7" id="themeple_message"></textarea>
                                                    <p class="perspective">
                                                        <input type="submit" value="Send" class="btn-system normal default" />
                                                    </p>
                                                </form>
                                                <div id="ajaxresponse"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="vc_col-sm-4 wpb_column column_container" style="" data-animation="" data-delay="0">
                            <div class="wpb_wrapper">
                                <div class="wpb_content_element contact_info">
                                    <h2>Head Office</h2>
                                    <div class="content">
                                        <p>Bldg No.92-A3, Thiri Street, (2) Quarter,
                                            <br />Hlaing Tsp, Yangon, Union of Myanmar
                                            <br />Email : intelligencebglobal@gmail.com
                                            <br />Telephone:+95 9 431 244 04</p>
                                        <div class="social">
                                            <ul>
                                                <li><a href="#"><i class="icon-linkedin"></i></a>
                                                </li>
                                                <li><a href="#"><i class="icon-twitter"></i></a>
                                                </li>
                                                <li><a href="#"><i class="icon-facebook"></i></a>
                                                </li>
                                            </ul>
                                        </div>
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