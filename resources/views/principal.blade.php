@extends('layouts.app')

@section('titulo')
    Pagina de Inicio
@endsection
@section('contenido')
   <a class="text-3xl flex justify-center">
    {{-- "SI DIOS CON NOSOTROS ¿QUIÉN CONTRA NOSOTROS?" Romanos 8:31 --}}
    Nuestro colegio es una Cuna de Lideres
   </a>
    <br>
    <div class="md:flex md:justify-center">
        <img src="{{ asset('img/colegio.png') }}" alt="Imagen registro de usuarios">
    </div>

    <div class="md:flex md:justify-center">
        <img src="{{ asset('img/registrar.jpg') }}" alt="Imagen registro de usuarios">
    </div>
@endsection