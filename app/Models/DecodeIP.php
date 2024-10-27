<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DecodeIP extends Model
{
    use HasFactory;
    protected $table = 't_decodeip';
    protected $fillable = [
        'country',
        'countryCode',
        'region',
        'regionName',
        'city',
        'zip',
        'lat',
        'lon',
        'timezone',
        'isp',
        'org',
        'as',
        'query',
        // Add other fields as necessary
    ];
}
