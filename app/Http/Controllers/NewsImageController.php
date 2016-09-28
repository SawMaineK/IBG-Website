<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateNewsImageRequest;
use App\Http\Requests\UpdateNewsImageRequest;
use App\Libraries\Repositories\NewsImageRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;
use App\Models\NewsImage;
use App\Models\News;

class NewsImageController extends AppBaseController
{

	/** @var  NewsImageRepository */
	private $newsImageRepository;

	function __construct(NewsImageRepository $newsImageRepo)
	{
		$this->newsImageRepository = $newsImageRepo;
	}

	/**
	 * Display a listing of the NewsImage.
	 *
	 * @return Response
	 */
	public function index()
	{
		$newsImages = NewsImage::with(['news'])->paginate(10);

		return view('newsImages.index')
			->with('newsImages', $newsImages);
	}

	/**
	 * Show the form for creating a new NewsImage.
	 *
	 * @return Response
	 */
	public function create()
	{
		
		$newsList=News::all();
		$news = [];
		foreach ($newsList as $key => $value) {
			$news[$value->id] = $value->name;
		}
		return view('newsImages.create')->with(['news'=>$news]);
	}

	/**
	 * Store a newly created NewsImage in storage.
	 *
	 * @param CreateNewsImageRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateNewsImageRequest $request)
	{
		$input = $request->all();

				if($request->file('image')){
			$image = $this->uploadImage($request->file('image'),'/newsImages/');
			$input['image'] = $image['name'];
		}

		$newsImage = $this->newsImageRepository->create($input);

		Flash::success('NewsImage saved successfully.');

		return redirect(route('administration.newsImages.index'));
	}

	/**
	 * Display the specified NewsImage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$newsImage = NewsImage::with(['news'])->where('id', $id)->first();

		if(empty($newsImage))
		{
			Flash::error('NewsImage not found');

			return redirect(route('administration.newsImages.index'));
		}

		return view('newsImages.show')->with('newsImage', $newsImage);
	}

	/**
	 * Show the form for editing the specified NewsImage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{

		$newsList=News::all();
		$news = [];
		foreach ($newsList as $key => $value) {
			$news[$value->id] = $value->name;
		}

		$newsImage = $this->newsImageRepository->find($id);

		if(empty($newsImage))
		{
			Flash::error('NewsImage not found');

			return redirect(route('administration.newsImages.index'));
		}

		return view('newsImages.edit')->with(['news'=>$news, 'newsImage'=>$newsImage]);
	}

	/**
	 * Update the specified NewsImage in storage.
	 *
	 * @param  int              $id
	 * @param UpdateNewsImageRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateNewsImageRequest $request)
	{
		$newsImage = $this->newsImageRepository->find($id);

		if(empty($newsImage))
		{
			Flash::error('NewsImage not found');

			return redirect(route('administration.newsImages.index'));
		}

		$input = $request->all();

				if($request->file('image')){
			$image = $this->uploadImage($request->file('image'),'/newsImages/');
			$input['image'] = $image['name'];
					@unlink(public_path('/newsImages/'.$newsImage->image));
		@unlink(public_path('/newsImages/x100/'.$newsImage->image));
		@unlink(public_path('/newsImages/x200/'.$newsImage->image));
		@unlink(public_path('/newsImages/x400/'.$newsImage->image));

		}

		$this->newsImageRepository->updateRich($input, $id);

		Flash::success('NewsImage updated successfully.');

		return redirect(route('administration.newsImages.index'));
	}

	/**
	 * Remove the specified NewsImage from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$newsImage = $this->newsImageRepository->find($id);

		if(empty($newsImage))
		{
			Flash::error('NewsImage not found');

			return redirect(route('administration.newsImages.index'));
		}

				@unlink(public_path('/newsImages/'.$newsImage->image));
		@unlink(public_path('/newsImages/x100/'.$newsImage->image));
		@unlink(public_path('/newsImages/x200/'.$newsImage->image));
		@unlink(public_path('/newsImages/x400/'.$newsImage->image));


		$this->newsImageRepository->delete($id);

		Flash::success('NewsImage deleted successfully.');

		return redirect(route('administration.newsImages.index'));
	}
}
