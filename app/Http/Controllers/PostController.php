<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;  

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();  
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
    	$request->validate([
            'title'=>'required',
            'body'=>'required',
        ]);   

        Post::create($request->all());
        return redirect()->route('posts.index');
    }

    public function show($id)
    {
    	$post = Post::find($id);
        // dd($post);
        // return;
        return view('posts.show', compact('post'));
    }
}