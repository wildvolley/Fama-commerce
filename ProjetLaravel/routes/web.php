<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;   //laravel 8.x implique importation du controller

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('/', function () {
    return view('welcome');

});

Route::get('/a_propos', function () {
    return view('pages.apropos');

});

Route::get('/services/{nom}/{id}', function ($nom, $id) {
    return "<h1>Bienvenue ".$nom. " votre id ".$id."</h1>";

});


*/

/***************************Routes frontend**************************************** */
Route::get('/', [PagesController::class, 'accueil']);
Route::get('/shop', [PagesController::class, 'shop']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/panier', [PagesController::class, 'panier']);
Route::get('/paiement', [PagesController::class, 'paiement']);
Route::get('/inscription', [PagesController::class, 'inscription']);
Route::get('/login', [PagesController::class, 'login']);
Route::get('/details', [PagesController::class, 'details']);

/***************************Routes backend**************************************** */
Route::get('/admin', [PagesController::class, 'tableauDeBord']);



/******************************************************************* */

Route::get('/accueil', [PagesController::class, 'welcome']);
Route::get('/home', [PagesController::class, 'home']);
Route::get('/a_propos', [PagesController::class, 'apropos']);
Route::get('/services', [PagesController::class, 'services']);
Route::get('/show/{id}', [PagesController::class, 'show']);
Route::get('/create', [PagesController::class, 'formulaireCreate']); // Formulaire
Route::post('/ajout_produit', [PagesController::class, 'ajoutProduit']);
Route::get('/editer_produit/{id}', [PagesController::class, 'formulaireEditer']);  // Formulaire
Route::post('/modifier_produit', [PagesController::class, 'modifierProduit']);
Route::get('/supprimer_produit/{id}', [PagesController::class, 'supprimerProduit']);  // 


//Route::get('/home', 'PagesController@home');   //  /url, NomController@nomfunction    Laravel 7.x
//Route::get('/home', [PagesController::class, 'home']);   //  /url, NomController::class nomfunction   Laravel 8.x
//Route::get('/services/{nom}/{id}', [PagesController::class, 'services']);





