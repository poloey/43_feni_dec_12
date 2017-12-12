<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class srkController extends Controller
{
    public function index(){
        $posts = Post::orderBy('created_at', 'desc')->get();
    	return view('index', compact('posts'));
    }
    public function about(){
    	return view('about');
    }
    public function contact(){
    	return view('contact');
    }
    public function create(){
    	return view('create');
    }
    public function store(){
        $title = request('title');
        $content = request('content');
        Post::create([
          'title' => $title,
          'content' => $content,
          'user_id' => auth()->id()
        ]);
        return redirect ('/');
  }
  public function author ($author) {
    $user = User::find($author);
    $posts = $user->posts;
    return view('author')->with('posts', $posts)->with('user_name', $user->name);
  }
}

