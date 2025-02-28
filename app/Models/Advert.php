<?php

// app/Models/Advert.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'status',
        'start_date',
        'end_date'
    ];

    // Cast the dates to carbon instances
    protected $dates = ['start_date', 'end_date'];
}
