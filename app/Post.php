<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'posts';

	//posts table in database
	protected $guarded = [];

	public function comments()
	{
		return $this->hasMany('App\Comment','posts_id');
	}
	
	public function author()
	{
		return $this->belongsTo('App\User','users_id');
	}	
}
