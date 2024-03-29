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
                                    <iframe class="googlemap " style="height:450px;" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3817.878906908145!2d96.10332524244055!3d16.881883732411715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c195b18c30ef2f%3A0x4582697d49d24939!2sThiri+St%2C+Yangon!5e0!3m2!1sen!2smm!4v1475142756014"></iframe>
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
                                    <br/>
                                </div>
                                @if ($message = Session::get('message'))
                                    <div class="alert alert-success alert-dismissable margin5">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        {{ $message }}
                                    </div>
                                @endif
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
                                                <form name="contactForm" class="standard-form row-fluid" method="post" enctype="multipart/form-data">
                                                    <?php echo csrf_field(); ?>
                                                    <div class="col-lg-12">
                                                        <input class="span6" name="name" placeholder="Name" type="text" id="name" value="{{ old('name') }}" required/>
                                                        @if ($errors->has('name'))
                                                            <span class="help-block error_message">
                                                                <strong>{{ $errors->first('name') }}</strong>
                                                            </span>
                                                        @endif
                                                        <input class="span6" name="email" placeholder="E-Mail" type="email" id="email" value="" required style="float: right;margin-right: 0%;text-transform: lowercase !important;"/>
                                                        @if ($errors->has('email'))
                                                            <span class="help-block error_message">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>

                                                        <input class="span6" name="subject" placeholder="Subject" type="text" id="subject" value="" required/>
                                                        @if ($errors->has('subject'))
                                                            <span class="help-block error_message">
                                                                    <strong>{{ $errors->first('subject') }}</strong>
                                                                </span>
                                                        @endif

                                                        <textarea class="span12" placeholder="Message" name="message" cols="40" rows="7" id="message" required></textarea>
                                                        @if ($errors->has('message'))
                                                            <span class="help-block error_message">
                                                                <strong>{{ $errors->first('message') }}</strong>
                                                            </span>
                                                        @endif
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
                                    <h2 style="margin-bottom: 18px; text-align: justify">Head Office - Myanmar ( Burma )</h2>
                                    <div class="content">
                                        <p style="line-height: 23px">Bldg No.92-A3, Thiri Street, (2) Quarter, Hlaing Tsp, Yangon, Union of Myanmar
                                            <br /><br /><b>Email</b> : intelligencebglobal@gmail.com
                                            <br /><br /><b>Phone </b>: +95 9 431 244 04
                                            <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                +95 9 784 146 892
                                        </p><br/>
                                        <h2 style="margin-bottom: 18px">Head Office -  U.A.E</h2>
                                        <p style="line-height: 23px; text-align: justify">Flat # 202, 38th Street, Omar Bin Al Khatab Road, Opposite Al Ghurair Center
                                            Dubai, U.A.E
                                            <br /><br /><b>Phone </b>: +971 4 399 48 45
                                            <br /><br /><b>Mobile </b>: +971 56 781 00 39
                                            <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            +971 52 574 43 60
                                        </p>
                                        <div class="social">
                                            <ul>
                                                <li><a href="https://www.linkedin.com/in/myomyo" target="_blank"><i class="icon-linkedin"></i></a>
                                                </li>
                                                <li><a href="https://twitter.com/sophiemyo" target="_blank"><i class="icon-twitter"></i></a>
                                                </li>
                                                <li><a href="https://www.facebook.com/sophiemyo" target="_blank"><i class="icon-facebook"></i></a>
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