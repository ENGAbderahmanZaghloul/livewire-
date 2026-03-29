<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    /** @use HasFactory<\Database\Factories\BlogPostFactory> */
    use HasFactory;
    protected $table = 'blog_posts'; // أو blog_posts حسب اسم الجدول الحقيقي

    protected $fillable = [
        'title',
        'content',
        'type',
        'status',
        'level',
    ];
}
