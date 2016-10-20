@extends('layouts.admin')

@section('content')
<div class="container">

	<h1>
        @lang('news/edit.edit_model')
    </h1>

    @include('common.errors')

    <div class="widget-container fluid-height clearfix">
        <div class="heading">
            <i class="fa fa-th-list"></i>@lang('news/edit.edit_model')
        </div>
        <div class="clearfix">

		    {!! Form::model($news, ['route' => ['administration.news.update', $news->id], 'enctype'=>'multipart/form-data', 'method' => 'patch', 'class'=>'form-horizontal', 'role'=>'form', 'id'=>'new_form']) !!}

		        @include('news.fields')

		    {!! Form::close() !!}
		    
		</div>
	</div>
</div>
<script type="text/javascript">
    $(function(){
        $("#summernote").summernote({
            height:400,
            fontNames: [
                'Zawgyi-One', 'Sans', 'Helvetica'
            ],
            fontNamesIgnoreCheck: [
                'Zawgyi-One', 'Sans', 'Helvetica'
            ],
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'hr']]
            ]
        });
    });
</script>
@endsection
