<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/teste', function () {
    return "TESTADO!!!";
});
Route::get('/lista-usuarios', function () {
    $usuarios = User::all();
    return view('listaUsuarios', compact('usuarios'));
})->name('lista-usuarios');


Route::view('/cadastra-usuario','cadastraUsuarios');


Route::post('/salva-usuario', 
    function(Request $request){

    $usuario = new User();
    $usuario->usuario = $request->input('usuario');
    $usuario->nome = $request->input('nome');
    $usuario->bio = $request->input('bio');
    $usuario->email = $request->input('email');
    $usuario->senha = $request->input('senha');
    $usuario->save();

    return "Salvo com sucesso!!";

})->name('salva-usuario');