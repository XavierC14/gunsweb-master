<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\PuntoentregaController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::post("signup", [usercontroller::class, "signup"]);
Route::post("login", [usercontroller::class, "login"]);

Route::group(['middleware' => ["auth:sanctum"]], function () {
    Route::get("userprofile", [usercontroller::class, "userprofile"]);
    Route::get("logout", [usercontroller::class, "logout"]);
    Route::put("update/{id}", [usercontroller::class, "update"]);
});
Route::get("indexu", [UserController::class, "indexu"]);
//Route::post("createu",[UserController::class,"createu"]);
//Route::get("readu",[UserController::class,"readu"]);
Route::put("updateu/{id}", [UserController::class, "updateu"]);
Route::delete("deleteu/{id}", [UserController::class, "deleteu"]);

Route::get("indexpu", [PuntoentregaController::class, "indexpu"]);
Route::post("createpu", [PuntoentregaController::class, "createpu"]);
//Route::get("readpu",[PuntoentregaController::class,"readpu"]);
Route::put("updatepu/{id}", [PuntoentregaController::class, "updatepu"]);
Route::delete("deletepu/{id}", [PuntoentregaController::class, "deletepu"]);

Route::get("indexpe", [PedidosController::class, "indexpe"]);
Route::post("createpe", [PedidosController::class, "createpe"]);
//Route::get("readpe",[PedidosController::class,"readpe"]);
Route::put("updatepe/{id}", [PedidosController::class, "updatepe"]);
Route::delete("deletepe/{id}", [PedidosController::class, "deletepe"]);

Route::get("indexm", [MaterialController::class, "indexm"]);
Route::post("createm", [MaterialController::class, "createm"]);
//Route::get("readm",[MaterialController::class,"readm"]);
Route::put("updatem/{id}", [MaterialController::class, "updatem"]);
Route::delete("deletem/{id}", [MaterialController::class, "deletem"]);

Route::get("indexc", [CategoriaController::class, "indexc"]);
Route::post("createc", [CategoriaController::class, "createc"]);
//Route::get("readc",[CategoriaController::class,"readc"]);
Route::put("updatec/{id}", [CategoriaController::class, "updatec"]);
Route::delete("deletec/{id}", [CategoriaController::class, "deletec"]);

Route::group(['middleware' => ["auth:sanctum"]], function () {
});
