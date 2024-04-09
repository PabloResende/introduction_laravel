<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/empresa', function () {
    return view('site/empresa');
}); // Uma rota usa um http request, em seguida ecolhemos o nome da rota, nesse caso o /empresa e por fim uma função de callback que vai direcionar para o view no local indicado

Route::any('/any', function () {
    return view('O any serve para todas os tipos de requisição http(delete, put, post, get)');
});

Route::match(['get', 'post'], '/match', function () {
    return view('O match serve para permitir apenas as requisições dentro do array, não sendo exclusivo apenas o get e o post, mas sim o que quiser, exemplo, ao invés de get e post poderia ser usado put, delete, patch e etc...');
});

// também é possível colocar parâmetros em rotas:

Route::get('/parametros/{nome}', function ($nome) {
    return "O nome é $nome";
}); // A rota vai receber um parâmetro, que vai ser o nome

Route::get("produto/{id}/{cat}", function ($id, $cat = "valor padrão") {
    return "O id do produto é ".$id."<br> e a categoria é ".$cat;
}); // mesmo exemplo de cima, mas com mais parâmetros, e feito levemente diferente
// também é possível passar um valor padrão em casos onde nenhum parâmetro é passado nas rotas da url

