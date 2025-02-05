<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'img_url',
        'author_id',
        'category'
    ];

    public function user() {
        $this->belongsTo(Post::class, 'author_id');
    }
}
