<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyImage extends Model
{
    use SoftDeletes;

	public $table = "companyImages";
    
	protected $dates = ['deleted_at'];


	public $fillable = [
	    "company_id",
		"image"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "company_id" => "integer",
		"image" => "string"
    ];

	public static $rules = [
	    "company_id" => "required",
		"image" => "required"
	];

    	/**
	 * Get the company object.
	 */
	public function company()
	{
	    return $this->belongsTo('App\Models\Company','company_id');
	}


}
