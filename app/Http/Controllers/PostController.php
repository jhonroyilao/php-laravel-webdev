<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    // display post page
    public function postPage()
    {
        $allPosts = DB::table('post')
        ->join('statuses', 'post.status', '=', 'statuses.id')
        ->select(
            'post.*',
            'statuses.display_name as status_name'
        )
        ->get();

        return view('posts', ['posts' => $allPosts]);
    }

    // handle form
    public function addPost(Request $request)
    {
        $request->validate([
            'title' => ['required', 'min:2'],
            'description' => ['required', 'min:5'],
        ],
        [
            'title.required' => 'You need to add a title',
            'title.min' => 'Title must be at least 2 characters long',

            'description.required' => 'You need to add a description',
            'description.min' => 'Description must be at least 5 characters long',
        ]);

        // log only
        Log::info('==== NEW POST====');
        Log::info('Title: ' . $request->title);
        Log::info('Description: ' . $request->description);

        // fetch db record
        $allPosts = DB::table('post')->get();

        // return json
        return response()->json([
            'data' => $allPosts
        ]);
    }
}