<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Homeslider extends Model
{
    use SoftDeletes;

	public $table = "homesliders";
    
	protected $dates = ['deleted_at'];


	public $fillable = [
	    "name",
		"name_mm",
		"image",
		"link"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "name" => "string",
		"name_mm" => "string",
		"image" => "string",
		"link" => "string"
    ];

	public static $rules = [
	    "name" => "required",
		"name_mm" => "required",
		"image" => "required",
		"link" => "required"
	];

    

}
