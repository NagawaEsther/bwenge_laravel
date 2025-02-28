<?php

// app/Models/Subscribe.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    use HasFactory;

    // Adjusted to only fill the 'email' attribute
    protected $fillable = ['email'];

    // The 'subscribed_at' field is no longer needed if we're just storing the email
    protected $dates = ['created_at', 'updated_at']; // Automatically handled by Laravel
}
