<!-- Name Field -->
<div class="row">
	<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
	    {!! Form::label('name', Lang::get('iBGUsers/fields.name'),['class' => 'col-sm-4 col-lg-2 control-label']) !!}
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

<!-- Email Field -->
<div class="row">
	<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
	    {!! Form::label('email', Lang::get('iBGUsers/fields.email'),['class' => 'col-sm-4 col-lg-2 control-label']) !!}
	    <div class="col-sm-6 col-lg-6"> 
	        
			{!! Form::email('email', null, ['class' => 'form-control']) !!}
	        @if ($errors->has('email'))
	            <span class="help-block">
	                <strong>{{ $errors->first('email') }}</strong>
	            </span>
	        @endif
	    </div>
	</div>

</div>

<!-- Password Field -->
<div class="row">
	<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
	    {!! Form::label('password', Lang::get('iBGUsers/fields.password'),['class' => 'col-sm-4 col-lg-2 control-label']) !!}
	    <div class="col-sm-6 col-lg-6"> 
	        
			{!! Form::password('password', ['class' => 'form-control']) !!}
	        @if ($errors->has('password'))
	            <span class="help-block">
	                <strong>{{ $errors->first('password') }}</strong>
	            </span>
	        @endif
	    </div>
	</div>

</div>

<!-- Isadmin Field -->
<div class="row">
	<div class="form-group{{ $errors->has('isAdmin') ? ' has-error' : '' }}">
	    <div class="col-sm-6 col-lg-6 col-lg-6 col-sm-offset-4 col-md-offset-4 col-lg-offset-2"> 
	        <div class="checkbox">
				<label>{!! Form::checkbox('isAdmin', 1, true) !!}<span>Isadmin</span></label>
			</div>
	        @if ($errors->has('isAdmin'))
	            <span class="help-block">
	                <strong>{{ $errors->first('isAdmin') }}</strong>
	            </span>
	        @endif
	    </div>
	</div>

</div>


<!-- Submit Field -->
<div class="row">
	<div class="form-group">
		<div class="col-sm-6 col-sm-offset-4 col-md-offset-4 col-lg-offset-2">
		    {!! Form::submit(Lang::get('iBGUsers/fields.save'), ['class' => 'btn btn-primary']) !!}
		    <a class="btn btn-default-outline" href="{!! route('administration.iBGUsers.index') !!}">@lang('iBGUsers/fields.cancel')</a>
	    </div>
	</div>
</div>
