<?php

// CommentController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\post;
use App\User;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = new Comment;
        $comment->body = $request->get('comment_body');
        $comment->user()->associate($request->user());
        $post = Post::find($request->get('post_id'));
        $post->comments()->save($comment);

        if  (!$comment['user_id']) {
            return back()->with('success','Your post has been successfuly');

        }
        return back();
    }

    public function replyStore(Request $request)
    {
        $reply = new Comment();
        $reply->body = $request->get('comment_body');
        $reply->user()->associate($request->user());
        $reply->parent_id = $request->get('comment_id');
        $post = Post::find($request->get('post_id'));

        $post->comments()->save($reply);

        return back();

    }

    public function delete(Request $id,$user_id)
    {
        // $user_idcomment = User::find('id');
        // $commentuser_ID = $user_id;
        // // dd($user_id);
        // if ($user_id != $user_idcomment) {
        //     return back()->with('success','ลบไม่ได้');
        // } else {
        //     Comment::where('id', $id)->delete();
        //     return back();
        // }
        Comment::where('id', $id)->delete();
        return back();
    }
}
