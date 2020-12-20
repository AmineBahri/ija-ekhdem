<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;

    protected $table = "utilisateurs";

    public function offres()
    {
    	return $this->belongsToMany('App\Models\OffreEmploi')->withPivot('status');
    }

    public function produits()
    {
    	return $this->belongsToMany('App\Models\ProductInstagram')->withPivot('pub_utilisateur');
    }
}
