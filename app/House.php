<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'houses';

	//users houses
	public function owner()
	{
		return $this->belongsTo('App\User','users_id');
	}
}
