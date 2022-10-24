<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    use HasFactory;
     /**
     * fillable
     *
     * @var array
     */
    protected $primaryKey = 'id';
    protected $fillable = [
        'imageUrl',
        'marque' ,
        'vitesse',
        'type',
        'etat',
        'couleur',
        'taille' ,
        'prix'  ,
        'quantite'    ];
    public function optionBikes(){
        return $this->hasMany(OptionBike::class);
    }
    public function LocationVelo()
    {
        return $this->HasMany(LocationVelo::class);
    }
}
