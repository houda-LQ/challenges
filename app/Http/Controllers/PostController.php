<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return $posts;
    }
    

    public function store(Request $request){
        $post = Post::create(
            [
                "tittle"=>$request->tittle,
                "content"=>$request->content,
                "author"=>$request->author
            ]
        );
        return $post;
    }
    public function show($id){
        $post = Post::find($id);
        if ($post) {
            return $post;
        }
        return "introuvable";
    }
     public function update(Request $request  ,$id){
        $post = Post::find($id);
       if ($post) {
        $post->tittle= $request->tittle;
        $post->content= $request->content;
        $post->author= $request->author;
    
            return $post;
        }
        return "introuvable";
     }
     public function updateStatus(Request $request  ,$id){
        $post = Post::find($id);
       if ($post) {
        $post->status= $request->status;
      $post->save();
    
            return $post;
        }
        return "introuvable";
     }
      public function destroy($id){
        $post = Post::find($id);
       if ($post) {
        $post->delete();
            return "delete with sucssess";
        }
        return "introuvable";
      }
    
}
