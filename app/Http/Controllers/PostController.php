<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('index', [
            'posts' => Post::all()->sortByDesc('created_at')
        ]);
    }

    public function show()
    {
        return view('detailpost');
    }

    public function create()
    {
        return view('createpost');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'content' => 'required'
        ]);

        $validated['user_id'] = auth()->user()->id;

        Post::create($validated);

        return redirect('/');
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
