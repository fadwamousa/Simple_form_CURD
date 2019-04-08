<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class Post extends Model
{

	
    protected $fillable = ['title','body'];
    

    public function user(){

    	return $this->belongsTo(User::class);
    }

    public function photos(){
    	return $this->morphMany(Photo::class,'imageable');
    }

    public function tags(){

    	return $this->morphToMany(Tag::class,'taggable');
    	//taggable name of table but singular
    }
}
