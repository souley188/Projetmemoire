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
    public function afficheattente()
    {
        $commandes = Commande::where('etape', 'en_attente')->get();
        $users = User::all();
        $gps = Gp::all();
        return view('pages.admine.attentecommande', compact('commandes', 'users', 'gps'));
    }

    public function affichelivrer()
    {
        $commandes = Commande::where('etape', 'livrer')->get();
        $users = User::all();
        $gps = Gp::all();
        return view('pages.admine.livrercommande', compact('commandes', 'users', 'gps'));
    }

    public function afficheannuler()
    {
        $commandes = Commande::where('etape', 'annuler')->get();
        $users = User::all();
        $gps = Gp::all();
        return view('pages.admine.annulercommande', compact('commandes', 'users', 'gps'));
    }

    public function affichertoutUser()
    {
        $commandes = Commande::where('user_id',auth()->user()->id)->get();
        return view('pages.CommandesUser.affichertoutUser', compact('commandes'));
    }
    public function afficherattenteUser()
    {
        $commandes = Commande::where('user_id',auth()->user()->id )->where('etape', 'en_attente')->get();
        return view('pages.CommandesUser.afficherattenteUser', compact('commandes'));
    }
    public function afficherlivrerUser()
    {
        $commandes = Commande::where('user_id',auth()->user()->id )->where('etape', 'livrer')->get();
        return view('pages.CommandesUser.afficherlivrerUser', compact('commandes'));
    }
    public function afficherannulerUser()
    {
        $commandes = Commande::where('user_id',auth()->user()->id )->where('etape', 'annuler')->get();
        return view('pages.CommandesUser.afficherannulerUser', compact('commandes'));
    }
    public function afficheReclamation()
{
    $commandes = Commande::with(['gp'])->where('user_id',auth()->user()->id)->get(); // Récupérer les commandes avec les relations nécessaires
    return view('pages.reclamation', compact('commandes'));
}
public function create(){  
    $gps = Gp::all(); 
    $users = User::all();
    return view('pages.GP.depotcolis',compact('gps','users'));    
  }
 

    public function store(Request $request)
    {
    
        $validated =$request->validate([
            'expediteur_nom' => 'required|string|max:100',
            'expediteur_prenom' => 'required|string|max:100',
            'expediteur_email' => 'required|email|max:100',
            'expediteur_telephone' => 'required|string|max:20',
            'destinataire_nom' => 'required|string|max:100',
            'destinataire_prenom' => 'required|string|max:100',
            'destinataire_email' => 'required|email|max:100',
            'destinataire_telephone' => 'required|string|max:20',
            'poids_colis' => 'required|numeric|min:0',
            'paiement_especes' => 'boolean',
             'gp_id' => 'required|exists:gp,id', 
            'users_id' => 'nullable|exists:users,id'
        ]);
        Commande::create($validated);
         
        return view('')->with('success', 'Le colis a été envoyé avec succès.');
    }

    public function showcolis(){
        return view('pages.GP.showcolis');
    }
}
