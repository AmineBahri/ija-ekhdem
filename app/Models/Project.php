<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = "projet";

    public function utilisateurs()
    {
    	return $this->belongsTo('App\Models\Utilisateur','utilisateur_id');
    }

    public function offres()
    {
    	return $this->belongsTo('App\Models\OffreEmploi','offre_emploi_id');
    }
}
