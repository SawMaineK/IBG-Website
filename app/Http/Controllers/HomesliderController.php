<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateHomesliderRequest;
use App\Http\Requests\UpdateHomesliderRequest;
use App\Libraries\Repositories\HomesliderRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;
use App\Models\Homeslider;

class HomesliderController extends AppBaseController
{

	/** @var  HomesliderRepository */
	private $homesliderRepository;

	function __construct(HomesliderRepository $homesliderRepo)
	{
		$this->homesliderRepository = $homesliderRepo;
	}

	/**
	 * Display a listing of the Homeslider.
	 *
	 * @return Response
	 */
	public function index()
	{
		$homesliders = $this->homesliderRepository->paginate(10);

		return view('homesliders.index')
			->with('homesliders', $homesliders);
	}

	/**
	 * Show the form for creating a new Homeslider.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('homesliders.create');
	}

	/**
	 * Store a newly created Homeslider in storage.
	 *
	 * @param CreateHomesliderRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateHomesliderRequest $request)
	{
		$input = $request->all();

				if($request->file('image')){
			$image = $this->uploadImage($request->file('image'),'/homesliders/');
			$input['image'] = $image['name'];
		}

		$homeslider = $this->homesliderRepository->create($input);

		Flash::success('Homeslider saved successfully.');

		return redirect(route('administration.homesliders.index'));
	}

	/**
	 * Display the specified Homeslider.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$homeslider = $this->homesliderRepository->find($id);

		if(empty($homeslider))
		{
			Flash::error('Homeslider not found');

			return redirect(route('administration.homesliders.index'));
		}

		return view('homesliders.show')->with('homeslider', $homeslider);
	}

	/**
	 * Show the form for editing the specified Homeslider.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$homeslider = $this->homesliderRepository->find($id);

		if(empty($homeslider))
		{
			Flash::error('Homeslider not found');

			return redirect(route('administration.homesliders.index'));
		}

		return view('homesliders.edit')->with('homeslider', $homeslider);
	}

	/**
	 * Update the specified Homeslider in storage.
	 *
	 * @param  int              $id
	 * @param UpdateHomesliderRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateHomesliderRequest $request)
	{
		$homeslider = $this->homesliderRepository->find($id);

		if(empty($homeslider))
		{
			Flash::error('Homeslider not found');

			return redirect(route('administration.homesliders.index'));
		}

		$input = $request->all();

				if($request->file('image')){
			$image = $this->uploadImage($request->file('image'),'/homesliders/');
			$input['image'] = $image['name'];
					@unlink(public_path('/homesliders/'.$homeslider->image));
		@unlink(public_path('/homesliders/x100/'.$homeslider->image));
		@unlink(public_path('/homesliders/x200/'.$homeslider->image));
		@unlink(public_path('/homesliders/x400/'.$homeslider->image));

		}
		
		$this->homesliderRepository->updateRich($input, $id);

		Flash::success('Homeslider updated successfully.');

		return redirect(route('administration.homesliders.index'));
	}

	/**
	 * Remove the specified Homeslider from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$homeslider = $this->homesliderRepository->find($id);

		if(empty($homeslider))
		{
			Flash::error('Homeslider not found');

			return redirect(route('administration.homesliders.index'));
		}

				@unlink(public_path('/homesliders/'.$homeslider->image));
		@unlink(public_path('/homesliders/x100/'.$homeslider->image));
		@unlink(public_path('/homesliders/x200/'.$homeslider->image));
		@unlink(public_path('/homesliders/x400/'.$homeslider->image));


		$this->homesliderRepository->delete($id);

		Flash::success('Homeslider deleted successfully.');

		return redirect(route('administration.homesliders.index'));
	}
}
