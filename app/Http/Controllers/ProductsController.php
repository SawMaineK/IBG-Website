<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Libraries\Repositories\ProductsRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;
use App\Models\Products;

class ProductsController extends AppBaseController
{

	/** @var  ProductsRepository */
	private $productsRepository;

	function __construct(ProductsRepository $productsRepo)
	{
		$this->productsRepository = $productsRepo;
	}

	/**
	 * Display a listing of the Products.
	 *
	 * @return Response
	 */
	public function index()
	{
		$products = $this->productsRepository->paginate(10);

		return view('products.index')
			->with('products', $products);
	}

	/**
	 * Show the form for creating a new Products.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('products.create');
	}

	/**
	 * Store a newly created Products in storage.
	 *
	 * @param CreateProductsRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateProductsRequest $request)
	{
		$input = $request->all();

				if($request->file('homeimage')){
			$image = $this->uploadImage($request->file('homeimage'),'/products/');
			$input['homeimage'] = $image['name'];
		}
		if($request->file('image')){
			$image = $this->uploadImage($request->file('image'),'/products/');
			$input['image'] = $image['name'];
		}

		$products = $this->productsRepository->create($input);

		Flash::success('Products saved successfully.');

		return redirect(route('administration.products.index'));
	}

	/**
	 * Display the specified Products.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$products = $this->productsRepository->find($id);

		if(empty($products))
		{
			Flash::error('Products not found');

			return redirect(route('administration.products.index'));
		}

		return view('products.show')->with('products', $products);
	}

	/**
	 * Show the form for editing the specified Products.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$products = $this->productsRepository->find($id);

		if(empty($products))
		{
			Flash::error('Products not found');

			return redirect(route('administration.products.index'));
		}

		return view('products.edit')->with('products', $products);
	}

	/**
	 * Update the specified Products in storage.
	 *
	 * @param  int              $id
	 * @param UpdateProductsRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateProductsRequest $request)
	{
		$products = $this->productsRepository->find($id);

		if(empty($products))
		{
			Flash::error('Products not found');

			return redirect(route('administration.products.index'));
		}

		$input = $request->all();

				if($request->file('homeimage')){
			$image = $this->uploadImage($request->file('homeimage'),'/products/');
			$input['homeimage'] = $image['name'];
					@unlink(public_path('/products/'.$products->homeimage));
		@unlink(public_path('/products/x100/'.$products->homeimage));
		@unlink(public_path('/products/x200/'.$products->homeimage));
		@unlink(public_path('/products/x400/'.$products->homeimage));

		@unlink(public_path('/products/'.$products->image));
		@unlink(public_path('/products/x100/'.$products->image));
		@unlink(public_path('/products/x200/'.$products->image));
		@unlink(public_path('/products/x400/'.$products->image));

		}
		if($request->file('image')){
			$image = $this->uploadImage($request->file('image'),'/products/');
			$input['image'] = $image['name'];
					@unlink(public_path('/products/'.$products->homeimage));
		@unlink(public_path('/products/x100/'.$products->homeimage));
		@unlink(public_path('/products/x200/'.$products->homeimage));
		@unlink(public_path('/products/x400/'.$products->homeimage));

		@unlink(public_path('/products/'.$products->image));
		@unlink(public_path('/products/x100/'.$products->image));
		@unlink(public_path('/products/x200/'.$products->image));
		@unlink(public_path('/products/x400/'.$products->image));

		}
		
		$this->productsRepository->updateRich($input, $id);

		Flash::success('Products updated successfully.');

		return redirect(route('administration.products.index'));
	}

	/**
	 * Remove the specified Products from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$products = $this->productsRepository->find($id);

		if(empty($products))
		{
			Flash::error('Products not found');

			return redirect(route('administration.products.index'));
		}

				@unlink(public_path('/products/'.$products->homeimage));
		@unlink(public_path('/products/x100/'.$products->homeimage));
		@unlink(public_path('/products/x200/'.$products->homeimage));
		@unlink(public_path('/products/x400/'.$products->homeimage));

		@unlink(public_path('/products/'.$products->image));
		@unlink(public_path('/products/x100/'.$products->image));
		@unlink(public_path('/products/x200/'.$products->image));
		@unlink(public_path('/products/x400/'.$products->image));


		$this->productsRepository->delete($id);

		Flash::success('Products deleted successfully.');

		return redirect(route('administration.products.index'));
	}
}
