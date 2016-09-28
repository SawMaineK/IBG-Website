@extends('layouts.admin')

@section('content')
<div class="container">

	<h1>
        @lang('partners/edit.edit_model')
    </h1>

    @include('common.errors')

    <div class="widget-container fluid-height clearfix">
        <div class="heading">
            <i class="fa fa-th-list"></i>@lang('partners/edit.edit_model')
        </div>
        <div class="clearfix">

		    {!! Form::model($partner, ['route' => ['administration.partners.update', $partner->id], 'enctype'=>'multipart/form-data', 'method' => 'patch', 'class'=>'form-horizontal', 'role'=>'form']) !!}

		        @include('partners.fields')

		    {!! Form::close() !!}
		    
		</div>
	</div>
</div>
@endsection
