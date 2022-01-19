<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index($id)
    {
       /* echo $id;
        $items = ["1" => "Apple",
        "2" => "Orrange",
        "3" => "Grape" ];
        $fruit = $items[$id];
        $data  = ["fruit_name" => $fruit];
        */
        //$post = \DB::table('posts')->where("id",$id)->first();
        $post = Post::where("id",$id)->first();
        if(!$post){
            abort(404);
        }
        $data = ["post"=>$post];
        //var_dump($post);
        return view('post.index',$data);

    }
}
