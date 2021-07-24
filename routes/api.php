<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Avis_statController;
use App\Http\Controllers\AvisController;
use App\Http\Controllers\CollaborateurController;
use App\Http\Controllers\CommController;
use App\Http\Controllers\EiController;
use App\Http\Controllers\Godelieve_securController;
use App\Http\Controllers\ImController;
use App\Http\Controllers\Notice_statController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\Ordonnance_ProtocoleController;
use App\Http\Controllers\Protocole_statController;
use App\Http\Controllers\ProtocoleController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\TopController;
use App\Http\Controllers\UtilisateurController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Public routes

    //Register
    Route::post('/Register',[AuthController::class, 'register']);

    //Login
    Route::post('/Login',[AuthController::class, 'Login']);

    //Avis_stat
    Route::get('/Avis_Stat',[Avis_statController::class, 'index']);
    Route::get('/Avis_Stat/{id}',[Avis_statController::class, 'show']);

    //Avis
    Route::get('/Avis',[AvisController::class, 'index']);
    Route::get('/Avis/{id}',[AvisController::class, 'show']);

    //Collaborateur
    Route::get('/Collaborateurs',[CollaborateurController::class, 'index']);
    Route::get('/Collaborateurs/{id}',[CollaborateurController::class, 'show']);
    Route::get('/Collaborateurs/search/{nom}',[CollaborateurController::class, 'search']);

    //comm
    Route::get('/commentaires',[CommController::class, 'index']);
    Route::get('/commentaires/{id}',[CommController::class, 'show']);

    //Ei
    Route::get('/Eis',[EiController::class, 'index']);
    Route::get('/Eis/{id}',[EiController::class, 'show']);

    //Godelieves_security
    Route::get('/Godelieves_security',[Godelieve_securController::class, 'index']);
    Route::get('/Godelieves_security/{id}',[Godelieve_securController::class, 'show']);

    //Im
    Route::get('/Im',[ImController::class, 'index']);
    Route::get('/Im/{id}',[ImController::class, 'show']);

    //Notice_stat
    Route::get('/Notice_stat',[Notice_statController::class, 'index']);
    Route::get('/Notice_stat/{id}',[Notice_statController::class, 'show']);

    //Notice
    Route::get('/Notices',[NoticeController::class, 'index']);
    Route::get('/Notices/{id}',[NoticeController::class, 'show']);

    //Ordonnace_protocole
    Route::get('/Ordonnace_protocoles',[Ordonnance_ProtocoleController::class, 'index']);
    Route::get('/Ordonnace_protocoles/{id}',[Ordonnance_ProtocoleController::class, 'show']);

    //protocole_stat
    Route::get('/protocole_stats',[Protocole_statController::class, 'index']);
    Route::get('/protocole_stats/{id}',[Protocole_statController::class, 'show']);

    //Protocole
    Route::get('/Protocoles',[ProtocoleController::class, 'index']);
    Route::get('/Protocoles/{id}',[ProtocoleController::class, 'show']);

    //Reference
    Route::get('/References',[ReferenceController::class, 'index']);
    Route::get('/References/{id}',[ReferenceController::class, 'show']);

    //Top
    Route::get('/Tops',[TopController::class, 'index']);
    Route::get('/Tops/{id}',[TopController::class, 'show']);

    //Utilisateur
    Route::get('/Utilisateurs',[UtilisateurController::class, 'index']);
    Route::get('/Utilisateurs/{id}',[UtilisateurController::class, 'show']);

//Protected routes
Route::group(['middleware'=>['auth:sanctum']],function(){
    //Avis stat
    Route::post('/Avis_Stat',[Avis_statController::class, 'store']);
    Route::put('/Avis_Stat/{id}',[Avis_statController::class, 'update']);
    Route::delete('/Avis_Stat/{id}',[Avis_statController::class, 'destroy']);

    //Utilisateur
    Route::delete('/Utilisateurs/{id}',[UtilisateurController::class, 'destroy']);
    Route::put('/Utilisateurs/{id}',[UtilisateurController::class, 'update']);
    Route::post('/Utilisateurs',[UtilisateurController::class, 'store']);

    //Top
    Route::delete('/Tops/{id}',[TopController::class, 'destroy']);
    Route::put('/Tops/{id}',[TopController::class, 'update']);
    Route::post('/Tops',[TopController::class, 'store']);

    //Notice
    Route::put('/Notices/{id}',[NoticeController::class, 'update']);
    Route::delete('/Notices/{id}',[NoticeController::class, 'destroy']);
    Route::post('/Notices',[NoticeController::class, 'store']);

    //Notice stat
    Route::put('/Notice_stat/{id}',[Notice_statController::class, 'update']);
    Route::delete('/Notice_stat/{id}',[Notice_statController::class, 'destroy']);
    Route::post('/Notice_stat',[Notice_statController::class, 'store']);

    //Collaborateur
    Route::put('/Collaborateurs/{id}',[CollaborateurController::class, 'update']);
    Route::delete('/Collaborateurs{id}',[CollaborateurController::class, 'destroy']);
    Route::post('/Collaborateurs',[CollaborateurController::class, 'Store']);

    //Reference
    Route::put('/References/{id}',[ReferenceController::class, 'update']);
    Route::delete('/References/{id}',[ReferenceController::class, 'destroy']);
    Route::post('/References',[ReferenceController::class, 'store']);

    //Protocole stat
    Route::put('/protocole_stats/{id}',[Protocole_statController::class, 'update']);
    Route::delete('/protocole_stats/{id}',[Protocole_statController::class, 'destroy']);
    Route::post('/protocole_stats',[Protocole_statController::class, 'store']);

    //Protocole
    Route::put('/Protocoles/{id}',[ProtocoleController::class, 'update']);
    Route::delete('/Protocoles/{id}',[ProtocoleController::class, 'destroy']);
    Route::post('/Protocoles',[ProtocoleController::class, 'store']);

    //Ordonnance protocole
    Route::put('/Ordonnace_protocoles/{id}',[Ordonnance_ProtocoleController::class, 'update']);
    Route::delete('/Ordonnace_protocoles/{id}',[Ordonnance_ProtocoleController::class, 'destroy']);
    Route::post('/Ordonnace_protocoles',[Ordonnance_ProtocoleController::class, 'store']);

    //Im
    Route::put('/Im/{id}',[ImController::class, 'update']);
    Route::delete('/Im/{id}',[ImController::class, 'destroy']);
    Route::post('/Im',[ImController::class, 'store']);

    //Comm
    Route::put('/commentaires/{id}',[CommController::class, 'update']);
    Route::delete('/commentaires/{id}',[CommController::class, 'destroy']);
    Route::post('/commentaires',[CommController::class, 'store']);

    //Ei
    Route::put('/Eis/{id}',[EiController::class, 'update']);
    Route::delete('/Eis/{id}',[EiController::class, 'destroy']);
    Route::post('/Eis',[EiController::class, 'store']);

    //Godelieve secur
    Route::put('/Godelieves_security/{id}',[Godelieve_securController::class, 'update']);
    Route::delete('/Godelieves_security/{id}',[Godelieve_securController::class, 'destroy']);
    Route::post('/Godelieves_security',[Godelieve_securController::class, 'store']);

    //Avis
    Route::put('/Avis/{id}',[AvisController::class, 'update']);
    Route::delete('/Avis/{id}',[AvisController::class, 'destroy']);
    Route::post('/Avis',[AvisController::class, 'store']);

    //Loggout
    Route::post('/Loggout',[AuthController::class, 'Logout']);

});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
