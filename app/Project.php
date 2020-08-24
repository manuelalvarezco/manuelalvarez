<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// composer require cviebrock/eloquent-sluggable
use Cviebrock\EloquentSluggable\Sluggable;

class Project extends Model
{
    // Package eloquent-sluggable
    use Sluggable;

    protected $fillable = [
        'title', 'body', 'ifranme', 'image', 'user_id','tecnology','avatar'
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
}
