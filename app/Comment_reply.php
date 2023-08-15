<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment_reply extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'comment_replies';

	//Reply belongs to the first comment
	public function comment()
	{
		return $this->belongsTo('App\Comment','comments_id');
	}
}
