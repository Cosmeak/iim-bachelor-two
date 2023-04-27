@extends('layout')
@section('content')
    <section class="w-screen h-screen overflow-hidden relative">
        <section class="text-xl flex items-center flex-col h-screen justify-center">
            <div
                class="hidden xl:block rounded-full w-2xl h-2xl bg-primary absolute -right-52 -top-64 border-2 border-blue-400 shadow-xl">
            </div>
            <div class="hidden xl:block rounded-full w-2xl h-2xl bg-primary absolute -left-96 border-2 border-blue-400 shadow-xl">
            </div>
            <div
                class="hidden xl:block rounded-md w-2xl h-2xl bg-primary absolute right-52 top-3/4 border-2 border-blue-400 shadow-xl">
            </div>

            <form class="flex flex-col px-8 pb-10 pt-32 justify-center items-center bg-white relative shadow-xl rounded-lg"
                method="POST" action="{{ route('user.store') }}">
                @csrf {{-- Token check --}}

                <div class=" w-40 h-40 rounded-full mb-6 bg-white shadow-md absolute -translate-x-1/2 left-1/2 -top-20">
                    <img src="../img/logo.png" alt="logo">
                </div>

                <div class="flex flex-col items-start mx-16 my-4">
                    <label for="email" class="my-2">Email</label>
                    <input class="btn-primary" type="email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <p class="text-red-500 mt-1 w-tiny">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col items-start mx-16 my-4">
                    <label for="password" class="my-2">Mot de passe</label>
                    <input class="btn-primary" type="password" name="password" required>
                    @error('password')
                        <p class="text-red-500 mt-1 w-tiny">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col items-start mx-16 my-4">
                    <label for="password-verify" class="my-2">Confirmer le mot de passe</label>
                    <input class="btn-primary" type="password" name="password-verify" required>
                    @error('password-verify')
                        <p class="text-red-500 mt-1 w-tiny">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex justify-center items-center mx-16 mb-4">
                    <label class="mx-2">Candidat</label>
                    <label class="switch" for="checkbox">
                        <input type="checkbox" id="checkbox" name="is_company" />
                        <div class="slider round"></div>
                    </label>
                    <label class="mx-2">Entreprise</label>
                </div>

                <div class="flex mt-7 justify-between w-full items-end">

                    <a href="{{ route('login.index') }}" class="black-underline ">Déjà un compte ?</a>
                    <button type="submit" class=" btn-form ">S'inscrire</button>
                </div>

            </form>
          </section>
        </section>

    @endsection
