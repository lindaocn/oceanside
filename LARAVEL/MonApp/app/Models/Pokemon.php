<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{ 
    protected $fillable = [
        'name',
        'type',
        'health',
        'attack',
        'description',
        'image_url',
    ];
}