<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required',
            'post_id' => 'required'
        ]);

        $data = Like::isLiked($request->post_id, $request->user_id);
        if (count($data) > 0) {
            Like::destroy($data[0]->id);
            return response()->json([
                'message' => 'liked'
            ]);
        }

        Like::create($validated);

        return response()->json([
            'message' => 'success',
            'data' => $validated
        ]);
    }

    public function isLiked(Request $request)
    {
        $data = Like::isLiked($request->post_id, $request->user_id);
        if (count($data) > 0) {
            return response()->json([
                'message' => 'liked',
                'data' => $request->all()
            ]);
        }

        return response()->json([
            'message' => 'not',
            'data' => $request->all()
        ]);
    }
}
