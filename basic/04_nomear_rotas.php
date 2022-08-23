<?php


Route::get('/',function(){

})->name('home');

//grupo de rotas

Route::name('admin.')->prefix('admin')->group(function(){
    Route::get('/contact',functiom(){

    })->name('contact');//a chamada será admin.contct
});