<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Libraries\Repositories\CompanyRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;
use App\Models\Company;

class CompanyController extends AppBaseController
{

	/** @var  CompanyRepository */
	private $companyRepository;

	function __construct(CompanyRepository $companyRepo)
	{
		$this->companyRepository = $companyRepo;
	}

	/**
	 * Display a listing of the Company.
	 *
	 * @return Response
	 */
	public function index()
	{
		$companies = $this->companyRepository->paginate(10);

		return view('companies.index')
			->with('companies', $companies);
	}

	/**
	 * Show the form for creating a new Company.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('companies.create');
	}

	/**
	 * Store a newly created Company in storage.
	 *
	 * @param CreateCompanyRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateCompanyRequest $request)
	{
		$input = $request->all();

				if($request->file('homeimage')){
			$image = $this->uploadImage($request->file('homeimage'),'/companies/');
			$input['homeimage'] = $image['name'];
		}
		if($request->file('logo_image')){
			$image = $this->uploadImage($request->file('logo_image'),'/companies/');
			$input['logo_image'] = $image['name'];
		}

		$company = $this->companyRepository->create($input);

		Flash::success('Company saved successfully.');

		return redirect(route('administration.companies.index'));
	}

	/**
	 * Display the specified Company.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$company = $this->companyRepository->find($id);

		if(empty($company))
		{
			Flash::error('Company not found');

			return redirect(route('administration.companies.index'));
		}

		return view('companies.show')->with('company', $company);
	}

	/**
	 * Show the form for editing the specified Company.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$company = $this->companyRepository->find($id);

		if(empty($company))
		{
			Flash::error('Company not found');

			return redirect(route('administration.companies.index'));
		}

		return view('companies.edit')->with('company', $company);
	}

	/**
	 * Update the specified Company in storage.
	 *
	 * @param  int              $id
	 * @param UpdateCompanyRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateCompanyRequest $request)
	{
		$company = $this->companyRepository->find($id);

		if(empty($company))
		{
			Flash::error('Company not found');

			return redirect(route('administration.companies.index'));
		}

		$input = $request->all();

				if($request->file('homeimage')){
			$image = $this->uploadImage($request->file('homeimage'),'/companies/');
			$input['homeimage'] = $image['name'];
					@unlink(public_path('/companies/'.$company->homeimage));
		@unlink(public_path('/companies/x100/'.$company->homeimage));
		@unlink(public_path('/companies/x200/'.$company->homeimage));
		@unlink(public_path('/companies/x400/'.$company->homeimage));

		@unlink(public_path('/companies/'.$company->logo_image));
		@unlink(public_path('/companies/x100/'.$company->logo_image));
		@unlink(public_path('/companies/x200/'.$company->logo_image));
		@unlink(public_path('/companies/x400/'.$company->logo_image));

		}
		if($request->file('logo_image')){
			$image = $this->uploadImage($request->file('logo_image'),'/companies/');
			$input['logo_image'] = $image['name'];
					@unlink(public_path('/companies/'.$company->homeimage));
		@unlink(public_path('/companies/x100/'.$company->homeimage));
		@unlink(public_path('/companies/x200/'.$company->homeimage));
		@unlink(public_path('/companies/x400/'.$company->homeimage));

		@unlink(public_path('/companies/'.$company->logo_image));
		@unlink(public_path('/companies/x100/'.$company->logo_image));
		@unlink(public_path('/companies/x200/'.$company->logo_image));
		@unlink(public_path('/companies/x400/'.$company->logo_image));

		}
		
		$this->companyRepository->updateRich($input, $id);

		Flash::success('Company updated successfully.');

		return redirect(route('administration.companies.index'));
	}

	/**
	 * Remove the specified Company from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$company = $this->companyRepository->find($id);

		if(empty($company))
		{
			Flash::error('Company not found');

			return redirect(route('administration.companies.index'));
		}

				@unlink(public_path('/companies/'.$company->homeimage));
		@unlink(public_path('/companies/x100/'.$company->homeimage));
		@unlink(public_path('/companies/x200/'.$company->homeimage));
		@unlink(public_path('/companies/x400/'.$company->homeimage));

		@unlink(public_path('/companies/'.$company->logo_image));
		@unlink(public_path('/companies/x100/'.$company->logo_image));
		@unlink(public_path('/companies/x200/'.$company->logo_image));
		@unlink(public_path('/companies/x400/'.$company->logo_image));


		$this->companyRepository->delete($id);

		Flash::success('Company deleted successfully.');

		return redirect(route('administration.companies.index'));
	}
}
