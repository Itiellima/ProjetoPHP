@extends('layouts.main')
@section('title', 'Contato')
    
@section('content')

        <h1>Pagina de contato</h1>

@if ($busca != '')
    <p>O usuario esta procurando por: {{ $busca }}</p>
@endif

@endsection
