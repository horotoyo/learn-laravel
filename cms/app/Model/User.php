<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
    	'name', 'email', 'password'
    ];

    public function articles()
    {
    	return $this->hasMany(Article::class);
    }
}
