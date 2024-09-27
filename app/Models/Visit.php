<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;
    protected $table = 'shetabit_visits'; // Specify the table name

    protected $fillable = [
        'ip', 
        'user_agent', 
        'location', 
        'visited_at',
        // Add other fields as necessary
    ];
}
