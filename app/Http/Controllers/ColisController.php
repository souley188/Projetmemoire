<?php

namespace App\Http\Controllers;


use App\Models\Commande;
use App\Models\Gp;
use App\Models\User;
use Illuminate\Http\Request;

class ColisController extends Controller
{
    public function affichecolis(){
        return view('pages.gp.colis');
    }


   public function affichetout(){
   $commandes = Commande::with(['gp'])->where('user_id',auth()->user()->id)->get();
     $user= User::all();
     $gp = Gp::all();
    return view('pages.gp.toutcommande', compact('commandes','user','gp'));
    
   }
   


    public function changerEtat($id, $nouvel_etat)
    {
        $commande = Commande::findOrFail($id); // Trouver la commande par son ID

        // Mettre à jour l'état de la commande en fonction de la valeur reçue
        $commande->etat = (string) $nouvel_etat; // Convertir en chaîne de caractères pour éviter les erreurs de type
        $commande->save(); // Sauvegarder les changements

        return redirect()->back()->with('status', 'État de la commande mis à jour!'); // Rediriger vers la page précédente avec un message de statut
    }
   
    public function afficheReclamation()
    {
        $commandes = Commande::with(['gp'])->where('user_id',auth()->user()->id)->get(); // Récupérer les commandes avec les relations nécessaires
        return view('pages.reclamation', compact('commandes'));
    }
 public function toutcommande()
    {
         $commandes = Commande::all();
        return view('pages.gp.toutcommande', compact('commandes'));
    }
     public function attentecommande()
    {
        $commandes = Commande::where('etat', 'en_attente')->get();
        return view('pages.gp.attentecommande', compact('commandes'));
    }
    public function livrercommande()
    {
        $commandes = Commande::where('etat', 'livrer')->get();
        return view('pages.gp.livrercommande', compact('commandes'));
    }
     public function annulercommande()
    {
        $commandes = Commande::where('etat', 'annuler')->get();
        return view('pages.gp.annulercommande', compact('commandes'));
    }

    public function toutcommandeUser()
    {
       $commandes = Commande::with(['gp'])->where('user_id',auth()->user()->id)->get();
        return view('pages.CommandesUser.affichertoutUser', compact('commandes'));
    }
     public function attentecommandeUser()
    {
        $commandes = Commande::where('etat', 'en_attente')->get();
        return view('pages.CommandesUser.afficherattenteUser', compact('commandes'));
    }
    public function livrercommandeUser()
    {
        $commandes = Commande::where('etat', 'livrer')->get();
        return view('pages.CommandesUser.afficherlivrerUser', compact('commandes'));
    }
     public function annulercommandeUser()
    {
        $commandes = Commande::where('etat', 'annuler')->get();
        return view('pages.CommandesUser.afficherannulerUser', compact('commandes'));
    }

}