<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produit;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
    ];

    public function produits()
    {
        return $this->hasMany(Produit::class);
    }
}
