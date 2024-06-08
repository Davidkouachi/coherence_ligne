<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nom',
        'tel',
        'email',
        'description',
        'adresse_id',
        'secteur_id',
        'type_id',
    ];

    public function adresse()
    {
        return $this->belongsTo(Adresse::class, 'adresse_id');
    }

    public function secteur()
    {
        return $this->belongsTo(Secteur::class, 'secteur_id');
    }

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }
}
