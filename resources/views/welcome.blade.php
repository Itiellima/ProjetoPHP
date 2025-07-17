@extends('layouts.main')
@section('title', 'Welcome')

@section('content')
    

    


        <h1>Hello mundo</h1>

        <img width="500px" src="/img/1264528.png" alt="Banner">

        @if(10 > 5)
            <p>a condição é true</p>
        @endif

            <p> {{ $nome }} </p>


        @if($nome == 'pedro')
            <p>O nome é pedro</p>
        @elseif($nome == 'Matheus')
                <p>O nome é {{$nome}} e ele tem {{$idade}} anos e trabalha como {{$profissao}}</p>
        @else
            <p>O nome não é pedro</p>
        @endif

        
        @for($i = 0; $i < count($arr); $i++)
            <p>{{$arr[$i]}} - {{$i}}</p>
            @if($i == 2)
                <p>O i é 2</p>
            @endif
        @endfor

        @php
            $name = "joao";
            echo $name;
        @endphp

        @foreach ($nomes as $nomes)
            <p>{{$loop->index}}</p>
            <p>{{$nomes}}</p>
        @endforeach


        <!-- Comentario HTML -->

        {{-- Comentario em blade --}}

@endsection