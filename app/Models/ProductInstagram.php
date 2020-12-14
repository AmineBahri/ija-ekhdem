<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductInstagram extends Model
{
    use HasFactory;

    protected $table = "produits_instagram";

    public function category()
    {
    	return $this->belongsTo('App\Models\Category','categories_id');
    }
}
