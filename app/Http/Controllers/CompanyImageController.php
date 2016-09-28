<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateCompanyImageRequest;
use App\Http\Requests\UpdateCompanyImageRequest;
use App\Libraries\Repositories\CompanyImageRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;
use App\Models\CompanyImage;
use App\Models\Company;

class CompanyImageController extends AppBaseController
{

	/** @var  CompanyImageRepository */
	private $companyImageRepository;

	function __construct(CompanyImageRepository $companyImageRepo)
	{
		$this->companyImageRepository = $companyImageRepo;
	}

	/**
	 * Display a listing of the CompanyImage.
	 *
	 * @return Response
	 */
	public function index()
	{
		$companyImages = CompanyImage::with(['company'])->paginate(10);

		return view('companyImages.index')
			->with('companyImages', $companyImages);
	}

	/**
	 * Show the form for creating a new CompanyImage.
	 *
	 * @return Response
	 */
	public function create()
	{
		
		$company=Company::all();
		$companies = [];
		foreach ($company as $key => $value) {
			$companies[$value->id] = $value->name;
		}
		return view('companyImages.create')->with(['companies'=>$companies]);
	}

	/**
	 * Store a newly created CompanyImage in storage.
	 *
	 * @param CreateCompanyImageRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateCompanyImageRequest $request)
	{
		$input = $request->all();

				if($request->file('image')){
			$image = $this->uploadImage($request->file('image'),'/companyImages/');
			$input['image'] = $image['name'];
		}

		$companyImage = $this->companyImageRepository->create($input);

		Flash::success('CompanyImage saved successfully.');

		return redirect(route('administration.companyImages.index'));
	}

	/**
	 * Display the specified CompanyImage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$companyImage = CompanyImage::with(['company'])->where('id', $id)->first();

		if(empty($companyImage))
		{
			Flash::error('CompanyImage not found');

			return redirect(route('administration.companyImages.index'));
		}

		return view('companyImages.show')->with('companyImage', $companyImage);
	}

	/**
	 * Show the form for editing the specified CompanyImage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		
		$company=Company::all();
		$companies = [];
		foreach ($company as $key => $value) {
			$companies[$value->id] = $value->name;
		}

		$companyImage = $this->companyImageRepository->find($id);

		if(empty($companyImage))
		{
			Flash::error('CompanyImage not found');

			return redirect(route('administration.companyImages.index'));
		}

		return view('companyImages.edit')->with(['companies'=>$companies, 'companyImage'=>$companyImage]);
	}

	/**
	 * Update the specified CompanyImage in storage.
	 *
	 * @param  int              $id
	 * @param UpdateCompanyImageRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateCompanyImageRequest $request)
	{
		$companyImage = $this->companyImageRepository->find($id);

		if(empty($companyImage))
		{
			Flash::error('CompanyImage not found');

			return redirect(route('administration.companyImages.index'));
		}

		$input = $request->all();

				if($request->file('image')){
			$image = $this->uploadImage($request->file('image'),'/companyImages/');
			$input['image'] = $image['name'];
					@unlink(public_path('/companyImages/'.$companyImage->image));
		@unlink(public_path('/companyImages/x100/'.$companyImage->image));
		@unlink(public_path('/companyImages/x200/'.$companyImage->image));
		@unlink(public_path('/companyImages/x400/'.$companyImage->image));

		}

		$this->companyImageRepository->updateRich($input, $id);

		Flash::success('CompanyImage updated successfully.');

		return redirect(route('administration.companyImages.index'));
	}

	/**
	 * Remove the specified CompanyImage from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$companyImage = $this->companyImageRepository->find($id);

		if(empty($companyImage))
		{
			Flash::error('CompanyImage not found');

			return redirect(route('administration.companyImages.index'));
		}

				@unlink(public_path('/companyImages/'.$companyImage->image));
		@unlink(public_path('/companyImages/x100/'.$companyImage->image));
		@unlink(public_path('/companyImages/x200/'.$companyImage->image));
		@unlink(public_path('/companyImages/x400/'.$companyImage->image));


		$this->companyImageRepository->delete($id);

		Flash::success('CompanyImage deleted successfully.');

		return redirect(route('administration.companyImages.index'));
	}
}
