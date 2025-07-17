@extends('layouts.main')
@section('title', 'Contato')
    
@section('content')

        @if ($id != null)
            <p>Exibindo produto id: {{ $id }}</p>
        @endif
    

@endsection
