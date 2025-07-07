<?php

namespace App\Models;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBlog extends Model
{
    /** @use HasFactory<\Database\Factories\UserBlogFactory> */
    use HasFactory;
    protected $fillable = ['name', 'email', 'password'];

    public function comment(){
        return $this->hasMany(Comment::class, 'user_id');
    }

    public function post(){
        return $this->hasMany(Post::class, 'user_id');
    }
}
