<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',"DestinosController@webpage_principal");
Route::get('dash', function () {
    return view('dashboard.formulario_destinos');
});

Route::get('login', function () {
    return view('dashboard.login');
})->name("login");
Route::get('destino/{id}', "DestinosController@destino_detalle")->name("Destinos_detalle");
///destinos
Route::get('Destinos', "DestinosController@index")->name("Destinos");
Route::post('Destinos', "DestinosController@store")->name("Destinos_post");
///charter
Route::get('Charter', "CharterController@index")->name("Charter");
Route::post('Charter', "CharterController@store")->name("Charter_post");
//ofertas
Route::get('Ofertas', "OfertasController@index")->name("Ofertas");
//paquetes
Route::get('Paquetes', "PaquetesController@index")->name("Paquetes");
Route::post('Paquetes', "PaquetesController@store")->name("Paquetes_post");

//ventas
Route::get('Ventas', "VentasController@index")->name("Ventas");
Route::post('Ventas', "VentasController@store")->name("Ventas_post");

//informacion
Route::get('Informacion', "InformacionController@index")->name("Info");

Route::post('Informacion', "InformacionController@store")->name("Informacion_post");

Route::get('storage/{archivo}', function ($nombre) {
    $public_path = public_path();
    $url = $public_path.'/storage/'.$nombre;// depende de root en el archivo filesystems.php.
    //verificamos si el archivo existe y lo retornamos
    if (\Storage::exists($nombre))
    {
        return response()->download($url);
    }
    //si no se encuentra lanzamos un error 404.
    abort(404);
  
  });