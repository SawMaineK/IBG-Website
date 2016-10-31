<table class="table table-bordered table-striped dataTable">
    <thead>
    <th>@lang('iBGUsers/table.name')</th>
			<th>@lang('iBGUsers/table.email')</th>
			<th hidden>@lang('iBGUsers/table.password')</th>
			<th>@lang('iBGUsers/table.isAdmin')</th>
    <th width="100px;">@lang('iBGUsers/table.action')</th>
    </thead>
    <tbody>
    @foreach($iBGUsers as $iBGUsers)
        <tr>
            <td>{!! $iBGUsers->name !!}</td>
			<td>{!! $iBGUsers->email !!}</td>
			<td hidden>{!! $iBGUsers->password !!}</td>
			<td>{!! $iBGUsers->isAdmin !!}</td>
            <td>
                <a href="{!! route('administration.iBGUsers.show', [$iBGUsers->id]) !!}"><i class="fa fa-eye"></i></a>
                <a href="{!! route('administration.iBGUsers.edit', [$iBGUsers->id]) !!}"><i class="fa fa-pencil"></i></a>
                <a href="{!! route('administration.iBGUsers.delete', [$iBGUsers->id]) !!}" onclick="return confirm('@lang('iBGUsers/table.delete_confirm_message')')"><i class="fa fa-trash-o"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
