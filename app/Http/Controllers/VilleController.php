<?php

namespace App\Http\Controllers;

use App\Models\Ville;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class VilleController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            "nom_ville" => "required|min:2|unique:villes,nom_ville",
            "pays" => "required|min:2",
        ]);

        Ville::create([
            "nom_ville" => $request->nom_ville,
            "pays" => $request->pays,
        ]);

        return to_route('villes');
    }
    public function index()
    {
        $villes = Ville::orderBy('created_at','DESC')->get();

        return view('pages.admine.villes',["villes" => $villes]);
    }

    public function edit(Ville $ville)
    {
        $data = Ville::find($ville->id);
        return view('pages.admine.ville-update',['ville' => $data]);
    }

    public function update(Request $request,Ville $ville)
    {
        $request->validate([
            "nom_ville" => [
                "required","min:2",Rule::unique('villes')->ignore($ville->nom_ville,'nom_ville')
            ],
            "pays" => "required|min:2",
        ]);

        $ville->update([
            "nom_ville" => $request->nom_ville,
            "pays" => $request->pays,
        ]);

        return to_route('villes');
    }

    public function destroy(Ville $ville)
    {
        $ville->delete();
        return to_route('villes');
    }
}
