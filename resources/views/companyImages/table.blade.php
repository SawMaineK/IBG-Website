<table class="table table-bordered table-striped dataTable">
    <thead>
    <th>@lang('companyImages/table.company_id')</th>
			<th>@lang('companyImages/table.image')</th>
    <th width="100px;">@lang('companyImages/table.action')</th>
    </thead>
    <tbody>
    @foreach($companyImages as $companyImage)
        <tr>
            <td>{!! $companyImage['company']['name'] !!}</td>
			<td><img width="150" src="{!! asset('companyImages/x400/'.$companyImage->image) !!}"></td>
            <td>
                <a href="{!! route('administration.companyImages.show', [$companyImage->id]) !!}"><i class="fa fa-eye"></i></a>
                <a href="{!! route('administration.companyImages.edit', [$companyImage->id]) !!}"><i class="fa fa-pencil"></i></a>
                <a href="{!! route('administration.companyImages.delete', [$companyImage->id]) !!}" onclick="return confirm('@lang('companyImages/table.delete_confirm_message')')"><i class="fa fa-trash-o"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
