@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>
        @lang('companyImages/create.new_model')
    </h1>
    @include('common.errors')
    <div class="widget-container fluid-height clearfix">
        <div class="heading">
            <i class="fa fa-th-list"></i>@lang('companyImages/create.new_model')
        </div>
        <div class="clearfix">
		    {!! Form::open(['route' => 'administration.companyImages.store', 'enctype'=>'multipart/form-data', 'class'=>'form-horizontal', 'role'=>'form']) !!}

		        @include('companyImages.fields')

		    {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

