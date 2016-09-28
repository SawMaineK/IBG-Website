<!-- Name Field -->
<div class="row">
    <div class="form-group">
        {!! Form::label('name', Lang::get('partners/show_fields.name'), ['class' => 'col-sm-4 col-lg-2 control-label']) !!}
        <div class="col-sm-6 col-lg-6">
            <p>{!! $partner->name !!}</p>
        </div>
    </div>

</div>

<!-- Name Mm Field -->
<div class="row">
    <div class="form-group">
        {!! Form::label('name_mm', Lang::get('partners/show_fields.name_mm'), ['class' => 'col-sm-4 col-lg-2 control-label']) !!}
        <div class="col-sm-6 col-lg-6">
            <p>{!! $partner->name_mm !!}</p>
        </div>
    </div>

</div>

<!-- Image Field -->
<div class="row">
    <div class="form-group">
        {!! Form::label('image', Lang::get('partners/show_fields.image'), ['class' => 'col-sm-4 col-lg-2 control-label']) !!}
        <div class="col-sm-6 col-lg-6">
            <p>{!! $partner->image !!}</p>
        </div>
    </div>

</div>

<!-- Link Field -->
<div class="row">
    <div class="form-group">
        {!! Form::label('link', Lang::get('partners/show_fields.link'), ['class' => 'col-sm-4 col-lg-2 control-label']) !!}
        <div class="col-sm-6 col-lg-6">
            <p>{!! $partner->link !!}</p>
        </div>
    </div>

</div>

