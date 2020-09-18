<?php

namespace App\Http\Controllers;

use App\PostCommentReplies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentRepliesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    public function createReply(Request $request)
    {
        //
        $user = Auth::user();
        $post_id = $request->post_id;
        $comment_id = $request->comment_id;
        $data = [
            'comment_id'=>$comment_id,
            'is_active'=>$user->is_active,
            'author'=>$user->name,
            'email'=>$user->email,
            'body'=>$request->body
        ];
        PostCommentReplies::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $replies = PostCommentReplies::all()->where('comment_id',$id);
        $comment_id = $id;
        return view('Admin.comments.replies.index',compact('replies','comment_id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $reply = PostCommentReplies::findOrFail($id);
        return view('Admin.comments.replies.edit',compact('reply'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $reply = PostCommentReplies::findOrFail($id);
        $reply->update($request->all());
        return redirect('admin/comments/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $reply = PostCommentReplies::findOrFail($id);
        $reply->delete();
        return redirect('admin/comments/');

    }
}
