<!-- Name Field -->
<div class="row">
    <div class="form-group">
        {!! Form::label('name', Lang::get('products/show_fields.name'), ['class' => 'col-sm-4 col-lg-2 control-label']) !!}
        <div class="col-sm-6 col-lg-6">
            <p>{!! $products->name !!}</p>
        </div>
    </div>

</div>

<!-- Price Field -->
<div class="row">
    <div class="form-group">
        {!! Form::label('price', Lang::get('products/show_fields.price'), ['class' => 'col-sm-4 col-lg-2 control-label']) !!}
        <div class="col-sm-6 col-lg-6">
            <p>{!! $products->price !!}</p>
        </div>
    </div>

</div>

<!-- Gender Field -->
<div class="row">
    <div class="form-group">
        {!! Form::label('gender', Lang::get('products/show_fields.gender'), ['class' => 'col-sm-4 col-lg-2 control-label']) !!}
        <div class="col-sm-6 col-lg-6">
            <p>{!! $products->gender !!}</p>
        </div>
    </div>

</div>

<!-- Body Field -->
<div class="row">
    <div class="form-group">
        {!! Form::label('body', Lang::get('products/show_fields.body'), ['class' => 'col-sm-4 col-lg-2 control-label']) !!}
        <div class="col-sm-6 col-lg-6">
            <p>{!! $products->body !!}</p>
        </div>
    </div>

</div>

<!-- Homeimage Field -->
<div class="row">
    <div class="form-group">
        {!! Form::label('homeimage', Lang::get('products/show_fields.homeimage'), ['class' => 'col-sm-4 col-lg-2 control-label']) !!}
        <div class="col-sm-6 col-lg-6">
            <p>{!! $products->homeimage !!}</p>
        </div>
    </div>

</div>

<!-- Image Field -->
<div class="row">
    <div class="form-group">
        {!! Form::label('image', Lang::get('products/show_fields.image'), ['class' => 'col-sm-4 col-lg-2 control-label']) !!}
        <div class="col-sm-6 col-lg-6">
            <p>{!! $products->image !!}</p>
        </div>
    </div>

</div>

