<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
   

    use HasFactory;

    protected $fillable = [
        'gp_id',
        'user_id',
        'poids_colis',
        'paiement_especes',
        'etat'
    ];

   


public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function gp()
    {
        return $this->belongsTo(Gp::class);
    }
   
}