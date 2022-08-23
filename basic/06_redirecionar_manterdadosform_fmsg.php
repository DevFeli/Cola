<?php

<form action="pagina" method="post">

@message

<input type="text" name="email" value="{{ old('email')}}">//isso fara que os dados fiquem salvos nos inputs caso ocorra erro
<input type="text" name="email" value="{{ old('email')}}">
<button type="submit"></button>
</form>


Route::('/pagina' function(){
    return redirect('/')->withInput()->with('message', 'Erro ao fazer login');
    //withinput retorna para a view com os dados no form
    //with retorna com a flash message
})