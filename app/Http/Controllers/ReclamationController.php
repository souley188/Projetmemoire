<?php

namespace App\Http\Controllers;

use App\Models\Reclamation;
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

   
    
}

    
    