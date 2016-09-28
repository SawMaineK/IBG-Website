<!-- Name Field -->
<div class="row">
	<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
	    {!! Form::label('name', Lang::get('companies/fields.name'),['class' => 'col-sm-4 col-lg-2 control-label']) !!}
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

<!-- Name Mm Field -->
<div class="row">
	<div class="form-group{{ $errors->has('name_mm') ? ' has-error' : '' }}">
	    {!! Form::label('name_mm', Lang::get('companies/fields.name_mm'),['class' => 'col-sm-4 col-lg-2 control-label']) !!}
	    <div class="col-sm-6 col-lg-6"> 
	        
			{!! Form::text('name_mm', null, ['class' => 'form-control']) !!}
	        @if ($errors->has('name_mm'))
	            <span class="help-block">
	                <strong>{{ $errors->first('name_mm') }}</strong>
	            </span>
	        @endif
	    </div>
	</div>

</div>

<!-- Description Field -->
<div class="row">
	<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
	    {!! Form::label('description', Lang::get('companies/fields.description'),['class' => 'col-sm-4 col-lg-2 control-label']) !!}
	    <div class="col-sm-6 col-lg-6"> 
	        
			{!! Form::text('description', null, ['class' => 'form-control']) !!}
	        @if ($errors->has('description'))
	            <span class="help-block">
	                <strong>{{ $errors->first('description') }}</strong>
	            </span>
	        @endif
	    </div>
	</div>

</div>

<!-- Homeimage Field -->
<div class="row">
	<div class="form-group{{ $errors->has('homeimage') ? ' has-error' : '' }}">
	    {!! Form::label('homeimage', Lang::get('companies/fields.homeimage'),['class' => 'col-sm-4 col-lg-2 control-label']) !!}
	    <div class="col-sm-6 col-lg-6"> 
	        <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-new img-thumbnail" style="width: 200px; height: 150px;">
                	@if(isset($company))
	                	<img src="{{asset('companies/x400/'.$company->homeimage)}}">
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

<!-- Logo Image Field -->
<div class="row">
	<div class="form-group{{ $errors->has('logo_image') ? ' has-error' : '' }}">
	    {!! Form::label('logo_image', Lang::get('companies/fields.logo_image'),['class' => 'col-sm-4 col-lg-2 control-label']) !!}
	    <div class="col-sm-6 col-lg-6"> 
	        <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-new img-thumbnail" style="width: 200px; height: 150px;">
                	@if(isset($company))
	                	<img src="{{asset('companies/x400/'.$company->logo_image)}}">
	                @else
	                	<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image">
	                @endif
                </div>
                <div class="fileupload-preview fileupload-exists img-thumbnail" style="width: 200px; max-height: 150px"></div>
                <div>
                  	<span class="btn btn-default btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span>
			{!! Form::file('logo_image') !!}</span><a class="btn btn-default fileupload-exists" data-dismiss="fileupload" href="#">Remove</a>
                </div>
            </div>
	        @if ($errors->has('logo_image'))
	            <span class="help-block">
	                <strong>{{ $errors->first('logo_image') }}</strong>
	            </span>
	        @endif
	    </div>
	</div>

</div>

<!-- Body Field -->
<div class="row">
	<div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
	    {!! Form::label('body', Lang::get('companies/fields.body'),['class' => 'col-sm-4 col-lg-2 control-label']) !!}
		<div class="col-sm-8 col-lg-10">
			<input type="hidden" name="body" value="{{@$company->body}}" id="body" />
			{!! Form::textarea('body_field', @$company->body, ['class' => 'form-control', 'id'=>'summernote']) !!}
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
		    {!! Form::submit(Lang::get('companies/fields.save'), ['class' => 'btn btn-primary']) !!}
		    <a class="btn btn-default-outline" href="{!! route('administration.companies.index') !!}">@lang('companies/fields.cancel')</a>
	    </div>
	</div>
</div>



<script type="text/javascript">

	$("#company_form").submit(function(e) {
		var self = this;
		e.preventDefault();
		var bodies = $('#summernote').code();
		$("#body").val(bodies); //populate text area
		self.submit();
		return false;
	});


</script>