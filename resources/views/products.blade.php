@extends('layouts.main')
@section('title', 'Produtos')

@section('content')
<h1>Isto é a pagina de produtos</h1>
@if($busca != '')
<p>o usuario está buscando por: {{$busca}}</p>
@endif 
@endsection