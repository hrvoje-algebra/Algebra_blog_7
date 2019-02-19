<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
	use Sluggable;
	
    protected $fillable = ['title','slug','content','user_id'];
	
	 /**
     * Get the posts from user.
     */
	 
	protected static $userModel = 'App\Models\User'; 
	 
    public function user()
    {
        return $this->belongsTo(static::$userModel, 'id');
    }
	
     /**
     * Save Post
     *
     * @param array $post
     * @return post object
     */	
	 
	 public function savePost($post)
	 {
		 return $this->fill($post)->save();
	 }
	 
	 /**
     * Update Post
     *
     * @param array $post
     * @return post object
     */
	 
	 public function updatePost($post)
	 {
		 return $this->update($post);		
	 }
	 
	 /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }	 
}
