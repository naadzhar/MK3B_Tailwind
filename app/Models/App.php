<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Website extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',        // Nama website
        'url',         // URL website
        'description', // Deskripsi website
        'icon',        // Path atau URL ikon website
        'price',       // Harga website
        'logo',        // Path atau URL logo website
    ];
}