<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatePartnerRequest;
use App\Http\Requests\UpdatePartnerRequest;
use App\Libraries\Repositories\PartnerRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;
use App\Models\Partner;

class PartnerController extends AppBaseController
{

	/** @var  PartnerRepository */
	private $partnerRepository;

	function __construct(PartnerRepository $partnerRepo)
	{
		$this->partnerRepository = $partnerRepo;
	}

	/**
	 * Display a listing of the Partner.
	 *
	 * @return Response
	 */
	public function index()
	{
		$partners = $this->partnerRepository->paginate(10);

		return view('partners.index')
			->with('partners', $partners);
	}

	/**
	 * Show the form for creating a new Partner.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('partners.create');
	}

	/**
	 * Store a newly created Partner in storage.
	 *
	 * @param CreatePartnerRequest $request
	 *
	 * @return Response
	 */
	public function store(CreatePartnerRequest $request)
	{
		$input = $request->all();

				if($request->file('image')){
			$image = $this->uploadImage($request->file('image'),'/partners/');
			$input['image'] = $image['name'];
		}

		$partner = $this->partnerRepository->create($input);

		Flash::success('Partner saved successfully.');

		return redirect(route('administration.partners.index'));
	}

	/**
	 * Display the specified Partner.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$partner = $this->partnerRepository->find($id);

		if(empty($partner))
		{
			Flash::error('Partner not found');

			return redirect(route('administration.partners.index'));
		}

		return view('partners.show')->with('partner', $partner);
	}

	/**
	 * Show the form for editing the specified Partner.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$partner = $this->partnerRepository->find($id);

		if(empty($partner))
		{
			Flash::error('Partner not found');

			return redirect(route('administration.partners.index'));
		}

		return view('partners.edit')->with('partner', $partner);
	}

	/**
	 * Update the specified Partner in storage.
	 *
	 * @param  int              $id
	 * @param UpdatePartnerRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdatePartnerRequest $request)
	{
		$partner = $this->partnerRepository->find($id);

		if(empty($partner))
		{
			Flash::error('Partner not found');

			return redirect(route('administration.partners.index'));
		}

		$input = $request->all();

				if($request->file('image')){
			$image = $this->uploadImage($request->file('image'),'/partners/');
			$input['image'] = $image['name'];
					@unlink(public_path('/partners/'.$partner->image));
		@unlink(public_path('/partners/x100/'.$partner->image));
		@unlink(public_path('/partners/x200/'.$partner->image));
		@unlink(public_path('/partners/x400/'.$partner->image));

		}
		
		$this->partnerRepository->updateRich($input, $id);

		Flash::success('Partner updated successfully.');

		return redirect(route('administration.partners.index'));
	}

	/**
	 * Remove the specified Partner from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$partner = $this->partnerRepository->find($id);

		if(empty($partner))
		{
			Flash::error('Partner not found');

			return redirect(route('administration.partners.index'));
		}

				@unlink(public_path('/partners/'.$partner->image));
		@unlink(public_path('/partners/x100/'.$partner->image));
		@unlink(public_path('/partners/x200/'.$partner->image));
		@unlink(public_path('/partners/x400/'.$partner->image));


		$this->partnerRepository->delete($id);

		Flash::success('Partner deleted successfully.');

		return redirect(route('administration.partners.index'));
	}
}
