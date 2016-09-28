<!-- News Id Field -->
<div class="row">
    <div class="form-group">
        {!! Form::label('news_id', Lang::get('newsImages/show_fields.news_id'), ['class' => 'col-sm-4 col-lg-2 control-label']) !!}
        <div class="col-sm-6 col-lg-6">
            <p>{!! $newsImage['news']['name'] !!}</p>
        </div>
    </div>

</div>

<!-- Image Field -->
<div class="row">
    <div class="form-group">
        {!! Form::label('image', Lang::get('newsImages/show_fields.image'), ['class' => 'col-sm-4 col-lg-2 control-label']) !!}
        <div class="col-sm-6 col-lg-6">
            <p>{!! $newsImage->image !!}</p>
        </div>
    </div>

</div>

