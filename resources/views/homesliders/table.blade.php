<table class="table table-bordered table-striped dataTable">
    <thead>
    <th>@lang('homesliders/table.name')</th>
			<th>@lang('homesliders/table.name_mm')</th>
			<th>@lang('homesliders/table.image')</th>
			<th>@lang('homesliders/table.link')</th>
    <th width="100px;">@lang('homesliders/table.action')</th>
    </thead>
    <tbody>
    @foreach($homesliders as $homeslider)
        <tr>
            <td>{!! $homeslider->name !!}</td>
			<td>{!! $homeslider->name_mm !!}</td>
			<td><img width="150" src="{!! asset('homesliders/x400/'.$homeslider->image) !!}"></td>
			<td>{!! $homeslider->link !!}</td>
            <td>
                <a href="{!! route('administration.homesliders.show', [$homeslider->id]) !!}"><i class="fa fa-eye"></i></a>
                <a href="{!! route('administration.homesliders.edit', [$homeslider->id]) !!}"><i class="fa fa-pencil"></i></a>
                <a href="{!! route('administration.homesliders.delete', [$homeslider->id]) !!}" onclick="return confirm('@lang('homesliders/table.delete_confirm_message')')"><i class="fa fa-trash-o"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
