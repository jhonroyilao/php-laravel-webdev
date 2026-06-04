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

    // UPDATE POST
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

    // DELTE POST
    public function deletePost($id){
        DB:: table('post')
        -> where('id', $id)
        /*-> where('id', '=', $id)*/
        -> delete ();
    
    return redirect()->route('posts.index');
    }


  public function searchPost(Request $request)
{
    $search = $request->search;

    $posts = DB::table('post')
        ->where('title', 'like', "%{$search}%")
        ->orWhere('description', 'like', "%{$search}%")
        ->get();

    $statuses = DB::table('statuses')->get();

    return view('posts', compact('posts', 'statuses'));
}

}