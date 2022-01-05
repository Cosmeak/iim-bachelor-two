@extends('layout')
@section('content')


    <div class="block my-14 text-center">
        <div class="flex rounded-full bg-white shadow-md m-auto w-sm h-sm">
            <img width="100" height="100" class="m-auto" src="./img/logo.png" alt="logo">
        </div>
        <h3 class="font-title text-center text-3xl">Inscrivez-vous</h3>
    </div>


        <h2 class="font-title text-center text-6xl my-10 hover:text-primary transition duration-300 ease-out hover:ease-in">
            Vous avez bien enregistrez vos identifiants et mot de passe.
        </h2>


    <section class="flex flex-col justify-evenly m-14 place-items-center xl:flex xl:flex-row xl:justify-evenly">
        <div class="shadow-md bg-white rounded-lg p-10 m-5 relative w-lg flex flex-col justify-between place-items-center">
            <h3 class="font-title text-primary uppercase text-center text-2xl font-bold ">Vous êtes employeur ?</h3>
            <p class="text-center text-xl my-14">
                Créez votre page entreprise en cliquant ici.
                Si vous avez déjà une page candidat, vous
                pouvez également créer votre page entreprise
                ici.
            </p>
            <a href="/employer/register" class="text-align rounded-full border-2 border-primary bg-primary text-xl xl:text-2xl text-white py-2 px-10 hover:text-primary hover:bg-white hover:border-2 hover:border-primary transition duration-150 ease-out hover:ease-in">
                S’inscrire
            </a>
        </div>

        <div class="shadow-md bg-white rounded-lg p-10 m-5 relative w-lg flex flex-col justify-between place-items-center">
            <h3 class="font-title text-primary uppercase text-center text-2xl font-bold ">Vous êtes à la recherche d’un emploi ?</h3>
            <p class="text-center text-xl my-14">
                Créez votre page candidat en cliquant ici.
                Si vous avez déjà une page entreprise, vous
                pouvez également créer votre page candidat
                ici.
            </p>
            <a href="/candidate/register" class="text-align rounded-full border-2 border-primary bg-primary text-xl xl:text-2xl text-white py-2 px-10 hover:text-primary hover:bg-white hover:border-2 hover:border-primary transition duration-150 ease-out hover:ease-in">
                S’inscrire
            </a>
        </div>

    </section>

@endsection