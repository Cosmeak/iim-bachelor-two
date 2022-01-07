@extends('layout')

@section('content')
<section class="text-xl flex items-center flex-col h-screen justify-center">

    <form class="flex flex-col px-8 pb-10 pt-32 justify-center items-center bg-white relative shadow-md rounded-lg" method="POST" action="{{route('login.index')}}">
        @csrf
        <div class="w-40 h-40 rounded-full mb-6 bg-white shadow-md absolute -translate-x-1/2 left-1/2 -top-20">
            <img src="../img/logo.png" alt="logo">
        </div>
        <div id="content_inscription_1" class="flex justify-center items-center h-base ">
            <div class="flex flex-col" >
                <div class="flex flex-col items-start mx-16 my-4">
                    <label for="mail" class="my-2">E-mail</label>
                    <input class="btn-primary" type="email" name="email" value="{{ old('email')}}">
                    @error('email')
                        <p class="text-red-500 mt-1 w-tiny">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col mx-16 my-4">
                    <label for="password" class="my-2" >Mot de passe</label>
                    <input class="btn-primary" type="password" name="password">
                    @error('password')
                        <p class="text-red-500 mt-1 w-tiny">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center mx-16 my-4">
                    <label class="switch" for="checkbox">
                      <input type="checkbox" id="checkbox" name="is_company"/>
                      <div class="slider round"></div>
                    </label>
                    <label class="mx-2">Se souvenir de moi</label>
                </div>
                <div class="flex mx-16 my-4 justify-center ">
                    <a href="{{route('login.index')}}" class=" black-underline text-base">Mot de passe oublié ?</a>
                </div>
            </div>
        </div>
        <div id="login" class="flex mt-7 justify-between w-full items-end">
            <a href="{{route('user.create')}}" class="black-underline">Pas de compte ?</a>
            <button type="submit" class="btn-form ">Connexion</button>
            
        </div>
        
    </form>
</section>

@endsection
