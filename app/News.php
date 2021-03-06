<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
	protected $fillable = [
		'title','category_id','body','word_count',
	];
    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function category(){
    	return $this->belongsTo('App\Category');
    }

    public function photos(){
    	return $this->hasMany('App\Photo');
    }
}
