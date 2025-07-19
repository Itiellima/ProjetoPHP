@extends('layouts.main')
@section('title', 'Welcome')

@section('content')
    

{{-- $event(tabela do model) --> (titulo da coluna) --}}

    <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form action="">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>

    
    <div id="events-container" class="col-md-12">
        <h2 class="subtitle">Proximos eventos</h2>
        <p>Veja os eventos dos proximos dias</p>
        <div id="cards-conteiners" class="row">
            @foreach ($events as $event)

            <div class="card" style="width: 20%;">
                <img src="/img/Momon.png" class="card-img-top" alt="{{$event->title}}">
                <div class="card-body">
                    <h5 class="card-title">{{$event->title}}</h5>
                    <p class="card-text">{{$event -> description}}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            @endforeach
        </div>
    </div>

    
        <!-- Comentario HTML -->

        {{-- Comentario em blade --}}

@endsection