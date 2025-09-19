<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
class Category extends Model
{
    protected $table = 'category'; // যদি table name singular হয়
    protected $fillable = ['title']; // optional, fillable fields

    public function posts(){
        return $this->belongsToMany(Post::class, 'category_post');
    }
}

