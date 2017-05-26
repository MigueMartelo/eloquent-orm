@extends('layout')

@section('content')
    <div class="container">
        <h1>{{ $title }}</h1>

        <h3>Primer Registro</h3>
        <p>{{ $first->id }} - {{ $first->name}}</p>

        <h3>Último Registro</h3>
        <p>{{ $last->id }}  - {{ $last->name }}</p>
    </div>
@stop