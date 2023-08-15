<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'feedbacks';

	public function giver()
	{
		return $this->belongsTo('App\User','users_id');
	}	
}
