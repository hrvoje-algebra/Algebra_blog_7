<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Model;
use Cartalyst\Sentinel\Users\EloquentUser;

class User extends EloquentUser
{
    /**
     * Get the posts from user.
     */
	 
	protected static $postModel = 'App\Models\Post'; 
	 
    public function posts()
    {
        return $this->hasMany(static::$postModel, 'user_id');
    }
}
