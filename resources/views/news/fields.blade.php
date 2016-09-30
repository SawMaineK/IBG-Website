<!-- Name Field -->
<div class="row">
	<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
	    {!! Form::label('name', Lang::get('news/fields.name'),['class' => 'col-sm-4 col-lg-2 control-label']) !!}
	    <div class="col-sm-6 col-lg-6"> 
	        
			{!! Form::text('name', null, ['class' => 'form-control']) !!}
	        @if ($errors->has('name'))
	            <span class="help-block">
	                <strong>{{ $errors->first('name') }}</strong>
	            </span>
	        @endif
	    </div>
	</div>

</div>

<!-- Homeimage Field -->
<div class="row">
	<div class="form-group{{ $errors->has('homeimage') ? ' has-error' : '' }}">
	    {!! Form::label('homeimage', Lang::get('news/fields.homeimage'),['class' => 'col-sm-4 col-lg-2 control-label']) !!}
	    <div class="col-sm-6 col-lg-6"> 
	        <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-new img-thumbnail" style="width: 200px; height: 150px;">
                	@if(isset($news))
	                	<img src="{{asset('news/x400/'.$news->homeimage)}}">
	                @else
	                	<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image">
	                @endif
                </div>
                <div class="fileupload-preview fileupload-exists img-thumbnail" style="width: 200px; max-height: 150px"></div>
                <div>
                  	<span class="btn btn-default btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span>
			{!! Form::file('homeimage') !!}</span><a class="btn btn-default fileupload-exists" data-dismiss="fileupload" href="#">Remove</a>
                </div>
            </div>
	        @if ($errors->has('homeimage'))
	            <span class="help-block">
	                <strong>{{ $errors->first('homeimage') }}</strong>
	            </span>
	        @endif
	    </div>
	</div>

</div>

<!-- Image Field -->
<div class="row">
	<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
	    {!! Form::label('image', Lang::get('news/fields.image'),['class' => 'col-sm-4 col-lg-2 control-label']) !!}
	    <div class="col-sm-6 col-lg-6"> 
	        <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-new img-thumbnail" style="width: 200px; height: 150px;">
                	@if(isset($news))
	                	<img src="{{asset('news/x400/'.$news->image)}}">
	                @else
	                	<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image">
	                @endif
                </div>
                <div class="fileupload-preview fileupload-exists img-thumbnail" style="width: 200px; max-height: 150px"></div>
                <div>
                  	<span class="btn btn-default btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span>
			{!! Form::file('image') !!}</span><a class="btn btn-default fileupload-exists" data-dismiss="fileupload" href="#">Remove</a>
                </div>
            </div>
	        @if ($errors->has('image'))
	            <span class="help-block">
	                <strong>{{ $errors->first('image') }}</strong>
	            </span>
	        @endif
	    </div>
	</div>

</div>

<!-- Body Field -->
<div class="row">
	<div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
	    {!! Form::label('body', Lang::get('news/fields.body'),['class' => 'col-sm-4 col-lg-2 control-label']) !!}
	    <div class="col-sm-8 col-lg-10">
			<input type="hidden" name="body" value="{{@$news->body}}" id="body" />
			{!! Form::textarea('body_field', @$news->body, ['class' => 'form-control', 'id'=>'summernote']) !!}
	        @if ($errors->has('body'))
	            <span class="help-block">
	                <strong>{{ $errors->first('body') }}</strong>
	            </span>
	        @endif
	    </div>
	</div>

</div>


<!-- Submit Field -->
<div class="row">
	<div class="form-group">
		<div class="col-sm-6 col-sm-offset-4 col-md-offset-4 col-lg-offset-2">
		    {!! Form::submit(Lang::get('news/fields.save'), ['class' => 'btn btn-primary']) !!}
		    <a class="btn btn-default-outline" href="{!! route('administration.news.index') !!}">@lang('news/fields.cancel')</a>
	    </div>
	</div>
</div>


<script type="text/javascript">

	$("#new_form").submit(function(e) {
		var self = this;
		e.preventDefault();
		var bodies = $('#summernote').code();
		$("#body").val(bodies); //populate text area
		self.submit();
		return false;
	});


</script>