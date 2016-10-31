<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateIBGUsersRequest;
use App\Http\Requests\UpdateIBGUsersRequest;
use App\Libraries\Repositories\IBGUsersRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;
use App\Models\IBGUsers;

class IBGUsersController extends AppBaseController
{

	/** @var  IBGUsersRepository */
	private $iBGUsersRepository;

	function __construct(IBGUsersRepository $iBGUsersRepo)
	{
		$this->iBGUsersRepository = $iBGUsersRepo;
	}

	/**
	 * Display a listing of the IBGUsers.
	 *
	 * @return Response
	 */
	public function index()
	{
		$iBGUsers = $this->iBGUsersRepository->paginate(10);

		return view('iBGUsers.index')
			->with('iBGUsers', $iBGUsers);
	}

	/**
	 * Show the form for creating a new IBGUsers.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('iBGUsers.create');
	}

	/**
	 * Store a newly created IBGUsers in storage.
	 *
	 * @param CreateIBGUsersRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateIBGUsersRequest $request)
	{
		$input = $request->all();
		$input['password'] = bcrypt($input['password']);
		

		$iBGUsers = $this->iBGUsersRepository->create($input);

		Flash::success('IBGUsers saved successfully.');

		return redirect(route('administration.iBGUsers.index'));
	}

	/**
	 * Display the specified IBGUsers.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$iBGUsers = $this->iBGUsersRepository->find($id);

		if(empty($iBGUsers))
		{
			Flash::error('IBGUsers not found');

			return redirect(route('administration.iBGUsers.index'));
		}

		return view('iBGUsers.show')->with('iBGUsers', $iBGUsers);
	}

	/**
	 * Show the form for editing the specified IBGUsers.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$iBGUsers = $this->iBGUsersRepository->find($id);

		if(empty($iBGUsers))
		{
			Flash::error('IBGUsers not found');

			return redirect(route('administration.iBGUsers.index'));
		}

		return view('iBGUsers.edit')->with('iBGUsers', $iBGUsers);
	}

	/**
	 * Update the specified IBGUsers in storage.
	 *
	 * @param  int              $id
	 * @param UpdateIBGUsersRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateIBGUsersRequest $request)
	{
		$iBGUsers = $this->iBGUsersRepository->find($id);

		if(empty($iBGUsers))
		{
			Flash::error('IBGUsers not found');

			return redirect(route('administration.iBGUsers.index'));
		}

		$input = $request->all();

		$input['password'] = bcrypt($input['password']);
		
		$this->iBGUsersRepository->updateRich($input, $id);

		Flash::success('IBGUsers updated successfully.');

		return redirect(route('administration.iBGUsers.index'));
	}

	/**
	 * Remove the specified IBGUsers from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$iBGUsers = $this->iBGUsersRepository->find($id);

		if(empty($iBGUsers))
		{
			Flash::error('IBGUsers not found');

			return redirect(route('administration.iBGUsers.index'));
		}

		

		$this->iBGUsersRepository->delete($id);

		Flash::success('IBGUsers deleted successfully.');

		return redirect(route('administration.iBGUsers.index'));
	}
}
