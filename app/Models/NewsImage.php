<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsImage extends Model
{
    use SoftDeletes;

	public $table = "newsImages";
    
	protected $dates = ['deleted_at'];


	public $fillable = [
	    "news_id",
		"image"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "news_id" => "integer",
		"image" => "string"
    ];

	public static $rules = [
	    "news_id" => "required",
		"image" => "required"
	];

    	/**
	 * Get the news object.
	 */
	public function news()
	{
	    return $this->belongsTo('App\Models\News','news_id');
	}


}
