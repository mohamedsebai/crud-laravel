<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> @yield('title') </title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Styles -->
        <!-- include style file from public folder -->
        <!-- blade engine give us this -->
        <link rel="stylesheet" href="{{url('css/style.css')}}">
    </head>
    <!-- start body -->
    <body class="antialiased">
      <div class="relative py-4 px-6">
         <nav>
           <!-- {rout(' route name from route page ')} -->
           <a href="{{ route('computers.index') }}">COMPUTERS</a>
           <a href="{{ route('computers.create') }}">CREATE COMPUTERS</a>
           <a href="{{ route('StaticController.about') }}">ABOUT</a>
           <a href="{{ route('StaticController.contact') }}">CONTACT</a>
           <a href="{{ route('StaticController.portofolio') }}">PORTOFOLIO</a>
         </nav>
      </div>
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center">
            @yield('content')
        </div>

    </body>
    <!-- end body -->
</html>
