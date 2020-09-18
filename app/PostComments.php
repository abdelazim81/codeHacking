<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Url;

class PostComments extends Model
{
    //

    protected $fillable = [
        'post_id',
        'is_active',
        'author',
        'email',
        'body',

];
    //relation with replies which each comment has many replies
    public function commentsReplies(){
        return $this->hasMany('App\PostCommentsReplies');
    }
    public function post(){
        return $this->belongsTo('App\Post');
    }
    public function user(){
        return $this->hasOne('App\User');
    }
}
