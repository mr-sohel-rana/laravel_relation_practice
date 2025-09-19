<?php

namespace App\Models;
use App\Models\Comment;
use App\Models\Category;


use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    protected $fillable = ['title', 'content'];

    public function categories(){
        return $this->belongsToMany(Category::class, 'category_post');
    }
}
