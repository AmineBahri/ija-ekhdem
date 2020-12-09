<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\PersonneMoraleController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/test',[TestController::class, 'test']);

Route::get('/',[TestController::class, 'index']);

Route::post('/search',[TestController::class, 'search']);

Route::get('/consulter-offre/{id}',[TestController::class, 'consulterOffre']);

Route::post('/signin',[UtilisateurController::class, 'signIn']);

Route::post('/signup',[UtilisateurController::class, 'signUp']);

Route::get('/help',[TestController::class, 'help']);

Route::get('/contact',[TestController::class, 'contact']);

Route::post('/send-message',[TestController::class, 'sendEmail']);

Route::post('/sendmail',[TestController::class, 'sendMail']);

Route::get('/register',[UtilisateurController::class, 'register']);

Route::post('/signuppers',[PersonneMoraleController::class, 'signUppers']);

Route::get('/login',[UtilisateurController::class, 'login']);

Route::post('/signinp',[PersonneMoraleController::class, 'signInp']);

Route::group(['middleware' => 'check'], function() {

  Route::get('/dashboard',[PersonneMoraleController::class, 'dashboardEmpl']);

  Route::get('/addoffre',[PersonneMoraleController::class, 'addOffre']);

  Route::post('/storeoffre',[PersonneMoraleController::class, 'storeOffre']);

  Route::get('/show/{id}',[PersonneMoraleController::class, 'show']);

  Route::get('/delete/{id}',[PersonneMoraleController::class, 'delete']);

  Route::get('/edit/{id}',[PersonneMoraleController::class, 'edit']);

  Route::post('/update/{id}',[PersonneMoraleController::class, 'updateOffre']);

  Route::get('/consulterdemande/{id}',[PersonneMoraleController::class, 'consulterDemande']);

  Route::get('/accept/{id}/{ido}',[PersonneMoraleController::class, 'accept']);

  Route::get('/refuse/{id}/{ido}',[PersonneMoraleController::class, 'refuse']);

  Route::get('/parametres',[PersonneMoraleController::class, 'parametres']);

  Route::post('/updatepers',[PersonneMoraleController::class, 'updatePers']);

  Route::get('/deletepers/{id}',[PersonneMoraleController::class, 'deletePers']);

  Route::get('/logout',[PersonneMoraleController::class, 'logout']);

});

Route::get('/forget-password-pers',[PersonneMoraleController::class, 'forgetPers']);

Route::post('/verif-mail-pers',[PersonneMoraleController::class, 'verifMailPers']);

Route::get('/initialiser-mdp-personne',[PersonneMoraleController::class, 'initialiserMdpPersonne']);

Route::post('/update-psw-personne',[PersonneMoraleController::class, 'updatePswPers']);

/*Route::get('/dashboard',[PersonneMoraleController::class, 'dashboardEmpl'])->middleware('check');

Route::get('/addoffre',[PersonneMoraleController::class, 'addOffre']);

Route::post('/storeoffre',[PersonneMoraleController::class, 'storeOffre']);

Route::get('/show/{id}',[PersonneMoraleController::class, 'show']);

Route::get('/delete/{id}',[PersonneMoraleController::class, 'delete']);

Route::get('/edit/{id}',[PersonneMoraleController::class, 'edit']);

Route::post('/update/{id}',[PersonneMoraleController::class, 'updateOffre']);

Route::get('/consulterdemande/{id}',[PersonneMoraleController::class, 'consulterDemande']);

Route::get('/accept/{id}/{ido}',[PersonneMoraleController::class, 'accept']);

Route::get('/refuse/{id}/{ido}',[PersonneMoraleController::class, 'refuse']);

Route::get('/parametres',[PersonneMoraleController::class, 'parametres']);

Route::post('/updatepers',[PersonneMoraleController::class, 'updatePers']);

Route::get('/deletepers/{id}',[PersonneMoraleController::class, 'deletePers']);

Route::get('/logout',[PersonneMoraleController::class, 'logout']);*/

Route::group(['middleware' => 'user'], function() {
 
 Route::get('/dashboard-user',[UtilisateurController::class,'dashboardUser']);

 Route::post('/user-search',[UtilisateurController::class,'userSearch']);

 Route::get('/postuler/{id}',[UtilisateurController::class, 'postuler']);

 Route::post('/confirm-offre/{id}',[UtilisateurController::class, 'confirmOffre']);

 Route::get('/list-project',[UtilisateurController::class,'listProject']);

 Route::get('/parametres-user',[UtilisateurController::class,'parametresUser']);

 Route::post('/updateuser',[UtilisateurController::class,'updateUser']);

 Route::get('/deleteuser/{id}',[UtilisateurController::class,'deleteUser']);

 Route::get('/logout-user',[UtilisateurController::class, 'logoutUser']);

});

Route::get('/forget-password-user',[UtilisateurController::class, 'forgetUser']);

Route::post('/verif-mail-user',[UtilisateurController::class, 'verifMail']);

Route::get('/initialiser-mdp-user',[UtilisateurController::class, 'initialiserMdp']);

Route::post('/update-psw-user',[UtilisateurController::class, 'updatePswUser']);

/*Route::get('/dashboard-user',[UtilisateurController::class,'dashboardUser']);

Route::get('/parametres-user',[UtilisateurController::class,'parametresUser']);

Route::post('/updateuser',[UtilisateurController::class,'updateUser']);

Route::get('/deleteuser/{id}',[UtilisateurController::class,'deleteUser']);

Route::get('/logout-user',[UtilisateurController::class, 'logoutUser']);*/

Route::get('/login-admin',[AdminController::class, 'loginAdmin']);

Route::post('/sign-in-admin',[AdminController::class, 'signInAdmin']);

Route::get('/dashboard-admin',[AdminController::class, 'dashboardAdmin']);

Route::get('/logout-admin',[AdminController::class, 'logoutAdmin']);