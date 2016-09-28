<!-- Company Id Field -->
<div class="row">
    <div class="form-group">
        {!! Form::label('company_id', Lang::get('companyImages/show_fields.company_id'), ['class' => 'col-sm-4 col-lg-2 control-label']) !!}
        <div class="col-sm-6 col-lg-6">
            <p>{!! $companyImage['company']['name'] !!}</p>
        </div>
    </div>

</div>

<!-- Image Field -->
<div class="row">
    <div class="form-group">
        {!! Form::label('image', Lang::get('companyImages/show_fields.image'), ['class' => 'col-sm-4 col-lg-2 control-label']) !!}
        <div class="col-sm-6 col-lg-6">
            <p>{!! $companyImage->image !!}</p>
        </div>
    </div>

</div>

