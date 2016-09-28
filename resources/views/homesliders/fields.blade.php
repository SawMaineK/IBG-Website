<!-- Name Field -->
<div class="row">
	<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
	    {!! Form::label('name', Lang::get('homesliders/fields.name'),['class' => 'col-sm-4 col-lg-2 control-label']) !!}
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
	    {!! Form::label('name_mm', Lang::get('homesliders/fields.name_mm'),['class' => 'col-sm-4 col-lg-2 control-label']) !!}
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

<!-- Image Field -->
<div class="row">
	<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
	    {!! Form::label('image', Lang::get('homesliders/fields.image'),['class' => 'col-sm-4 col-lg-2 control-label']) !!}
	    <div class="col-sm-6 col-lg-6"> 
	        <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-new img-thumbnail" style="width: 200px; height: 150px;">
                	@if(isset($homeslider))
	                	<img src="{{asset('homesliders/x400/'.$homeslider->image)}}">
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

<!-- Link Field -->
<div class="row">
	<div class="form-group{{ $errors->has('link') ? ' has-error' : '' }}">
	    {!! Form::label('link', Lang::get('homesliders/fields.link'),['class' => 'col-sm-4 col-lg-2 control-label']) !!}
	    <div class="col-sm-6 col-lg-6"> 
	        
			{!! Form::text('link', null, ['class' => 'form-control']) !!}
	        @if ($errors->has('link'))
	            <span class="help-block">
	                <strong>{{ $errors->first('link') }}</strong>
	            </span>
	        @endif
	    </div>
	</div>

</div>


<!-- Submit Field -->
<div class="row">
	<div class="form-group">
		<div class="col-sm-6 col-sm-offset-4 col-md-offset-4 col-lg-offset-2">
		    {!! Form::submit(Lang::get('homesliders/fields.save'), ['class' => 'btn btn-primary']) !!}
		    <a class="btn btn-default-outline" href="{!! route('administration.homesliders.index') !!}">@lang('homesliders/fields.cancel')</a>
	    </div>
	</div>
</div>
