<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationVelo extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = ['username','usermail','userphone','startDate','duration','bike_id','user_id'];

    public function Bikes(){
        return $this->belongsTo(Bike::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Bill()
    {
        return $this->hasOne(Bill::class);
    }
}