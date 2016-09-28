<table class="table table-bordered table-striped dataTable">
    <thead>
    <th>@lang('newsImages/table.news_id')</th>
			<th>@lang('newsImages/table.image')</th>
    <th width="100px;">@lang('newsImages/table.action')</th>
    </thead>
    <tbody>
    @foreach($newsImages as $newsImage)
        <tr>
            <td>{!! $newsImage['news']['name'] !!}</td>
			<td><img width="150" src="{!! asset('newsImages/x400/'.$newsImage->image) !!}"></td>
            <td>
                <a href="{!! route('administration.newsImages.show', [$newsImage->id]) !!}"><i class="fa fa-eye"></i></a>
                <a href="{!! route('administration.newsImages.edit', [$newsImage->id]) !!}"><i class="fa fa-pencil"></i></a>
                <a href="{!! route('administration.newsImages.delete', [$newsImage->id]) !!}" onclick="return confirm('@lang('newsImages/table.delete_confirm_message')')"><i class="fa fa-trash-o"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
