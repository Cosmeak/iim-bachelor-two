@extends('layout')
@section('content')

<section class="w-full mt-28 text-xl flex items-center flex-col">

  <div class=" w-sm h-sm rounded-full mb-6 bg-white shadow-sm">
    <img src="../img/logo.png" alt="logo">
  </div>

  <h1 class=" text-center text-3xl ">Inscrivez-vous</h1>

  <form class="flex flex-col xl:w-5xl xl:px-64 justify-center items-center" method="POST" action="{{route('user.store')}}">
    @csrf {{-- Token check --}}

    <div class="flex flex-col items-start mx-16 my-4">
      <label for="email" class="my-2" >Email</label>
      <input class="btn-primary" type="email" placeholder="Votre email" name="email" value="{{ old('email') }}" required>
      @error('email')
        <p class="text-red-500 mt-1 w-tiny">{{ $message }}</p>
      @enderror
    </div>

    <div class="flex flex-col items-start mx-16 my-4">
      <label for="password"class="my-2">Mot de passe</label>
      <input class="btn-primary" type="password" placeholder="Votre mot de passe" name="password" required>
      @error('password')
        <p class="text-red-500 mt-1 w-tiny">{{ $message }}</p>
      @enderror
    </div>

    <div class="flex flex-col items-start mx-16 my-4">
      <label for="password-verify"class="my-2" >Confirmer le mot de passe</label>
      <input class="btn-primary" type="password" placeholder="Votre mot de passe" name="password-verify" required>
      @error('password-verify')
        <p class="text-red-500 mt-1 w-tiny">{{ $message }}</p>
      @enderror
    </div>
    <div class="flex justify-center items-center mx-16 mb-4">
      <label class="mx-2">Candidat</label>
      <label class="switch" for="checkbox">
        <input type="checkbox" id="checkbox" name="is_company"/>
        <div class="slider round"></div>
      </label>
      <label class="mx-2">Entreprise</label>
  </div>

    <button type="submit" class="w-sm my-12 py-4 bg-primary text-white rounded-2xl shadow-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75 cursor-pointer text-center">S'inscrire</button>
    <p>Déjà un compte Easy Apply ? <a href="/login" class=" text-primary font-bold">Connexion</a></p>

  </form>

</section>

@endsection