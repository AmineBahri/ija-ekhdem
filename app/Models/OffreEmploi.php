<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OffreEmploi extends Model
{
    use HasFactory;

    protected $table = "offre_emplois";
    
    public function utilisateurs()
    {
    	return $this->belongsToMany('App\Models\Utilisateur')->withPivot('cv_utilisateur');
    }

    public function category()
    {
    	return $this->belongsTo('App\Models\Category','categories_id');
    }

    public function type()
    {
    	return $this->belongsTo('App\Models\TypeOffre','type_id');
    }

    public function equipe()
    {
    	return $this->belongsTo('App\Models\Equipe','equipe_id');
    }

}
