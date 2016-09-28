<table class="table table-bordered table-striped dataTable">
    <thead>
    <th>@lang('partners/table.name')</th>
			<th>@lang('partners/table.name_mm')</th>
			<th>@lang('partners/table.image')</th>
			<th>@lang('partners/table.link')</th>
    <th width="100px;">@lang('partners/table.action')</th>
    </thead>
    <tbody>
    @foreach($partners as $partner)
        <tr>
            <td>{!! $partner->name !!}</td>
			<td>{!! $partner->name_mm !!}</td>
			<td><img width="150" src="{!! asset('partners/x400/'.$partner->image) !!}"></td>
			<td>{!! $partner->link !!}</td>
            <td>
                <a href="{!! route('administration.partners.show', [$partner->id]) !!}"><i class="fa fa-eye"></i></a>
                <a href="{!! route('administration.partners.edit', [$partner->id]) !!}"><i class="fa fa-pencil"></i></a>
                <a href="{!! route('administration.partners.delete', [$partner->id]) !!}" onclick="return confirm('@lang('partners/table.delete_confirm_message')')"><i class="fa fa-trash-o"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
