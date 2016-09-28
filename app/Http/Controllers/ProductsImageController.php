<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateProductsImageRequest;
use App\Http\Requests\UpdateProductsImageRequest;
use App\Libraries\Repositories\ProductsImageRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;
use App\Models\ProductsImage;
use App\Models\Products;

class ProductsImageController extends AppBaseController
{

	/** @var  ProductsImageRepository */
	private $productsImageRepository;

	function __construct(ProductsImageRepository $productsImageRepo)
	{
		$this->productsImageRepository = $productsImageRepo;
	}

	/**
	 * Display a listing of the ProductsImage.
	 *
	 * @return Response
	 */
	public function index()
	{
		$productsImages = ProductsImage::with(['products'])->paginate(10);

		return view('productsImages.index')
			->with('productsImages', $productsImages);
	}

	/**
	 * Show the form for creating a new ProductsImage.
	 *
	 * @return Response
	 */
	public function create()
	{
		
		$productsList=Products::all();
		$products = [];
		foreach ($productsList as $key => $value) {
			$products[$value->id] = $value->name;
		}
		return view('productsImages.create')->with(['products'=>$products]);
	}

	/**
	 * Store a newly created ProductsImage in storage.
	 *
	 * @param CreateProductsImageRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateProductsImageRequest $request)
	{
		$input = $request->all();

				if($request->file('image')){
			$image = $this->uploadImage($request->file('image'),'/productsImages/');
			$input['image'] = $image['name'];
		}

		$productsImage = $this->productsImageRepository->create($input);

		Flash::success('ProductsImage saved successfully.');

		return redirect(route('administration.productsImages.index'));
	}

	/**
	 * Display the specified ProductsImage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$productsImage = ProductsImage::with(['products'])->where('id', $id)->first();

		if(empty($productsImage))
		{
			Flash::error('ProductsImage not found');

			return redirect(route('administration.productsImages.index'));
		}

		return view('productsImages.show')->with('productsImage', $productsImage);
	}

	/**
	 * Show the form for editing the specified ProductsImage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{

		$productsList=Products::all();
		$products = [];
		foreach ($productsList as $key => $value) {
			$products[$value->id] = $value->name;
		}

		$productsImage = $this->productsImageRepository->find($id);

		if(empty($productsImage))
		{
			Flash::error('ProductsImage not found');

			return redirect(route('administration.productsImages.index'));
		}

		return view('productsImages.edit')->with(['products'=>$products, 'productsImage'=>$productsImage]);
	}

	/**
	 * Update the specified ProductsImage in storage.
	 *
	 * @param  int              $id
	 * @param UpdateProductsImageRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateProductsImageRequest $request)
	{
		$productsImage = $this->productsImageRepository->find($id);

		if(empty($productsImage))
		{
			Flash::error('ProductsImage not found');

			return redirect(route('administration.productsImages.index'));
		}

		$input = $request->all();

				if($request->file('image')){
			$image = $this->uploadImage($request->file('image'),'/productsImages/');
			$input['image'] = $image['name'];
					@unlink(public_path('/productsImages/'.$productsImage->image));
		@unlink(public_path('/productsImages/x100/'.$productsImage->image));
		@unlink(public_path('/productsImages/x200/'.$productsImage->image));
		@unlink(public_path('/productsImages/x400/'.$productsImage->image));

		}

		$this->productsImageRepository->updateRich($input, $id);

		Flash::success('ProductsImage updated successfully.');

		return redirect(route('administration.productsImages.index'));
	}

	/**
	 * Remove the specified ProductsImage from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$productsImage = $this->productsImageRepository->find($id);

		if(empty($productsImage))
		{
			Flash::error('ProductsImage not found');

			return redirect(route('administration.productsImages.index'));
		}

				@unlink(public_path('/productsImages/'.$productsImage->image));
		@unlink(public_path('/productsImages/x100/'.$productsImage->image));
		@unlink(public_path('/productsImages/x200/'.$productsImage->image));
		@unlink(public_path('/productsImages/x400/'.$productsImage->image));


		$this->productsImageRepository->delete($id);

		Flash::success('ProductsImage deleted successfully.');

		return redirect(route('administration.productsImages.index'));
	}
}
