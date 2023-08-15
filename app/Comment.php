<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'comments';

	//comments table in database
	protected $guarded = [];
	
	// user who commented
	public function author()
	{
		return $this->belongsTo('App\User','users_id');
	}
	
	public function post()
	{
		return $this->belongsTo('App\Post','posts_id');
	}

	//Comment has many replies
    public function replies()
    {
        return $this->hasMany('App\Comment_reply','comments_id');
    }
}
