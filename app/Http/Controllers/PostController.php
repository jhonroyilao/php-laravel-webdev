<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{


public function index(){
    $post = Post::with('statusInfo')->get();
    $statuses = Status::orderBy('order_by')->get();

    return view('posts', compact('post', 'statuses'));
}
public function store(Request $request){
    
    Log::info('Submitted Form Data:', $request->all());

    Post:: create([
        'title' => $request->title,
        'description' => $request->description,
        'created_by' => 'N/A',
        'status' => 1,
    ]);

    return redirect()->route('posts.index');

}
    
}