<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'addresses';

	//users address
	public function userA()
	{
		return $this->belongsTo('App\User','users_id');
	}
}
