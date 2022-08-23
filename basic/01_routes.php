<?php

//para chamar nas paginas {{route('home')}}

//rota index que recebe request get
Route::get('/',[HomeController::class,'index']);

//rota que recebe request post
Route::post('/',[HomeController::class,'index']);

//rota que recebe request post
Route::put('/',[HomeController::class,'index']);

//rota que recebe request post
Route::delete('/',[HomeController::class,'index']);

//Rota que pode receber tanto get quanto post
Route::match(['get', 'post'],'/index',[HomeController::class,'index']);


