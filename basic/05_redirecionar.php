<?php


//redirecionar para uma rota com controller e action
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/passar',function(){

    return redirect()->action([HomeController::class, 'index']);

})->name('redirect');

//com parametro
Route::get('/passar',function(){

    return redirect()->action([HomeController::class, 'index'],['id'=>45]);

})->name('redirect');





Route::get('/redirect',function(){

    return redirect()->route('home');

})->name('redirect');

//rfedirect com parametros

Route::get('/pegar/{id}',function(){

    return redirect('/');

})->name('redirect');

Route::get('/postar',function(){

    return redirect('/pegar/1');

})->name('redirect');

//outra forma de passar

Route::get('/passar',function(){

    return redirect()->route('pegar', ['id' => 01]);

})->name('redirect');