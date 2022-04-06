<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Route::get('/', [PageController::class, 'firstLogin'])->name('firstLogin');

Route::get('/', function () {
  return view('welcome');
});

Route::get("/teste/{user?}", function ($user = null) {
  if (isset($user)) {
    return "Olá, $user. Sejá bem vindo ao cusro de laravel!";
  } else {
    return "Você não passou o user";
  }
});


Route::get("/regra/{nome}/{n}", function ($nome, $n) {
  for ($i = 1; $i <= $n; $i++) {
    echo "Seu nome é " . $nome . " e sua idade é " . $i . "<br>";
  }
})->where("nome", "[A-Za-z]+")
  ->where("n", "[0-9]+")
  ->name("regra");


Route::prefix("/app")->group(function () {
  Route::get("/", function () {
    return view("pages/blank");
  })->name("app");

  Route::get("/user", function () {
    return "Meu user";
  })->name("user");

  Route::get("/profile", function () {
    return "Meu profile";
  })->name("profile");
});


Route::get("/produtos", function () {
  return "Produtos";
})->name("produtos");

Route::redirect('todosprodutos', 'produtos', 301);


Route::get('todosprodutos2', function () {
  return redirect()->route("produtos");
});


//////////////////////////////////////////////////////////////
///Tipos de Rotas

Route::post("/requisicoes", function (Request $request) {
  return "HELLO POST";
});

Route::delete("/requisicoes", function (Request $request) {
  return "HELLO DELETE";
});

Route::put("/requisicoes", function (Request $request) {
  return "HELLO PUT";
});

Route::patch("/requisicoes", function (Request $request) {
  return "HELLO PATCH";
});

Route::options("/requisicoes", function (Request $request) {
  return "HELLO OPTIONS";
});
