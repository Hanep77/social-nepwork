<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static function isLiked($post_id, $user_id)
    {
        $data = Like::where('user_id', $user_id)->where('post_id', $post_id)->get();
        return $data;
    }
}
