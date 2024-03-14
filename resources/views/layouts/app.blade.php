<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Conquistagram - @yield('titulo')</title>
      
    </head>
    <body class="bg-gray-100"> {{-- //bg es el color de la vista--}}
        <header class="p-5 border-b bg-white shadow "> {{--//pading de 5 con una sombra con shadow--}}
           {{--   estas son clases de tailwindcss   --}}
           <div class="container mx-auto flex justify-between items-center "> {{--Esto es para que este centrado tu 
             contenido vertical y horizontalmente a la izquierda--}}
                <nav>
                    <a class="text-3xl font-black" href="/sistemas/public">Club Emanuel</a>
                </nav>

                <nav class="flex gap-2 items-center ">
                    <a class="font-bold uppercase text-gray-700 text-sm" href="/sistemas/public/login">Login</a>
                    {{--<a class="font-bold uppercase text-gray-700 text-sm" href="/sistemas/public/register">--}}
                    <a href="{{ route('register') }}" class="font-bold uppercase text-gray-700 text-sm" >
                        Crear Cuenta
                    </a>
                </nav>
           </div>
        </header>

        <main class="container mx-auto mt-10 pl-10">
            <h2 class="font-black text-center text-3xl mb-10">
                @yield('titulo')
            </h2>
            @yield('contenido')
        </main>

        <footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">
            Conquistagram - Todos los derechos reservados
            {{now()->year}}
        </footer>

    </body>
    @vite('resources/css/app.css')
</html>
