<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    function getTimeAgoAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    function user()
    {
        return $this->belongsTo(User::class);
    }

    function comments()
    {
        return $this->hasMany(Comment::class);
    }

    function likes()
    {
        return $this->hasMany(Like::class);
    }
}
