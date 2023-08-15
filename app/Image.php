<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'images';

	//posts table in database
	protected $guarded = [];

    public function userP()
	{
		return $this->belongsTo('App\User','users_id');
	}	
}
