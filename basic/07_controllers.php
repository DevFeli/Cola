<?php

//*para usar controler na rota é preciso importar o controller com o user!

//para criar controllers com artisan, php artisan make:controller 'nome'

//chamar um controller pela rota
Route::get('/{id}',[HomeCrontroller::class, 'show']);

//metodos dos crontrollers

public function show($id){
    //metodo para mostrar
    dd("show user " . $id);
};

public function edit(){
    //metodo para editar
};

public function update(){
    //metodo para atualizar
};

public function create(){
    //metodo para cadastrar
};

public function store(){
    //cadastrar
};

public function destroy(){
    //deletar
};

//Controller com resorce
//ao criar o controller se escolher a opção resorce automaticante junto com o controller ira criar tambem os metodos especiasi acima
//php artisan make:controller nome resorce

//exemplo de como usar o controller na route

Route::resource('user',UserController::class)//aqui cria automaticamente as rotas e todas as rota sao direcionas automaticamente


//para dar nome as actions 
Route::resource('user',UserController::class)->names([
    'create' => 'user.create',
    'store' => 'user.store'

])->only(['index', 'store', 'create']);//aqui especifica quais metodos e para utilizar, se nao colocar ira usar todos os metodos do controller
