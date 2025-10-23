<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return $posts;
    }
    

    public function store(){
        $post = Post::create(
            [
                "tittle"=>"tittle1",
                "content"=>"content1",
                "author"=>"houda"
            ]
        );
        return $posts;
    }
    public function show($id){
        $post = Post::find($id);
        if ($post) {
            return $post;
        }
        return "introuvable";
    }
     public function update($id){
        $post = Post::find($id);
       if ($post) {
        $post->tittle="tittle2";
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
