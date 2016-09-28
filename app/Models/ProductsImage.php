<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductsImage extends Model
{
    use SoftDeletes;

	public $table = "productsImages";
    
	protected $dates = ['deleted_at'];


	public $fillable = [
	    "products_id",
		"image"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "products_id" => "string",
		"image" => "string"
    ];

	public static $rules = [
	    "products_id" => "required",
		"image" => "required"
	];

    	/**
	 * Get the products object.
	 */
	public function products()
	{
	    return $this->belongsTo('App\Models\Products','products_id');
	}


}
