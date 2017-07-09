<?php

namespace App;


class Post extends Model
{
    //protected $fillable = ['title','body']; //guarded
    
    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function addComment($body)
    {
    	Comment::create([
    		
    		'body' => request('body'),
    		'post_id' => $this->id,
            'user_id' => auth()->id()

    		]);
    	//$this->comments()->create(compact('body'));
    }
}
