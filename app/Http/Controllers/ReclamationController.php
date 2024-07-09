<?php

namespace App\Http\Controllers;

use App\Models\Reclamation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ReclamationController extends Controller
{
   
    public function store(Request $request)
    {
        
        $validated = $request->validate([
                "message" => "required|min:2",
                "commande_id" => "exists:commandes,id",
        ]);
        //dd($validated);
        
        
        Reclamation::create($validated);
        
        return redirect('/')->with('success', 'Reclamation valider avec succès.');
        
        
    }
    public function show($id)
{
    $reclamation = Reclamation::findOrFail($id);
    // Vous pouvez également vérifier si l'utilisateur actuel a le droit de voir cette réclamation
    
    return view('pages.GP.reclamationshow', compact('reclamation'));
}
public function index()
    {
        
        $reclamations = Reclamation::with('user')->get();
        return view('pages.GP.reclamations', compact('reclamations'));
    }

   
    
}

    
    