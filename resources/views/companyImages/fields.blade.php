<!-- Company Id Field -->
<div class="row">
	<div class="form-group{{ $errors->has('company_id') ? ' has-error' : '' }}">
	    {!! Form::label('company_id', Lang::get('companyImages/fields.company_id'),['class' => 'col-sm-4 col-lg-2 control-label']) !!}
	    <div class="col-sm-6 col-lg-6"> 
	    	{!! Form::select('company_id', $companies, null, ['class' => 'select2able']) !!}
	        @if ($errors->has('company_id'))
	            <span class="help-block">
	                <strong>{{ $errors->first('company_id') }}</strong>
	            </span>
	        @endif
	    </div>
	</div>

</div>

<!-- Image Field -->
<div class="row">
	<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
	    {!! Form::label('image', Lang::get('companyImages/fields.image'),['class' => 'col-sm-4 col-lg-2 control-label']) !!}
	    <div class="col-sm-6 col-lg-6"> 
	        <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-new img-thumbnail" style="width: 200px; height: 150px;">
                	@if(isset($companyImage))
	                	<img src="{{asset('companyImages/x400/'.$companyImage->image)}}">
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


<!-- Submit Field -->
<div class="row">
	<div class="form-group">
		<div class="col-sm-6 col-sm-offset-4 col-md-offset-4 col-lg-offset-2">
		    {!! Form::submit(Lang::get('companyImages/fields.save'), ['class' => 'btn btn-primary']) !!}
		    <a class="btn btn-default-outline" href="{!! route('administration.companyImages.index') !!}">@lang('companyImages/fields.cancel')</a>
	    </div>
	</div>
</div>
