<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $fillable = ['client', 'name_responsable', 'prenom_responsable','tel_responsable','email_responsable', 'title','description','date_debut','date_fin','etat','nombre_jours_vendus'];

    use HasFactory;
}
