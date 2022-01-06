@extends('layout')

@section('content')

    <div class="flex flex-row justify-center xl:justify-start w-screen h-screen xl:bg-contain xl:bg-no-repeat xl:bg-right" style="background-image: url('../img/bg-404.png')">
        <div class="flex flex-col justify-center place-items-center xl:ml-96">
            <h1 class="text-6xl xl:text-9xl my-2">404</h1>
            <h2 class="text-5xl xl:text-8xl my-2">Not found...</h2>
            <a href="{{route('home')}}" class="btn-blue my-4">Accueil</a>
        </div>
    </div>

@endsection
