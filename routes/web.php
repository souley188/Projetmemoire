<?php

use App\Http\Controllers\GPcontroller;
use App\Http\Controllers\VilleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
})->name('index');

Route::get('/suivre-un-colis', function () {
    return view('pages.colis');
})->name('colis');
Route::get('/reclamation', function () {
    return view('pages.reclamation');
})->name('reclamation');

Route::get('/cherchez-gp', function () {
    return view('pages.cherchez-gp');
})->name('cherchez-gp');
Route::get('/espace-client', function () {
    return view('pages.espace-client');
})->name('espace-client');


use App\Http\Controllers\AuthController;
use App\Http\Controllers\ColisController;
use App\Http\Controllers\ReclamationController;

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register'])->name('auth.register');

// Routes nécessitant une authentification
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('admin');

/*Route::get('/ville', function () {
    return view('pages.admine.villes');
})->name('villes');*/

Route::post('ville',[VilleController::class,'store'])->name('ville.store');
Route::get('ville',[VilleController::class,'index'])->name('villes');
Route::delete('ville/{ville}',[VilleController::class,'destroy'])->name('delete.ville');

Route::get('ville/edit/{ville}',[VilleController::class,'edit'])->name('ville.edit');
Route::put('ville/update/{ville}',[VilleController::class,'update'])->name('ville.update');

Route::get('GP',[GPcontroller::class,'liste_gp'])->name('GP1');
Route::get('cherchez-gp', [GPController::class, 'gp_liste'])->name('cherchez-gp');
Route::get('gp/edit/{gp}',[GpController::class,'edit'])->name('gp.edit');
Route::post('gp',[GPcontroller::class,'store'])->name('gp.store');
Route::get('infosgp',[GPcontroller::class,'infosgp'])->name('infos.gp');
Route::get('gpdashboard',[GPcontroller::class,'gpdashboard'])->name('dashboard.gp');
Route::get('maingp',[GPcontroller::class,'gpmain'])->name('main.gp');
Route::get('/gp/{id}', [GpController::class, 'show'])->name('info.gp');
Route::get('coli', [ColisController::class, 'affichecolis'])->name('coli');
Route::get('toutcommande', [ColisController::class, 'affichetout'])->name('toutcommande');
Route::get('/changer-etat/{id}/{nouvel_etat}', [ColisController::class, 'changerEtat'])->name('changer.etat');
Route::get('attentecommande', [ColisController::class, 'afficheattente'])->name('attentecommande');
Route::get('livrercommande', [ColisController::class, 'affichelivrer'])->name('livrercommande');
Route::get('annulercommande', [ColisController::class, 'afficheannuler'])->name('annulercommande');
Route::get('toutcommandeUser', [ColisController::class, 'affichertoutUser'])->name('toutcommandeUser');
Route::get('attentecommandeUser', [ColisController::class, 'afficherattenteUser'])->name('attentecommandeUser');
Route::get('livrercommandeUser', [ColisController::class, 'afficherlivrerUser'])->name('livrercommandeUser');
Route::get('annulercommandeUser', [ColisController::class, 'afficherannulerUser'])->name('annulercommandeUser');
Route::get('/depot/create', [ColisController::class, 'create'])->name('depot.create');
Route::post('/depot/store', [ColisController::class, 'store'])->name('depot.store');
Route::get('showcolis', [ColisController::class, 'showcolis'])->name('showcolis');
Route::get('/reclamation', [ColisController::class, 'afficheReclamation'])->name('reclamation');

Route::post('reclamation',[Reclamationcontroller::class,'store'])->name('reclamation.store');
Route::post('/depotcolis', [ColisController::class, 'store'])->name('depotcolis.store');