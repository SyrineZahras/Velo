<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\RideStatus;
use App\Models\Association;

class Ride extends Model 
{
    use HasFactory;
    protected $fillable = ['location'];
    protected $primaryKey = 'id';
    protected $casts = [
        'status' => RideStatus::class,
        'date' => 'date',
        'time' => 'datetime:H:i',
        'distance' => 'float',
        'duration' => 'datetime:H:i',
        'lng' => 'float',
        'lat' => 'float'
    ];
 

    
    public function association()
    {
        return $this->belongsTo(Association::class);
    }
    
}
