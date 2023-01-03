<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestNumber extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone',
        'zone_prefix_id',
        'platform',
    ];
}
