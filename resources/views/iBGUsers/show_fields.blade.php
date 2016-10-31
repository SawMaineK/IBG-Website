<!-- Name Field -->
<div class="row">
    <div class="form-group">
        {!! Form::label('name', Lang::get('iBGUsers/show_fields.name'), ['class' => 'col-sm-4 col-lg-2 control-label']) !!}
        <div class="col-sm-6 col-lg-6">
            <p>{!! $iBGUsers->name !!}</p>
        </div>
    </div>

</div>

<!-- Email Field -->
<div class="row">
    <div class="form-group">
        {!! Form::label('email', Lang::get('iBGUsers/show_fields.email'), ['class' => 'col-sm-4 col-lg-2 control-label']) !!}
        <div class="col-sm-6 col-lg-6">
            <p>{!! $iBGUsers->email !!}</p>
        </div>
    </div>

</div>

<!-- Password Field -->
<div class="row">
    <div class="form-group">
        {!! Form::label('password', Lang::get('iBGUsers/show_fields.password'), ['class' => 'col-sm-4 col-lg-2 control-label']) !!}
        <div class="col-sm-6 col-lg-6">
            <p>{!! $iBGUsers->password !!}</p>
        </div>
    </div>

</div>

<!-- Isadmin Field -->
<div class="row">
    <div class="form-group">
        {!! Form::label('isAdmin', Lang::get('iBGUsers/show_fields.isAdmin'), ['class' => 'col-sm-4 col-lg-2 control-label']) !!}
        <div class="col-sm-6 col-lg-6">
            <p>{!! $iBGUsers->isAdmin !!}</p>
        </div>
    </div>

</div>

