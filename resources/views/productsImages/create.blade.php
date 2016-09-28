@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>
        @lang('productsImages/create.new_model')
    </h1>
    @include('common.errors')
    <div class="widget-container fluid-height clearfix">
        <div class="heading">
            <i class="fa fa-th-list"></i>@lang('productsImages/create.new_model')
        </div>
        <div class="clearfix">
		    {!! Form::open(['route' => 'administration.productsImages.store', 'enctype'=>'multipart/form-data', 'class'=>'form-horizontal', 'role'=>'form']) !!}

		        @include('productsImages.fields')

		    {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

