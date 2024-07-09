<?php

use App\Http\Controllers\GPcontroller;
use App\Http\Controllers\VilleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ColisController;
use App\Http\Controllers\ReclamationController;

Route::get('/', function () {
    return view('pages.index');
})->name('index');

Route::get('/suivre-un-colis', function () {
    return view('pages.colis');
})->name('colis');

Route::get('/cherchez-gp', [GPController::class, 'gp_liste'])->name('cherchez-gp');

/*Route::get('/reclamation', function () {
    return view('pages.reclamation');
})->name('reclamation');*/

/*Route::get('/cherchez-gp', function () {
    return view('pages.cherchez-gp');
})->name('cherchez-gp');*/

Route::get('/espace-client', function () {
    return view('pages.espace-client');
})->name('espace-client');






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

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [AuthController::class, 'show'])->name('profile.show');
    Route::put('/profile/update', [AuthController::class, 'update'])->name('profile.update');
});

Route::get('/users/create', [AuthController::class, 'create'])->name('users.create');
Route::post('/users', [AuthController::class, 'store'])->name('users.store');

Route::get('/reclamation', [ColisController::class, 'afficheReclamation'])->name('reclamation')->middleware('auth');
 Route::get('commandegp',[GPcontroller::class,'commandegp'])->name('commande.gp');
 Route::post('commandegpstore',[GPcontroller::class,'commandestore'])->name('commandestore.gp');


Route::post('reclamation',[Reclamationcontroller::class,'store'])->name('reclamation.store'); 
Route::get('affichecolis',[Coliscontroller::class,'affichecolis'])->name('affichecolis.store'); 
Route::get('affichetout',[Coliscontroller::class,'affichetout'])->middleware('auth')->name('affichetout.store'); 
Route::get('/commandes', [Coliscontroller::class, 'toutcommande'])->middleware('auth')->name('toutcommande');
Route::get('/commandes/attente', [Coliscontroller::class, 'attentecommande'])->middleware('auth')->name('attentecommande');
Route::get('/commandes/changeretat/{id}/{nouvel_etat}', [ColisController::class, 'changerEtat'])->name('changer.etat');
Route::get('/commandes/livrer', [Coliscontroller::class, 'livrercommande'])->middleware('auth')->name('livrercommande');
Route::get('/commandes/annuler', [Coliscontroller::class, 'annulercommande'])->middleware('auth')->name('annulercommande');
Route::get('/commandes/attenteUser', [Coliscontroller::class, 'attentecommandeUser'])->middleware('auth')->name('attentecommandeUser');
Route::get('/commandes/toutcommandeUser', [Coliscontroller::class, 'toutcommandeUser'])->middleware('auth')->name('toutcommandeUser');
Route::get('/commandes/livrercommandeUser', [Coliscontroller::class, 'livrercommandeUser'])->middleware('auth')->name('livrercommandeUser');
Route::get('/commandes/annulercommandeUser', [Coliscontroller::class, 'annulercommandeUser'])->middleware('auth')->name('annulercommandeUser');
Route::get('/gp/{id}',[ GPController::class, 'shows'])->name('commande.gp.detail');
Route::get('/reclamations/{id}', [ReclamationController::class,'show'])->name('reclamation.show');
Route::get('/reclamations', [ReclamationController::class, 'index'])->name('reclamations.index');


Route::prefix('gp')->group(function(){
   


    Route::get('liste/infos', [GPController::class, 'infosgp'])
        ->middleware('auth')->name('dashboard.gp');

    Route::get('liste/contactgp', [GPController::class, 'contactgp'])->middleware('auth')->name('contactgp.gp');
    Route::post('liste/contactgp', [GPController::class, 'contactstore'])->middleware('auth')->name('contactstore.gp');
    Route::get('liste/annoncegp', [GPController::class, 'annoncegp'])->middleware('auth')->name('annonce.gp');
    Route::get('liste/villegp', [GPController::class, 'ville'])->middleware('auth')->name('ville.gp');
    Route::post('gp',[GPController::class,'gpstore'])->name('gp.store');
    Route::get('GP',[GPController::class,'liste_gp'])->name('GP1');

    Route::post('liste/villegp', [GPController::class, 'villestore'])->middleware('auth')->name('villestore.gp');


    Route::post('liste/infosgp', [GPController::class, 'store'])->middleware('auth')
        ->name('contactgp.store');
        


    //Route::get('gpdashboard',[GPcontroller::class,'gpdashboard'])->name('dashboard.gp');
});