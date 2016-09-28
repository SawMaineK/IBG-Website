@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>
        @lang('newsImages/create.new_model')
    </h1>
    @include('common.errors')
    <div class="widget-container fluid-height clearfix">
        <div class="heading">
            <i class="fa fa-th-list"></i>@lang('newsImages/create.new_model')
        </div>
        <div class="clearfix">
		    {!! Form::open(['route' => 'administration.newsImages.store', 'enctype'=>'multipart/form-data', 'class'=>'form-horizontal', 'role'=>'form']) !!}

		        @include('newsImages.fields')

		    {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

