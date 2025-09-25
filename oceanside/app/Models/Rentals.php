<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Rentals extends Model
{ 
    protected $table = 'rentals';
    protected $fillable = [
        'name',
        'location',
        'price_per_night',
        'nomber_of_rooms',
        'description',
        'equipment',
        'contact_info',
        'image_url',
    ];
}
