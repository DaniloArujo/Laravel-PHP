@extends('layouts.main')

@section('title', 'produtos')

@section('content')

<h1>Esta é a minha tela de produtos</h1>
@if($busca != '')
<p>O usuário está buscando por: {{$busca}}</p>
@endif

@endsection
