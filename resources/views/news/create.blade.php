@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>
        @lang('news/create.new_model')
    </h1>
    @include('common.errors')
    <div class="widget-container fluid-height clearfix">
        <div class="heading">
            <i class="fa fa-th-list"></i>@lang('news/create.new_model')
        </div>
        <div class="clearfix">
		    {!! Form::open(['route' => 'administration.news.store', 'enctype'=>'multipart/form-data', 'class'=>'form-horizontal', 'role'=>'form', 'id'=>'new_form']) !!}

		        @include('news.fields')

		    {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

