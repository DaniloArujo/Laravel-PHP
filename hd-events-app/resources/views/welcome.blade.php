@extends('layouts.main')

@section('title','HDC events')


@section('content')
<h1>Algum titulo</h1>

<img src="/img/Screenshot_1.png" alt="Banner">


@if( $idade > 18)
<p>{{$nome}} é maior de idade</p>
@elseif( $idade < 18 and $idade> 12 )
    <p>{{$nome}} é adolescente</p>
    @else
    <p>{{$nome}} é criança</p>
    @endif

<p> {{$nome}} tem {{$idade}} anos</p>
@for($i = 0; $i < count($arr); $i++)
    <p>{{$arr[$i]}}0 - {{$arr[$i]}}</p>
    @if($i == 2)
    <p>O i é 2</p>
    @endif
@endfor

@foreach($nomes as $nome)
    <p>{{$nome}}</p>
@endforeach
@php
    $name = "João";
    echo $name;
@endphp
<!-- comentário html-->
{{--comentário blade--}}
@endsection
