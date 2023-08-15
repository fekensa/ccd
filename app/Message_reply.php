<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message_reply extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'message_replies';

	//Reply belongs to the first comment
	public function message()
	{
		return $this->belongsTo('App\Message','messages_id');
	}
}
