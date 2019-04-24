<?php

namespace App\Http\Controllers;

use App\Like;
use App\Post;

use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function addlike(Request $request,$id_post)
    {
        $like =  new Like;
        $like->userlike_id = $request->user()["id"];
        $like->postlike_id = $id_post;

        $like->save();

        return back();
    }

    public function unlike(Request $request,$id_post)
    {
        like::where([
            ['userlike_id','=',$request->user()["id"]],
            ['postlike_id','=',$id_post]
        ])->delete();
        return back();
    }
}
