<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = ['title', 'content', 'user_id'];

    public function user() {
        return $this->belongsTo(UserBlog::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class, foreignPivotKey: 'post_id');
    }
}
/*
$posts = App\Models\Post::factory(50)->make()->each(function ($post) use ($users) {
    $post->user_id = $users->random()->id;
    $post->save();
});
*/