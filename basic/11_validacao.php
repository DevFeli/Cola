<?php

//validation rules

Route::get('/',function(Request $request){

    $validate = $request->validate([
        'email' =>'required|email',
        'password'=>'required|min:5' //'password' => ['required','min:5']
    ]);
});

//para usar no template $errors->any()
//ou pode usar assim
//@error('email')
//{{$message}}
//@enderror

//um jeito mais simples {{$errors->first('email')}}

//no formulario para manter os valores basta colocar no value {{old(''email)}}