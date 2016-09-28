<!-- Products Id Field -->
<div class="row">
    <div class="form-group">
        {!! Form::label('products_id', Lang::get('productsImages/show_fields.products_id'), ['class' => 'col-sm-4 col-lg-2 control-label']) !!}
        <div class="col-sm-6 col-lg-6">
            <p>{!! $productsImage['products']['name'] !!}</p>
        </div>
    </div>

</div>

<!-- Image Field -->
<div class="row">
    <div class="form-group">
        {!! Form::label('image', Lang::get('productsImages/show_fields.image'), ['class' => 'col-sm-4 col-lg-2 control-label']) !!}
        <div class="col-sm-6 col-lg-6">
            <p>{!! $productsImage->image !!}</p>
        </div>
    </div>

</div>

