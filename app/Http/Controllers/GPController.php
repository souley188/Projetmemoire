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
   

public function gpdashboard(){
  return view('pages.GP.gpdashboard');    
}


}
