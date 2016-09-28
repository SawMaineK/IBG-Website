<!-- Name Field -->
<div class="row">
    <div class="form-group">
        {!! Form::label('name', Lang::get('news/show_fields.name'), ['class' => 'col-sm-4 col-lg-2 control-label']) !!}
        <div class="col-sm-6 col-lg-6">
            <p>{!! $news->name !!}</p>
        </div>
    </div>

</div>

<!-- Homeimage Field -->
<div class="row">
    <div class="form-group">
        {!! Form::label('homeimage', Lang::get('news/show_fields.homeimage'), ['class' => 'col-sm-4 col-lg-2 control-label']) !!}
        <div class="col-sm-6 col-lg-6">
            <p>{!! $news->homeimage !!}</p>
        </div>
    </div>

</div>

<!-- Image Field -->
<div class="row">
    <div class="form-group">
        {!! Form::label('image', Lang::get('news/show_fields.image'), ['class' => 'col-sm-4 col-lg-2 control-label']) !!}
        <div class="col-sm-6 col-lg-6">
            <p>{!! $news->image !!}</p>
        </div>
    </div>

</div>

<!-- Body Field -->
<div class="row">
    <div class="form-group">
        {!! Form::label('body', Lang::get('news/show_fields.body'), ['class' => 'col-sm-4 col-lg-2 control-label']) !!}
        <div class="col-sm-6 col-lg-6">
            <p>{!! $news->body !!}</p>
        </div>
    </div>

</div>

