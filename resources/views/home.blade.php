@extends('layouts.app')

@section('titulo')
    Página de Principal
@endsection
@section('contenido')
    <x-listar-post :posts="$posts" />
@endsection