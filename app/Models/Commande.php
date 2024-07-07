<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $fillable =[
        'users_id',
        'gp_id',
        'colis_id',
        'code',
        'expediteur_nom',
        'expediteur_prenom',
        'expediteur_email',
        'expediteur_telephone',
        'destinataire_nom',
        'destinataire_prenom',
        'destinataire_email',
        'destinataire_telephone',
        'poids_colis',
        'paiement_especes'


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