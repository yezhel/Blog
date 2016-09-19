<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class article extends Model
{
    //use Sluggable;
    protected $table = "articles";

    protected $fillable = [
    	'id','title','content','category_id',
    	'user_id'
    ];

    public function category()
    {
    	return $this->belongsTo('App\category');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function images()
    {
        return $this->hasMany('App\image');
    }

    public function tags()
    {
        return $this->belongsToMany('App\tag');
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
