<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proprietaire extends Model
{
    use HasFactory;


    protected $fillable = [
        'id','nomProprio', 'prenomProprio', 'emailProprio', 'motDePasseProprio', 'numtelProprio', 'numTelProprio2', 'statut'  ];
}
