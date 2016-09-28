<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Libraries\Repositories\NewsRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;
use App\Models\News;

class NewsController extends AppBaseController
{

	/** @var  NewsRepository */
	private $newsRepository;

	function __construct(NewsRepository $newsRepo)
	{
		$this->newsRepository = $newsRepo;
	}

	/**
	 * Display a listing of the News.
	 *
	 * @return Response
	 */
	public function index()
	{
		$news = $this->newsRepository->paginate(10);

		return view('news.index')
			->with('news', $news);
	}

	/**
	 * Show the form for creating a new News.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('news.create');
	}

	/**
	 * Store a newly created News in storage.
	 *
	 * @param CreateNewsRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateNewsRequest $request)
	{
		$input = $request->all();

				if($request->file('homeimage')){
			$image = $this->uploadImage($request->file('homeimage'),'/news/');
			$input['homeimage'] = $image['name'];
		}
		if($request->file('image')){
			$image = $this->uploadImage($request->file('image'),'/news/');
			$input['image'] = $image['name'];
		}

		$news = $this->newsRepository->create($input);

		Flash::success('News saved successfully.');

		return redirect(route('administration.news.index'));
	}

	/**
	 * Display the specified News.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$news = $this->newsRepository->find($id);

		if(empty($news))
		{
			Flash::error('News not found');

			return redirect(route('administration.news.index'));
		}

		return view('news.show')->with('news', $news);
	}

	/**
	 * Show the form for editing the specified News.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$news = $this->newsRepository->find($id);

		if(empty($news))
		{
			Flash::error('News not found');

			return redirect(route('administration.news.index'));
		}

		return view('news.edit')->with('news', $news);
	}

	/**
	 * Update the specified News in storage.
	 *
	 * @param  int              $id
	 * @param UpdateNewsRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateNewsRequest $request)
	{
		$news = $this->newsRepository->find($id);

		if(empty($news))
		{
			Flash::error('News not found');

			return redirect(route('administration.news.index'));
		}

		$input = $request->all();

				if($request->file('homeimage')){
			$image = $this->uploadImage($request->file('homeimage'),'/news/');
			$input['homeimage'] = $image['name'];
					@unlink(public_path('/news/'.$news->homeimage));
		@unlink(public_path('/news/x100/'.$news->homeimage));
		@unlink(public_path('/news/x200/'.$news->homeimage));
		@unlink(public_path('/news/x400/'.$news->homeimage));

		@unlink(public_path('/news/'.$news->image));
		@unlink(public_path('/news/x100/'.$news->image));
		@unlink(public_path('/news/x200/'.$news->image));
		@unlink(public_path('/news/x400/'.$news->image));

		}
		if($request->file('image')){
			$image = $this->uploadImage($request->file('image'),'/news/');
			$input['image'] = $image['name'];
					@unlink(public_path('/news/'.$news->homeimage));
		@unlink(public_path('/news/x100/'.$news->homeimage));
		@unlink(public_path('/news/x200/'.$news->homeimage));
		@unlink(public_path('/news/x400/'.$news->homeimage));

		@unlink(public_path('/news/'.$news->image));
		@unlink(public_path('/news/x100/'.$news->image));
		@unlink(public_path('/news/x200/'.$news->image));
		@unlink(public_path('/news/x400/'.$news->image));

		}
		
		$this->newsRepository->updateRich($input, $id);

		Flash::success('News updated successfully.');

		return redirect(route('administration.news.index'));
	}

	/**
	 * Remove the specified News from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$news = $this->newsRepository->find($id);

		if(empty($news))
		{
			Flash::error('News not found');

			return redirect(route('administration.news.index'));
		}

				@unlink(public_path('/news/'.$news->homeimage));
		@unlink(public_path('/news/x100/'.$news->homeimage));
		@unlink(public_path('/news/x200/'.$news->homeimage));
		@unlink(public_path('/news/x400/'.$news->homeimage));

		@unlink(public_path('/news/'.$news->image));
		@unlink(public_path('/news/x100/'.$news->image));
		@unlink(public_path('/news/x200/'.$news->image));
		@unlink(public_path('/news/x400/'.$news->image));


		$this->newsRepository->delete($id);

		Flash::success('News deleted successfully.');

		return redirect(route('administration.news.index'));
	}
}
