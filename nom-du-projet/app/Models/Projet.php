<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{

    protected $table = 'project';
    use HasFactory;


   protected $fillable = [
       'titre',
       'prop',
       'lieu',
       'desc',
       'datedeb',
       'datefin',
       'commune',
       'wilaya'

   ];


    // Ajoutez ici les autres règles de validation
    public static $rules = [
        'titre' => 'required|string',
        'prop' => 'required|string',
        'lieu' => 'required|string',
        'desc' => 'required|string',
        'datedeb' => 'required|date',
        'datefin' => 'required|date',
        'commune' => 'required|string',
        'wilaya' => 'required|string'
    ];

}
