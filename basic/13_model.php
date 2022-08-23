<?php

//https://www.dialhost.com.br/blog/eloquent-simplificando-models-laravel/

//php artisan make:model nome

//para criar um model com uma migrate //php artisan make:model nome -m

//no controller é preciso importar o model - use\app\models\model

// para resgatar os dados do banco, no controller*
// $var = Model::all()
//passar para a view return view('home',['dados' => $var]);

//salvar no bd $var->save()

//User::first() traz o primeiro registro
//User::all()->pluck('nome') traz a coluna nome //User::find(3) traz um registro

//User::where('id', '=', 3)traz o registro de id = 3 - ou assim User::where('id',3)

//$model = User::findOrFail(1);
//$model = User::where('votes', '>', 100)->firstOrFail();

//whereIn('coluna', [1,3])->get() - traz todos registros iguais a 1 e 3

//whereNotIn('coluna', [1,3])->get() - vai fazer o inverso do not in

//whereBetween('coluna', [3,6])->get() - traz os registros nesse range

//User::where('coluna', '=', '3')->whereIn('coluna',[1,3])->whereBetween('coluna', [1,4])->get();

//orWhere('coluna', [1,2]) orWhereIn - orWhereNotIn -  funciona como o operador or

//ordenar User::orderby('coluna', 'asc')

