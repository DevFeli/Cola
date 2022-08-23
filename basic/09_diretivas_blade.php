<?php

@extends('nome', ['title' => 'Home title'])//para herdar algum template e passar algum valor para o template



//aqui fica o conteudo que sera posto no yeld
@section('nome')
@endsection

//para chamar a section na pagina usa-se @yield('nome')