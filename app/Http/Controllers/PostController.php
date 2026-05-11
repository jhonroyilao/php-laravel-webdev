<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    public function index()
    {
        // fetch records sa db
        $post = Post::with('statusInfo')->get();

        // send to blade
        return view('posts', compact('post'));
    }

    public function store(Request $request)
    {
        // validation ng form inputs
        $request->validate(
            [
                'title' => ['required', 'min:3'],
                'description' => ['required', 'min:5'],
            ],
            [
                'title.required' => 'please enter a title.',
                'description.required' => 'please enter a description.',
            ]
        );

        Log::info('====== new post ======');
        Log::info($request->all());

        // kuha updated data sa database
        $post = Post::all();

        /* save to database
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'created_by' => 'n/a',
            'status' => 1,
        ]);
        */
        
        // return json ng database content
        return response()->json([
            'data' => $post
        ]);
    }
}