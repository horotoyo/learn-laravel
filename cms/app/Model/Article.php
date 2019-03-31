<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	protected $fillable = [
		'user_id', 'category_id', 'title', 'content'
	];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
}
