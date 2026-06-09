<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    // DISPLAY POSTS PAGE
    public function postPage()
    {
        $posts = DB::table('post')
            ->leftJoin('statuses', 'post.status', '=', 'statuses.id')
            ->select(
                'post.*',
                'statuses.display_name as status_display_name'
            )
            ->get();

        $statuses = DB::table('statuses')->get();

        return view('posts', compact('posts', 'statuses'));
    }

    // DISPLAY EDIT FORM
    public function editForm($id)
    {
        $post = DB::table('post')->where('id', $id)->first();

        $statuses = DB::table('statuses')->get();

        return view('edit', compact('post', 'statuses'));
    }

    // ADD POST
    public function addPost(Request $request)
    {
        $request->validate(
            [
                'title' => ['required', 'min:2'],
                'description' => ['required', 'min:5'],
            ],
            [
                'title.required' => 'You need to add a title',
                'title.min' => 'Title must be at least 2 characters long',

                'description.required' => 'You need to add a description',
                'description.min' => 'Description must be at least 5 characters long',
            ]
        );

        Log::info('==== NEW POST ====');
        Log::info('Title: ' . $request->title);
        Log::info('Description: ' . $request->description);

        DB::table('post')->insert([
            'title' => $request->title,
            'description' => $request->description,
            'created_by' => 1,
            'created_at' => now(),
            'status' => $request->status,
        ]);

        return redirect('posts');
    }

    // EDIT POST
    public function updatePost(Request $request, $id)
    {
        $request->validate(
            [
                'title' => ['required', 'min:2'],
                'description' => ['required', 'min:5'],
            ]
        );

        DB::table('post')
            ->where('id', $id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'status' => $request->status,
            ]);

        return redirect('posts');
    }

    // DELETE POST
    public function deletePost($id)
    {
        Log::info('Deleting post ID: ' . $id);

        DB::table('post')
            ->where('id', $id)
            ->delete();
        
        Log::info('Post deleted.');

        return redirect()->route('posts.index');
    }


    // SEARCH POST
  public function searchPost(Request $request)
{
    $param = $request->param;

    $posts = DB::table('post')
        ->leftJoin('statuses', 'post.status', '=', 'statuses.id')
        ->select(
            'post.*',
            'statuses.display_name as status_display_name'
        )
        ->where('title', 'like', "%{$param}%")
        ->orWhere('description', 'like', "%{$param}%")
        ->get();

    $statuses = DB::table('statuses')->get();

    return view('posts', compact('posts', 'statuses'));
}

}