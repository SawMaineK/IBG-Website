@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>
         @lang('partners/show.model_detail')
    </h1>
    <div class="widget-container fluid-height clearfix">
        <div class="heading">
            <i class="fa fa-th-list"></i>@lang('partners/show.model_detail')
        </div>
        <div class="clearfix">
		    @include('partners.show_fields')
            <br><br>
        </div>
    </div>
</div>
@endsection


