<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected  $fillable = [
        'user_id',
        'category_id',
        'photo_id',
        'title',
        'body'
    ];



    //relation with user each pos has owner
    public function user(){
        return $this->belongsTo('App\User');
    }



    //relation with photo each post has photo
    public function photo(){
        return $this->belongsTo('App\Photo');
    }



    //relation with category each post belongs to category
    public function category(){
        return $this->belongsTo('App\Category');
    }



    //relation with post Comments each post has many comments
    public function comment(){
        return $this->hasMany('App\PostComments');
    }
}
