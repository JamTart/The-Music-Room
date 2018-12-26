<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Input;

class PostController extends Controller
{
    public function store(Request $request){
      $post = new Post;
      $post->post = Input::get("post_ID");
      $post->save();
    }
}
