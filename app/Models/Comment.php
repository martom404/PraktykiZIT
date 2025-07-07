<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /** @use HasFactory<\Database\Factories\CommentsFactory> */
    use HasFactory;
    protected $fillable = ['content', 'post_id', 'user_id'];
    public function user(){
        return $this->belongsTo(UserBlog::class);
    }

    public function post(){
        return $this->belongsTo(Post::class);
    }
}

/*
$comments = App\Models\Comment::factory(50)->make()->each(function ($comment) use ($users, $posts) {
    $comment->user_id = $users->random()->id;
    $comment->post_id = $posts->random()->id;
    $comment->save();
});
*/