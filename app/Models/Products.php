<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use SoftDeletes;

	public $table = "products";
    
	protected $dates = ['deleted_at'];


	public $fillable = [
	    "name",
		"price",
		"gender",
		"body",
		"homeimage",
		"image"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "name" => "string",
		"price" => "string",
		"gender" => "string",
		"body" => "string",
		"homeimage" => "string",
		"image" => "string"
    ];

	public static $rules = [
	    "name" => "required",
//		"price" => "required",
		"gender" => "required",
		"body" => "required",
		"homeimage" => "required",
		"image" => "required"
	];

	public function productsimages(){
		return $this->hasMany('App\Models\ProductsImage');
	}

}
