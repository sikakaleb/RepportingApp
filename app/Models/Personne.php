<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;

   protected $fillable = [ 
    "nom",
   "prenom",
   "email",
   "contact",
   "adresse",
   "datenaiss",
   "origine",
   "password"];
   
   protected $hidden = [
    'profil_fonctionnelle',
    'profil_image',
    'etat_inscription',
    'etat_existence'
];
   

}
