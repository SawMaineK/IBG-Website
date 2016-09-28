<table class="table table-bordered table-striped dataTable">
    <thead>
    <th>@lang('productsImages/table.products_id')</th>
			<th>@lang('productsImages/table.image')</th>
    <th width="100px;">@lang('productsImages/table.action')</th>
    </thead>
    <tbody>
    @foreach($productsImages as $productsImage)
        <tr>
            <td>{!! $productsImage['products']['name'] !!}</td>
			<td><img width="150" src="{!! asset('productsImages/x400/'.$productsImage->image) !!}"></td>
            <td>
                <a href="{!! route('administration.productsImages.show', [$productsImage->id]) !!}"><i class="fa fa-eye"></i></a>
                <a href="{!! route('administration.productsImages.edit', [$productsImage->id]) !!}"><i class="fa fa-pencil"></i></a>
                <a href="{!! route('administration.productsImages.delete', [$productsImage->id]) !!}" onclick="return confirm('@lang('productsImages/table.delete_confirm_message')')"><i class="fa fa-trash-o"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
