<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostCommentReplies extends Model
{
    //
    protected $fillable = [
        'comment_id',
        'is_active',
        'author',
        'email',
        'body',
    ];



    //inverse relation with comments
    public function comment(){
        return $this->belongsTo('App\PostComments');
    }
}
