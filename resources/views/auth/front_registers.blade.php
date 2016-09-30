@extends('layouts.master')

@section('title')
    @parent
    Register
    @stop

    {{-- page level styles --}}
            <!--page level css starts-->
@section('header_styles')

    <style>
        .themeple_pw{
            width: 48.5% !important;
            height: 50px;
            float: left;
            margin-right: 3%;
            margin-bottom: 23px;
            border-radius: 0;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            background: #f6f6f6;
            border: 1px solid #fff;
            display: block !important;
            color: #444;
            font-size: 13px;
            padding-left: 18px;
            border: 1px solid #e1e1e1;
        }

        .style_login {
            color: #ffffff;
        }
        .style_login:hover {
            color: #000;

        }
    </style>
    <!--end of page level css-->
    @stop


            <!-- .header -->


    <!-- Page Head -->

@section('header_page')
    <div class="header_page basic background_image" style="background-image:url({{asset('images/2014/09/Untitled-2-1024x293.jpg')}});background-repeat: no-repeat; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; color:#2f383d; ">
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
            <h1 class="title">Register</h1>

        </div>

    </div>
@stop


{{-- content --}}
@section('content')

    <section id="content" class="left-navigation" style="background:#fff" ;>

        <br><br/><br/>
        <div class="container" id="page">
            <div class="row">
                <div class="span3">
                </div>
                <!-- cooontent hereee--->


                <div class="span6">
                    <div id="fws_548855f584394" class="wpb_row animate_onoffset  vc_row-fluid  animate_onoffset row-dynamic-el standard_section    " style="padding-top: 0px !important; padding-bottom: 0px !important; ">
                        <div class="container  dark">
                            <div class="section_clear">
                                <div class="vc_col-sm-12 wpb_column column_container" style="" data-animation="" data-delay="0">
                                    <div class="wpb_wrapper">

                                        <div class="login_form">
                                            <div class="row-fluid">
                                                <div class="row-fluid">
                                                    <div class="span12">
                                                        <div class="header " style="">
                                                            <h2>Register </h2>
                                                        </div>
                                                        <form name="loginForm" class="standard-form row-fluid"  action="{{ url('/register') }}" method="POST">
                                                            {!! csrf_field() !!}

                                                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                                    <input type="text" class="themeple_pw" name="name" value="{{ old('name') }}" placeholder="Name" required style="padding: 15px;border-radius: 0px;">
                                                                </div>

                                                                @if ($errors->has('name'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('name') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>

                                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                                    <input type="email" class="themeple_pw" name="email" value="{{ old('email') }}" placeholder="Email" required style="padding: 15px;border-radius: 0px;">
                                                                </div>
                                                                @if ($errors->has('email'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('email') }}</strong>
                                                                    </span>
                                                                @endif

                                                            </div>


                                                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                                    <input type="password" class="themeple_pw" name="password" placeholder="Password" required style="padding: 15px;border-radius: 0px;">
                                                                </div>

                                                                @if ($errors->has('password'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('password') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>

                                                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">

                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-check"></i></span>
                                                                    <input type="password" class="themeple_pw" name="password_confirmation" placeholder="Confirm Password" required style="padding: 15px;border-radius: 0px;">
                                                                </div>

                                                                @if ($errors->has('password_confirmation'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                                    </span>
                                                                @endif

                                                            </div>


                                                            <div class="span6" style="margin-left: 0px;">
                                                                <input type="submit" value="REGISTER" class="btn-system normal default style_login">
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="span3">
                </div>

                <!-- coooooooontent hereeeee-->

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

@stop


{{-- footer scripts --}}
@section('footer_scripts')

@stop