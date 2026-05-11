<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    public function index()
    {
        return view('posts');
    }

    public function store(Request $request)
{
    $request->validate(
        [
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:5'],
        ],
        [
            'title.required' => 'Please enter a title.',
            'description.required' => 'Please enter a description.',
        ]
    );

    Log::info('====== NEW POST ======');
    Log::info('Title: ' . $request->title);
    Log::info('Description: ' . $request->description);

    return response()->json([
        'message' => 'Post submitted successfully.',
        'data' => [
            'title' => $request->title,
            'description' => $request->description,
        ]
    ]);
    }
    }
