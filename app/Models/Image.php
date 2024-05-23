<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produit;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'path',
    ];

    public function Produit()
    {
        return $this->belongsTo(Produit::class);
    }
}
