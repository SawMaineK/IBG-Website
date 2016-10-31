

<li>
	<a href="{{ asset('administration/partners') }}">
		<div class="notifications label label-warning">{!! App\Models\Partner::count() !!}</div>
		<p>@lang('partners/index.model_name')</p>
	</a>
</li>

<li>
	<a href="{{ asset('administration/homesliders') }}">
		<div class="notifications label label-warning">{!! App\Models\Homeslider::count() !!}</div>
		<p>@lang('homesliders/index.model_name')</p>
	</a>
</li>

<li>
	<a href="{{ asset('administration/companies') }}">
		<div class="notifications label label-warning">{!! App\Models\Company::count() !!}</div>
		<p>@lang('companies/index.model_name')</p>
	</a>
</li>

<li>
	<a href="{{ asset('administration/companyImages') }}">
		<div class="notifications label label-warning">{!! App\Models\CompanyImage::count() !!}</div>
		<p>@lang('companyImages/index.model_name')</p>
	</a>
</li>

<li>
	<a href="{{ asset('administration/news') }}">
		<div class="notifications label label-warning">{!! App\Models\News::count() !!}</div>
		<p>@lang('news/index.model_name')</p>
	</a>
</li>


<li>
	<a href="{{ asset('administration/newsImages') }}">
		<div class="notifications label label-warning">{!! App\Models\NewsImage::count() !!}</div>
		<p>@lang('newsImages/index.model_name')</p>
	</a>
</li>



<li>
	<a href="{{ asset('administration/products') }}">
		<div class="notifications label label-warning">{!! App\Models\Products::count() !!}</div>
		<p>@lang('products/index.model_name')</p>
	</a>
</li>


<li>
	<a href="{{ asset('administration/productsImages') }}">
		<div class="notifications label label-warning">{!! App\Models\ProductsImage::count() !!}</div>
		<p>@lang('productsImages/index.model_name')</p>
	</a>
</li>

<li>
	<a href="{{ asset('administration/iBGUsers') }}">
		<div class="notifications label label-warning">{!! App\Models\IBGUsers::count() !!}</div>
		<p>@lang('iBGUsers/index.model_name')</p>
	</a>
</li>