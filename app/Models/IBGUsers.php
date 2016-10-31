<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IBGUsers extends Model
{
//    use SoftDeletes;

	public $table = "iBGUsers";
    
//	protected $dates = ['deleted_at'];


	public $fillable = [
	    "name",
		"email",
		"password",
		"isAdmin"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "name" => "string",
		"email" => "string",
		"password" => "string",
		"isAdmin" => "boolean"
    ];

	public static $rules = [
	    "name" => "required",
		"email" => "required",
		"password" => "required",
//		"isAdmin" => "required"
	];

    

}
