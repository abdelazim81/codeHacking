<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected  $fillable = ['file'];


//    inverse relation with user " one to one "

   public function user(){
       return $this->hasOne('App\User');
   }

   // relation with post each photo belongs to a post
    public function post(){
       return $this->belongsTo('App\Post');
    }
}
