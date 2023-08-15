<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'messages';


	//Comment has many replies
    public function mreplies()
    {
        return $this->hasMany('App\Message_reply','messages_id');
    }

    public function sender()
	{
		return $this->belongsTo('App\User','users_id');
	}	
}
