<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use SoftDeletes;

	public $table = "news";
    
	protected $dates = ['deleted_at'];


	public $fillable = [
	    "name",
		"homeimage",
		"image",
		"body"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "name" => "string",
		"homeimage" => "string",
		"image" => "string",
		"body" => "string"
    ];

	public static $rules = [
	    "name" => "required",
		"homeimage" => "required",
		"image" => "required",
		"body" => "required"
	];

	public function newsimages(){
		return $this->hasMany('App\Models\NewsImage');
	}

}
