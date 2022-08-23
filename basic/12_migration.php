<?php
//para criar migrate
//php artisan make:migration create_posts_table o nome deve ser no plural

//para rodar migrate - php artisan migrate

//para fazer alguma alterção nas tabelas do migrate
//php artisan migrate:rollback - volta um estadao das migrates
//php artisan migrate sobe de novo as tables
//php artisan migrate:fresh - fdaz a mesma coisa

//para rodar apenas uma migrate 
//php artisan migrate --path=database/migrations/nome_da_migrate
//para voltar apenas uma 
//php artisan migrate:rollback --path=database/migrations/nome_da_migrate

//adicionar uma coluna em uma tabela
//php artisan make:migration add_nomecoluna_to_nometabela_table -> php artisan migrate

//chave estrangerira 
//$table->bigint('coluna_id')
//constraint 
//$table->foreign('coluna_id')->references('id')->on('tabela');
//$table->unique('nome_id');





