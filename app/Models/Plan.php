<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    protected $fillable = ['description'];
    protected $primaryKey = 'id';
    protected $casts = [
        'time' => 'datetime:H:i'
    ];
 
      /**
     * Get the comments for the blog post.
     */
    public function rides()
    {
        return $this->hasMany(Ride::class);
    }
}
