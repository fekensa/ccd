<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsComment extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'news_comments';

	//posts table in database
	protected $guarded = [];

	//anonymous who commented
	public function commenter()
	{
		return $this->belongsTo('App\News','news_id');
	}
}
