<table class="table table-bordered table-striped dataTable">
    <thead>
    <th>@lang('companies/table.name')</th>
			<th>@lang('companies/table.name_mm')</th>
			<th>@lang('companies/table.description')</th>
			<th>@lang('companies/table.homeimage')</th>
			<th>@lang('companies/table.logo_image')</th>
			<th>@lang('companies/table.body')</th>
    <th width="100px;">@lang('companies/table.action')</th>
    </thead>
    <tbody>
    @foreach($companies as $company)
        <tr>
            <td>{!! $company->name !!}</td>
			<td>{!! $company->name_mm !!}</td>
			<td>{!! $company->description !!}</td>
			<td><img width="150" src="{!! asset('companies/x400/'.$company->homeimage) !!}"></td>
			<td><img width="150" src="{!! asset('companies/x400/'.$company->logo_image) !!}"></td>
			<td>{!! Illuminate\Support\Str::words($company->body, 16,'....') !!}</td>
            <td>
                <a href="{!! route('administration.companies.show', [$company->id]) !!}"><i class="fa fa-eye"></i></a>
                <a href="{!! route('administration.companies.edit', [$company->id]) !!}"><i class="fa fa-pencil"></i></a>
                <a href="{!! route('administration.companies.delete', [$company->id]) !!}" onclick="return confirm('@lang('companies/table.delete_confirm_message')')"><i class="fa fa-trash-o"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
