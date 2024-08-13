@extends('layouts.main')

@section('title', 'Produto')

@section('content')

    <h1>Produtos</h1>
    @if ($busca != '')
    <p>O usuario está buscando por {{ $busca }}</p>
    @endif

@endsection