<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// composer require cviebrock/eloquent-sluggable
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    // Package eloquent-sluggable
    use Sluggable;

    protected $fillable = [
        'title', 'body', 'iframe', 'image', 'user_id', 'comment', 'likes', 'hearts'
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate' => true
            ]
        ];
    }

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag','post_tags');
    }


    public function getGetExcerptAttribute($key)
    {
        return substr($this->body, 0, 140);
    }

    public function getGetImageAttribute()
    {
        if($this->image){
            return url("storage/$this->image");
        }
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

}
