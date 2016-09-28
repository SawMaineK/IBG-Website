<!-- Name Field -->
<div class="row">
	<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
	    {!! Form::label('name', Lang::get('products/fields.name'),['class' => 'col-sm-4 col-lg-2 control-label']) !!}
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

<!-- Price Field -->
<div class="row">
	<div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
	    {!! Form::label('price', Lang::get('products/fields.price'),['class' => 'col-sm-4 col-lg-2 control-label']) !!}
	    <div class="col-sm-6 col-lg-6"> 
	        
			{!! Form::text('price', null, ['class' => 'form-control']) !!}
	        @if ($errors->has('price'))
	            <span class="help-block">
	                <strong>{{ $errors->first('price') }}</strong>
	            </span>
	        @endif
	    </div>
	</div>

</div>

<!-- Gender Field -->
<div class="row">
	<div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
	    {!! Form::label('gender', Lang::get('products/fields.gender'),['class' => 'col-sm-4 col-lg-2 control-label']) !!}
	    <div class="col-sm-6 col-lg-6"> 
	        
			<div class="radio-inline">
						<label>
									{!! Form::radio('gender', 'Male', null) !!} <span>Male</span>
						</label>
			</div>
			<div class="radio-inline">
						<label>
									{!! Form::radio('gender', ' Female', null) !!} <span> Female</span>
						</label>
			</div>
	        @if ($errors->has('gender'))
	            <span class="help-block">
	                <strong>{{ $errors->first('gender') }}</strong>
	            </span>
	        @endif
	    </div>
	</div>

</div>

<!-- Body Field -->
<div class="row">
	<div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
	    {!! Form::label('body', Lang::get('products/fields.body'),['class' => 'col-sm-4 col-lg-2 control-label']) !!}
	    <div class="col-sm-6 col-lg-6"> 
	        
			{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
	        @if ($errors->has('body'))
	            <span class="help-block">
	                <strong>{{ $errors->first('body') }}</strong>
	            </span>
	        @endif
	    </div>
	</div>

</div>

<!-- Homeimage Field -->
<div class="row">
	<div class="form-group{{ $errors->has('homeimage') ? ' has-error' : '' }}">
	    {!! Form::label('homeimage', Lang::get('products/fields.homeimage'),['class' => 'col-sm-4 col-lg-2 control-label']) !!}
	    <div class="col-sm-6 col-lg-6"> 
	        <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-new img-thumbnail" style="width: 200px; height: 150px;">
                	@if(isset($products))
	                	<img src="{{asset('products/x400/'.$products->homeimage)}}">
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
	    {!! Form::label('image', Lang::get('products/fields.image'),['class' => 'col-sm-4 col-lg-2 control-label']) !!}
	    <div class="col-sm-6 col-lg-6"> 
	        <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-new img-thumbnail" style="width: 200px; height: 150px;">
                	@if(isset($products))
	                	<img src="{{asset('products/x400/'.$products->image)}}">
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
		    {!! Form::submit(Lang::get('products/fields.save'), ['class' => 'btn btn-primary']) !!}
		    <a class="btn btn-default-outline" href="{!! route('administration.products.index') !!}">@lang('products/fields.cancel')</a>
	    </div>
	</div>
</div>
