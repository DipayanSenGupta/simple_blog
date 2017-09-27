<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
  public function getIndex()
  {

  $posts = Post::with('Author')-> orderBy('id', 'DESC')->get();
  return View('index')->with('posts',$posts);

  }
  public function getAdmin()
  {
  return View('addpost');
  }
  public function postAdd()
  {
  Post::create(array(
              'title' => Input::get('title'),
              'content' => Input::get('content'),
              'author_id' => Auth::user()->id
   ));
  return Redirect::route('index');
  }
}
