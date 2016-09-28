<!-- Name Field -->
<div class="row">
    <div class="form-group">
        {!! Form::label('name', Lang::get('companies/show_fields.name'), ['class' => 'col-sm-4 col-lg-2 control-label']) !!}
        <div class="col-sm-6 col-lg-6">
            <p>{!! $company->name !!}</p>
        </div>
    </div>

</div>

<!-- Name Mm Field -->
<div class="row">
    <div class="form-group">
        {!! Form::label('name_mm', Lang::get('companies/show_fields.name_mm'), ['class' => 'col-sm-4 col-lg-2 control-label']) !!}
        <div class="col-sm-6 col-lg-6">
            <p>{!! $company->name_mm !!}</p>
        </div>
    </div>

</div>

<!-- Description Field -->
<div class="row">
    <div class="form-group">
        {!! Form::label('description', Lang::get('companies/show_fields.description'), ['class' => 'col-sm-4 col-lg-2 control-label']) !!}
        <div class="col-sm-6 col-lg-6">
            <p>{!! $company->description !!}</p>
        </div>
    </div>

</div>

<!-- Homeimage Field -->
<div class="row">
    <div class="form-group">
        {!! Form::label('homeimage', Lang::get('companies/show_fields.homeimage'), ['class' => 'col-sm-4 col-lg-2 control-label']) !!}
        <div class="col-sm-6 col-lg-6">
            <p>{!! $company->homeimage !!}</p>
        </div>
    </div>

</div>

<!-- Logo Image Field -->
<div class="row">
    <div class="form-group">
        {!! Form::label('logo_image', Lang::get('companies/show_fields.logo_image'), ['class' => 'col-sm-4 col-lg-2 control-label']) !!}
        <div class="col-sm-6 col-lg-6">
            <p>{!! $company->logo_image !!}</p>
        </div>
    </div>

</div>

<!-- Body Field -->
<div class="row">
    <div class="form-group">
        {!! Form::label('body', Lang::get('companies/show_fields.body'), ['class' => 'col-sm-4 col-lg-2 control-label']) !!}
        <div class="col-sm-6 col-lg-6">
            <p>{!! $company->body !!}</p>
        </div>
    </div>

</div>

