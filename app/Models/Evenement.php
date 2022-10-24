<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;

    protected $fillable = ['nameevent', 'themeevent', 'lieuevent'];
    protected $casts = [
        'date' => 'date'
    ];
}