<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use SoftDeletes;

	public $table = "companies";
    
	protected $dates = ['deleted_at'];


	public $fillable = [
	    "name",
		"name_mm",
		"description",
		"homeimage",
		"logo_image",
		"body"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "name" => "string",
		"name_mm" => "string",
		"description" => "string",
		"homeimage" => "string",
		"logo_image" => "string",
		"body" => "string"
    ];

	public static $rules = [
	    "name" => "required",
		"name_mm" => "required",
		"description" => "required",
		"homeimage" => "required",
		"logo_image" => "required",
//		"body" => "required"
	];

	public function companiesimage(){
		return $this->hasMany('App\Models\CompanyImage');
	}
}
