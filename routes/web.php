<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = "Matheus";
    $idade = 29;
    $profissao  = "Programador";
    $arr = [1,2,3,4,5,];
    return view('welcome', 
    ['nome' => $nome, 'idade' => $idade, 
    'profissao' => $profissao
    ,'arr'=> $arr]);
});  

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    return view('products');
});

Route::get('/produtos/{id}', function () {
    return view('product',['id=>$id']);
});
