<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $posts = Post::all();
    return view('inicial', compact('posts'));
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

Route::view('/login','login')->name('login');

Route::post('/logar',function (Request $request){

    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'senha' => ['required'],
    ]);

    if (Auth::attempt(['email'=>$credentials['email'], 'password'=>$credentials['senha']])) {
        $request->session()->regenerate();
       return redirect()->intended('/');
       //return logado com sucesso
    } 
    return "Erro ao logar! Usuário ou senha inválidos";
});

route::middleware(['auth'])->group(function () {
Route::view('/cria-post','criaPost');
Route::post('/salva-post', function (Request $request) {
     $post = new Post();

     $post->user_id= Auth::id();
     $post->mensagens = $request->mensagem;

     $post->save();

     return redirect ('/');
});

});