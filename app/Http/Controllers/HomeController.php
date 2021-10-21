<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('index', compact('posts'));
    }

    public function store(Request $request)
    {
        $post = Post::create([
            'title' => $request->title
        ]);

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $ex = $image->getClientOriginalExtension();
            $name = time() . "." . $ex;
            $path = public_path('photos');
            $image->move($path, $name);

            Photo::create([
                'url' => 'photos/' . $name,
                'photoable_id' => $post->id,
                'photoable_type' => 'App\Models\Post'
            ]);
        }

        return redirect('/');
    }
}