<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\GP;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Ville;

use function Laravel\Prompts\select;

class GPcontroller extends Controller
{
    public function liste_gp(Request $request)
    {
        $villes = Ville::all();
        $gps = Gp::all();
        return view('Pages.admine.GP',compact('villes','gps'));
    }
    public function gp_liste(Request $request)
    {

        $gps = Gp::all();
        return view('Pages.cherchez-gp',compact('gps'));
        
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
         'nom_gp'=> 'required|min:3',
         'montant'=> 'required|numeric',
         'ville_depart_id'=> 'required|exists:villes,id',
         'ville_arrive_id'=> 'required|exists:villes,id',
         'date_depart'=> 'required|date',
         'date_arrive'=> 'required|date',
         'user_id' => 'nullable|exists:users,id',
          'satisfaction' => 'required|string|max:255'
        ]);

        //dd($validate);
        Gp::create($validate);

        return redirect()->back();
    }
    public function commandegp(Gp $gp){
        //$gps = Gp::all();
        $gp = Gp::find($gp->id);
        //dd($gp);
       
        return view('pages.commandegp',compact('gp'));
        
    }
    
   public function infosgp(){
    return view('pages.infosgp');
   }
    




public function update(Request $request, Gp $gp)
{
    $request->validate([
     'nom_gp'=> 'required|min:3',
     'montant'=> 'required|numeric',
     'ville_depart_id'=> 'required|exists:villes,id',
     'ville_arrive_id'=> 'required|exists:villes,id',
     'date_depart'=> 'required|date',
     'date_arrive'=> 'required|date',
     'user_id' => 'nullable|exists:users,id'
    ]);

    //dd($validate);
    $gp->update([
        "nom_gp" => $request->nom_gp,
        "montant" => $request->montant,
        "ville_depart_id" => $request->ville_depart,
        "ville_arrive_id" => $request->ville_arrive,
        "date_depart" => $request->date_depart,
        "date_arrive" => $request->date_arrive,
    ]);

    return to_route('GP1');
}
public function edit($id)
{
    $gp = GP::findOrFail($id);
    $villes = Ville::all();
    return view('pages.admine.gp-update', compact('gp', 'villes'));
}
public function gpdashboard(){
  return view('pages.GP.gpdashboard');    
}
public function gpmain(){
    return view('pages.GP.maingp');    
  }
  public function show($id)
{
    $gp = GP::findOrFail($id);
    return view('gp.show', compact('gp'));
}

}
