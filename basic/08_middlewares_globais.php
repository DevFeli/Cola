<?php

//usar os middlewares globais

//os middlewares ficam em kernel, para criar um middleware é necessario referencialo no kernel

Route::middleware('auth')->get('/',[HomeController::class, 'index'])->name('home');

//para usar varios middlewares em uma rota

Route::middleware(['auth', 'signed'])->get('/',[HomeController::class, 'index'])->name('home');

Route::get('/',[HomeController::class, 'index'])->name('home')->middleware(['auth', 'signed']);//tambem pode ser escrito assim

//com grupo de rotas

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/',[AdminController::class,'index'])->name('home');
    Route::get('/',[AdminController::class,'index'])->name('home')->withoutMiddleware('auth');//isso faz com que nao passe pelo middleware

});

//para passar valores para o middleware

Route::get('/',[HomeController::class, 'index'])->name('home')->middleware('auth:id');
//'auth:id' os dois pontos representa o ovalor que sera passado por referencia para o middleware