@extends('layouts.app')

@section('titulo')
    Pagina de Inicio
@endsection
@section('contenido')
   <a class="text-3xl font-black flex justify-center">
    "SI DIOS CON NOSOTROS ¿QUIÉN CONTRA NOSOTROS?" Romanos 8:31
   </a>
    <br>
    <div class="md:flex md:justify-center">
        <img src="{{ asset('img/conquistadores.jpg') }}" alt="Imagen registro de usuarios">
    </div>

    <div class="md:flex md:justify-center">
        <img src="{{ asset('img/emanuel.jpg') }}" alt="Imagen registro de usuarios">
    </div>
@endsection