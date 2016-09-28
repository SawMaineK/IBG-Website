<table class="table table-bordered table-striped dataTable">
    <thead>
    <th>@lang('products/table.name')</th>
			<th>@lang('products/table.price')</th>
			<th>@lang('products/table.gender')</th>
			<th>@lang('products/table.body')</th>
			<th>@lang('products/table.homeimage')</th>
			<th>@lang('products/table.image')</th>
    <th width="100px;">@lang('products/table.action')</th>
    </thead>
    <tbody>
    @foreach($products as $products)
        <tr>
            <td>{!! $products->name !!}</td>
			<td>{!! $products->price !!}</td>
			<td>{!! $products->gender !!}</td>
			<td>{!! Illuminate\Support\Str::words($products->body, 16,'....') !!}</td>
			<td><img width="150" src="{!! asset('products/x400/'.$products->homeimage) !!}"></td>
			<td><img width="150" src="{!! asset('products/x400/'.$products->image) !!}"></td>
            <td>
                <a href="{!! route('administration.products.show', [$products->id]) !!}"><i class="fa fa-eye"></i></a>
                <a href="{!! route('administration.products.edit', [$products->id]) !!}"><i class="fa fa-pencil"></i></a>
                <a href="{!! route('administration.products.delete', [$products->id]) !!}" onclick="return confirm('@lang('products/table.delete_confirm_message')')"><i class="fa fa-trash-o"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
