<?php


Route::group(['prefix' => 'blog'], function(){//tudo que estiver aqui dentro fara parte do grupo blog
    Route::get('/',function(){//localhost/blog
    });
    Route::get('/user',function(){});//localhost/blog/user
});

//outra forma de escrever

Route::gprefix('blog')->group(function(){
    Route::get('/', function(){});
});