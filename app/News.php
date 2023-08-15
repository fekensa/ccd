<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'news';

	//news table in database
	protected $guarded = [];

	public function new_comments()
	{
		return $this->hasMany('App\NewsComment','news_id');
	}
}
