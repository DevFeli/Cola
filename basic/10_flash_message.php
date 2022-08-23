<?php

Route::get('/',function(Request $request){

    $request->session()->flash('flashMessage','minha mensagem');

    //outra forma de usar
    Session::flash('flashMessage', 'minha mensagem');
});

//para usar na pagina
@if(session::has('flashMessage'))
{{Session::get('flashMEssage')}}
@endif

//outra forma

@if(session('flashMEssage'))
{{Session::get('flashMEssage')}}
@endif

//outra forma de setar fmessages

Route::get('/',function{
    $request->session()->flash('message', 'minha messagem')

    //ou
    return redirect()->back()->with('messagem','minha message')
})
