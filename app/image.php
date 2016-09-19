<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    protected $table = "images";

    protected $fillable = [
    	'id','name','article_id'
    ];

    public function article()
    {
    	return $this->belongdTo('App\article');
    }
}
