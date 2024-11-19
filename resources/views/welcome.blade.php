<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Curso de Laravel</title>

        <link rel =  "stylesheet" href="/css/style.css">
        <script src ="/js/scripts.js"></script>

    </head>
    <body> 
        <h1>Algum titulo</h1>
        @if(10>5)
            <p> A condição é true </p>
        @endif
        <p>{{$nome}}</p>
        @if($nome =="Matheus")
        <p> o nome é {{ $nome }} ele tem {{ $idade }} e trabalha como {{ $profissao }}</p>
        @else
        <p> O nome não é Pedro Cara ...</p>
        @endif
        
        @for($i = 0; $i<count($arr); $i++)
            <p>{{$arr[$i]}}- {{$i}}</p>
        @endfor
        @php
            $name = "Shema";
            echo $name;
        @endphp
    </body>
</html>
