<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = ['location_id','amount','Status'];


    public function LocationVelo(){
        return $this->belongsTo(LocationVelo::class);
    }

}