

        @extends('layouts.main')
        @section('title', 'HDC EVENTS')
        @section('content')
        <h1>Algum titulo</h1>
        <img src = "/img/transferir.jpg" alt = "trasnferir">
        @if(10>5)
            <p> A condição é true </p>
        @endif
        <p>{{$nome}}</p>
        @if($nome =="Matheus")
        <p> o nome é {{ $nome }} ele tem {{ $idade }} e trabalha como {{ $profissao }}</p>
        @else
        <p> O nomee não é Pedro Cara ...</p>
        @endif
        
        @for($i = 0; $i<count($arr); $i++)
            <p>{{$arr[$i]}}- {{$i}}</p>
        @endfor
        @php
            $name = "Shema";
            echo $name;
        @endphp
        @endsection