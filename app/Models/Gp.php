<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gp extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_gp',
        'montant',
        'ville_depart_id',
        'ville_arrive_id',
        'date_depart',
        'date_arrive',
        'user_id',
        'contact_gp_id'
        
    ];

    public function ville_depart()
    {
        return $this->belongsTo(Ville::class);
    }

    public function ville_arrive()
    {
        return $this->belongsTo(Ville::class);
    }
    public function contact_gp()
    {
        return $this->belongsTo(ContactGp::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function commandes()
    {
        return $this->hasMany(Commande::class);
    }
   
}
