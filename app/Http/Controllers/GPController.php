<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\GP;
use App\Models\ContactGp;
use App\Models\UserGp;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Ville;


class GPcontroller extends Controller
{
   


  public function gpdashboard()
  {
    return view('pages.GP.gpdashboard');    
  }

  public function infosgp()
  {
    //dd("ok");
    $user_gp = UserGp::where('user_id',auth()->user()->id)->first();
    return view('pages.GP.infosgp',compact("user_gp"));    
  }

  public function store(Request $request)
  {
   // dd($request->all());

    $request->validate([
        //"user_id" => auth()->user()->id,
        "nom_gp" => "required|min:3|unique:user_gps,nom_gp",
        "email" => "required|email",
        "address" => "required|min:3",
        "telephone" => "required|min:5",
    ]);

    UserGp::create([
        "user_id" => auth()->user()->id,
        "nom_gp" => $request->nom_gp,
        "email" => $request->email,
        "address" => $request->address,
        "telephone" => $request->telephone,
    ]);

    return to_route('contactgp.store');
  }
  public function contactgp()
  {
     $user_gp = UserGp::where('user_id', auth()->user()->id)->first();
    $contacts = ContactGp::where('user_id', auth()->user()->id)->get();
    return view('pages.GP.contactgp', compact("user_gp", "contacts"));}

   public function contactstore(Request $request)
  {
   // dd($request->all());

    $request->validate([
        
        "nom" => "required|min:3",
        "adresse" => "required|min:3",
        "telephone" => "required|min:5",
    ]);

    ContactGp::create([
        "user_id" => auth()->user()->id,
        "nom" => $request->nom,
        "adresse" => $request->adresse,
        "telephone" => $request->telephone,
    ]);
    return to_route('contactgp.gp');
}

 public function annoncegp()
  {
    $villes = Ville::all();
      $gps = Gp::where('user_id', auth()->user()->id)->get();
     $user_gp = UserGp::where('user_id',auth()->user()->id)->first();
     $contact_gps = ContactGp::where('user_id',auth()->user()->id)->get();

     //dd($user_gp);

    return view('pages.GP.annoncegp',compact('villes','gps','contact_gps','user_gp'));    
  }

  public function villestore(Request $request)
  {
    $request->validate([
        
        "nom_ville" => "required|min:3|unique:villes,nom_ville",
        "pays" => "required|min:3",
        
    ]);

    Ville::create([
        "nom_ville" => $request->nom_ville,
        "pays" => $request->pays,
        
    ]);
    return to_route('ville.gp');   
  }

  public function ville()

  {
    $villes=Ville::all();
    return view('pages.admine.villegp',compact('villes')); 
  }
  public function gpstore(Request $request)
    {
      //dd($request);
        $validate = $request->validate([
         //'nom_gp'=> 'required|min:3',
         'montant'=> 'required|numeric',
         'ville_depart_id'=> 'required|exists:villes,id',
         'ville_arrive_id'=> 'required|exists:villes,id',
         'date_depart'=> 'required|date',
         'date_arrive'=> 'required|date',
         //'user_id' => 'required|exists:user_gps,id',
         'contact_gp_id' => 'required|exists:contact_gps,id'
        ]);

        //dd($validate);
        $validate['user_id'] = auth()->user()->id;
        //dd($validate);
        Gp::create($validate);

        return redirect()->back();
    }
    public function liste_gp(Request $request)
    {
        $villes = Ville::all();
        $gps = Gp::all();

        
        return view('Pages.GP.annoncegp',compact('villes','gps'));
    }
     public function gp_liste(Request $request)
    {
         $gps = Gp::with(['user','contact_gp'])->get();
        $villes = Ville::all();
        //dd($gps);
        return view('pages.cherchez-gp',compact('gps','villes'));
    }
    public function commandegp(){
            $gps = Gp::all();
            $villes = Ville::all();
         $contact_gps = ContactGp::where('user_id',auth()->user()->id)->get();

      return view('pages.commandegp',compact('gps','villes','contact_gps'));
    }
    public function commandestore(Request $request)
    {
       // dd($request->all());
        $validated = $request->validate([
            'gp_id' => 'required|exists:gps,id',
            'poids_colis' => 'required|numeric|min:0',
            'paiement_especes' => 'nullable|in:on,off',
        ]);
        
        
        $validated['user_id'] = auth()->user()->id;
        $validated['paiement_especes'] = ($request->paiement_especes == "on") ? true : false;
        //dd($validated);
        Commande::create($validated);

        return redirect()->route('index')->with('success', 'Commande créée avec succès.');
    }
     public function shows($id)
    {
        $gp = Gp::findOrFail($id); // Assurez-vous d'adapter cela à votre modèle GP

        return view('pages.GP.gpdetail', compact('gp'));
    }
}

