<?php

namespace App\Http\Controllers;

use App\post;
use App\Like;
use App\User;
use App\Comment;
use Illuminate\Http\Request;

// use Auth;
// use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{


    public function publicHomePage() {
    //   $posts = Post::latest()->paginate(5);
    //   return view('blog/home', ['posts'=>$posts]);

      $posts = Post::all();
      return view('blog/home', ['posts'=>$posts]);



    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loggedInUserId = Auth::id();
        $posts = Post::all()->where('user_id', $loggedInUserId);

        return view('adminPanel.home', ['posts'=>$posts]);
    }

    public function likePost(Request $request) {
      $post_id = $request['postId'];
      $is_like = $request['isLike'] == 'ture';
      $post = Post::find($post_id);

      if (!$post) {
        return null;
      }

      $user = Auth::user();
      $like = $user->likes()->where('post_id', $post_id)->first();
      if ($like) {
        $already_like = $like->like;
        $update = ture;
        if ($already_like == $is_like) {
          $like->dalete();
          return null;
        }
      } else {
        $like = new Like;
      }

      $like->like = $is_like;
      $like->user_id = $user->id;
      $like->post_id = $post->id;

      if ($update) {
        $like->update();
      } else {
        $like->save();
      }

      return null;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPanel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    //    $post = new Post;


    //    $postTitle = $request->title;
    //    $postBody = $request->body;

    //    $postImage = $new_name;

    //    $postUserId = Auth::id();

    //    $post->user_id = $postUserId;
    //    $post->title = $postTitle;
    //    $post->body = $postBody;


       if($file = $request->file('image')) {
           $name = $file->getClientOriginalName();
           if ($file->move('images', $name)) {
                $post = new Post
                (
                [
                    'title'=> $request->get('title'),
                    'equipment'=> $request->get('equipment'),
                    'category'=> $request->get('category'),
                    'garnish'=> $request->get('garnish'),
                    'body'=> $request->get('body'),
                    'image'=> $request->get('image')
                ]
                );
               $post->image = $name;
               $postUserId = Auth::id();
               $post->user_id = $postUserId;
               $post->save();
               return redirect('posts')->with('success','Your post has been successfuly');
           };
       };
       return back()->with('success','Your post has been fuil');
    // $post->save();
    // dd($post);

       //return redirect()->route('posts.index')->with('success','Your post has been successfuly');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $post = Post::find($id);
        $user = User::find($id);
        $user_id = $request->user()["id"];
        $posts = Post::all();
        $users = \DB::table('posts')->select('image')->get();
        $user_like = array();
        $like = Like::where('postlike_id','=',$id) -> get();
        foreach ($like as $key => $value) {
            array_push($user_like,$value['userlike_id']);
        }

        // $data = array(
        //   'id'=> $id,
        //   'post'=> $post,
        //   'user_id'=>$id,
        //   'user_like'
        // echo $posts[5];
        // );


        return view('blog.view_post', compact('post','user','user_id','user_like','id', 'posts','users'))->with('posts',$posts);
        // return view('blog.view_post',['posts'=>$posts,'user_id'=>$user_id,'post'=>$post,'user'=>$user],compact('post','user','user_id','user_like','id','posts'));

    }





    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('adminPanel.edit', compact('post','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request,['title' => 'required', 'body' => 'required']);

      $post = Post::find($id);
      $post->title = $request->get('title');
      $post->body = $request->get('body');
      $post->body = $request->get('equipment');
      $post->body = $request->get('gqrnish');
      $post->body = $request->get('image');
      $post->body = $request->get('category');

      $post->save();
      return redirect()->route('posts.index')->with('success','ลบข้อมูลเรียบร้อย');
      //return redirect()->route('adminPanel.home')->with('success','อัพเดทเรียนร้อย');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $post = Post::find($id);
      $post->delete();
      return redirect()->route('posts.index')->with('success','ลบข้อมูลเรียบร้อย');
    }

    public function category(request $request ,$name)
    {

        $post = Post::find($name);
        $user_id = $request->user()["id"];
        $Appsetting = Post::all();
        $photo = Post::where('image')->get();
        $n = $name;
        $category = Post::where('category','=',$name) -> get();
        // dd($Appsetting);
        return view('blog/category', ['category'=>$category,'n'=>$n,'Appsetting'=>$Appsetting]);

        // return view('blog/category', compact('category','n', 'posts', 'post','user_id','post'));
    }

}
