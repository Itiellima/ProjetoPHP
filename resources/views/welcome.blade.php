@extends('layouts.main')
@section('title', 'Welcome')

@section('content')
    

{{-- $event(tabela do model) --> (titulo da coluna) --}}

    <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form action="/" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>

    
    <div id="events-container" class="col-md-12">
        @if ($search)
        <h2>Buscando por: {{ $search }}</h2>
        @else
        <h2 class="subtitle">Proximos eventos</h2>
        <p>Veja os eventos dos proximos dias</p>
        @endif

        
        <div id="cards-conteiners" class="row">
            @foreach ($events as $event)
            <div class="card" style="width: 20%;">
            
                @if (!empty($event->image))
                    <img src="{{asset('img/events/' . $event->image) }}" class="card-img-top" alt="{{$event->title}}">
                @else
                    <img src="/img/Momom.png" class="card-img-top" alt="{{$event->title}}">
                @endif
                
                <div class="card-body">
                    <p class="card-date"> {{ date('d/m/Y', strtotime($event->date)) }}</p>
                    <h5 class="card-title">{{$event->title}}</h5>
                    <p class="card-text">x participantes</p>
                    <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber Mais</a>
                </div>
            </div>

            @endforeach
            @if (count($events) == 0 && $search)
                <p>Não foi possivel encontrar nenhum evento com {{ $search }}! <a href="/">Ver todos</a></p>
            @elseif(count($events) == 0)
                <p>Nao há eventos disponiveis</p>
            @endif
        </div>
    </div>

    
        <!-- Comentario HTML -->

        {{-- Comentario em blade --}}

@endsection