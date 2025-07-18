<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function events()
    {
        $events = [
            [
                'title' => 'イベント1',
                'start' => '2025-07-07'
            ],
            [
                'title' => 'イベント2',
                'start' => '2025-07-15'
            ]
        ];

        return response()->json($events);
    }

    public function index() {
        return view('posts.index');
    }

    public function own() {
        return view('posts.own');
    }

    public function store(Request $request){
        $post = new Post();
        $post->title = $request->input('title');
        
        return redirect()->route('posts.index');
    }
}
