<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'brand',
        'model',
        'year',
        'registration_number',
        'numero_chassi',
        'availability',
        'type',
        'Couleur',
        'description'
    ] ;

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}

