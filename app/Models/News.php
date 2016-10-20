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
		"name_mm",
		"homeimage",
		"image",
		"body",
		"location"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "name" => "string",
		"name_mm" => "string",
		"homeimage" => "string",
		"image" => "string",
		"body" => "string",
		"location" => "string"
    ];

	public static $rules = [
	    "name" => "required",
		"name_mm" => "required",
		"homeimage" => "required",
		"image" => "required",
		"body" => "required",
		"location" => "required"
	];

	public function newsimages(){
		return $this->hasMany('App\Models\NewsImage');
	}

}
