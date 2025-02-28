<?php

// app/Models/News.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'image', 'published_at', 'status', 'category', 'excerpt'];

    protected $dates = ['published_at'];
}
