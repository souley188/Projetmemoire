<?php

namespace App\Http\Controllers;


use App\Models\Commande;
use App\Models\Gp;
use App\Models\User;
use Illuminate\Http\Request;

class ColisController extends Controller
{
    public function affichecolis(){
        return view('pages.admine.colis');
    }


   public function affichetout(){
    $commandes = Commande::all();
     $user= User::all();
     $gp = Gp::all();
    return view('pages.admine.toutcommande', compact('commandes','user','gp','colis'));
    
   }
   


       public function changerEtat($id, $nouvel_etat)
    {
        $commande = Commande::findOrFail($id); // Trouver la commande par son ID

        // Mettre à jour l'état de la commande en fonction de la valeur reçue
        $commande->etape = (string) $nouvel_etat; // Convertir en chaîne de caractères pour éviter les erreurs de type
        $commande->save(); // Sauvegarder les changements

        return redirect()->back()->with('status', 'État de la commande mis à jour!'); // Rediriger vers la page précédente avec un message de statut
    }
   
    public function afficheReclamation()
{
    $commandes = Commande::with(['gp'])->where('user_id',auth()->user()->id)->get(); // Récupérer les commandes avec les relations nécessaires
    return view('pages.reclamation', compact('commandes'));
}
