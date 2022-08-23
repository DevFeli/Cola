<?php

Route::get('/user/{id}',[HomeControlle::class,'index']);

Route::get('/user/{name}/{age}',function($name,$age){

})->where(['name' => '[a-zA-Z]+']);//no parametro name so pode receber letras de az low ou upper

//outra maneira de escrever
Route::get('/user/{name}/{age}',function($name,$age){

})->whereAlpha('name')->whereNumber('age');


//Com expressão regualr
Route::get('/user/{name}/{age}',function($name,$age){

})->whereAlpha('name','[a-z\-]+')->whereNumber('age');//para aceitar traços

