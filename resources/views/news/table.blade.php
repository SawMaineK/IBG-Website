<table class="table table-bordered table-striped dataTable">
    <thead>
    <th>@lang('news/table.name')</th>
			<th>@lang('news/table.name_mm')</th>
			<th>@lang('news/table.homeimage')</th>
			<th>@lang('news/table.image')</th>
			<th>@lang('news/table.body')</th>
			<th>@lang('news/table.location')</th>
    <th width="100px;">@lang('news/table.action')</th>
    </thead>
    <tbody>
    @foreach($news as $news)
        <tr>
            <td>{!! $news->name !!}</td>
			<td>{!! $news->name_mm !!}</td>
			<td><img width="150" src="{!! asset('news/x400/'.$news->homeimage) !!}"></td>
			<td><img width="150" src="{!! asset('news/x400/'.$news->image) !!}"></td>
			<td>{!! Illuminate\Support\Str::words($news->body, 16,'....') !!}</td>
			<td>{!! $news->location !!}</td>
            <td>
                <a href="{!! route('administration.news.show', [$news->id]) !!}"><i class="fa fa-eye"></i></a>
                <a href="{!! route('administration.news.edit', [$news->id]) !!}"><i class="fa fa-pencil"></i></a>
                <a href="{!! route('administration.news.delete', [$news->id]) !!}" onclick="return confirm('@lang('news/table.delete_confirm_message')')"><i class="fa fa-trash-o"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
