<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>


    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/scripts.js"></script>

</head>

<body class="antialiased">
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
</html>
