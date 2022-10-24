<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptionBike extends Model
{
    use HasFactory;


  /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
    'imageUrl',
    'option',
    'couleur',
    'type',
    'prix',
 ];

    public function bike()
    {
        return $this->belongsTo(Bike::class);
    }
}