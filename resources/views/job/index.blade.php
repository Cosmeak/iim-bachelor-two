@extends('layout')
@include('partials/header')
@section('content')

<section class="gradient p-12 text-lg xl:text-xl">
    <h2 class="text-center text-2xl xl:text-3xl text-white">Recherche de missions</h2>
    <div class="flex flex-wrap justify-center my-4 xl:my-10">
        <div class="flex flex-col mx-32 m-4 xl:my-10">
            <label for="" class="my-2 text-white">Domaine d'activité</label>
            <input type="text" class="btn-primary w-lg" name="dmn_activity">
        </div>
        <div class="flex flex-col mx-32 m-4 xl:my-10">
            <label for="" class="my-2 text-white">Missions recherchées</label>
            <input type="text" class="btn-primary w-lg " name="">
        </div>
        <div class="flex flex-col mx-32 m-4 xl:my-10">
            <label for="" class="my-2 text-white">Localisation</label>
            <input type="text" class="btn-primary w-lg ">
        </div>
        <div class="flex flex-col mx-32 m-4 xl:my-10">
            <label for="" class="my-2 text-white">Recherche par mots clés</label>
            <input type="text" class="btn-primary w-lg ">
        </div>
        <div class="flex flex-col mx-32 m-4 xl:my-10">
            <label for="" class="my-2 text-white">Type de contrat</label>
            <input type="text" class="btn-primary w-lg ">
        </div>
        <div class="flex flex-col mx-32 m-4 xl:my-10 w-lg place-items-center">
            <label class="my-2 text-white">Télétravail</label>
            <label class="switch" for="checkbox">
                <input type="checkbox" id="checkbox" name="at_home"/>
                <div class="slider-2 round"></div>
            </label>
        </div>
    </div>
</section>

<section class="text-xl mx-32 my-14">
    <div class="flex flex-col items-center">
        <h2>Résultats</h2>
        <input class="mt-6 mb-1 cursor-pointer btn-blue" type="submit" value="Postuler à toutes les offres">
    </div>
    <div class="flex flex-col xl:flex-row xl:flex-wrap place-items-center justify-center">
        <div class="flex flex-col w-lg xl:w-2xl h-auto my-5 xl:m-20 px-6 py-8 highlight shadow-md bg-white rounded-lg">
            <div class="flex flex-row justify-between">
                <div class="flex flex-col ">
                    <h2 class="text-2xl xl:text-3xl text-primary font-bold">Nom de la mission</h2>
                    <h3 class="text-xl xl:text-2xl font-bold">Nom de l'entreprise</h3>
                    <h3 class="text-xl xl:text-2xl">Adresse de l'entreprise</h3>
                </div>
                <div class="flex justify-center place-items-center rounded-full bg-inherit w-24 h-24 ">
                    <i class="fas fa-camera fa-2x"></i>
                </div>
            </div>
            <p class="text-lg xl:text-xl">Salaire</p>
            <p class="text-lg xl:text-xl">Taux de réussite : 100%</p><br>
            <p class="text-lg xl:text-xl">-Objectif de la mission : paragraphes sur les tâches à accomplir et des pré-requis à respecter</p>
            <p class="text-lg xl:text-xl">-Objectif de la mission : paragraphes sur les tâches à accomplir et des pré-requis à respecter</p><br>
            <p class="text-lg xl:text-xl text-gray pt-10 justify-self-end mt-auto">Date du post de la mission</p>
        </div>
        <div class="flex flex-col w-lg xl:w-2xl h-auto my-5 xl:m-20 px-6 py-8 highlight shadow-md bg-white rounded-lg">
            <div class="flex flex-row justify-between">
                <div class="flex flex-col ">
                    <h2 class="text-3xl text-primary font-bold">Assistant Administratif H/F</h2>
                    <h3 class="text-xl xl:text-2xl font-bold">Total</h3>
                    <h3 class="text-xl xl:text-2xl">92400 La Défense</h3>
                </div>
                <div class="flex justify-center place-items-center rounded-full bg-inherit w-24 h-24 ">
                    <i class="fas fa-camera fa-2x"></i>
                </div>
            </div>
            <p class="text-lg xl:text-xl">1900 € à 2200 € par mois</p>
            <p class="text-lg xl:text-xl">Taux de réussite : 97%</p><br>
            <p class="text-lg xl:text-xl">- Gérer les tâches classiques d'assistance : traitement du courrier, traitements des appels téléphoniques et des courriels.</p><br>
            <p class="text-lg xl:text-xl text-gray pt-10 justify-self-end mt-auto">Il y a 4 jours</p>
        </div>

        <div class="flex flex-col w-lg xl:w-2xl h-auto my-5 xl:m-20 px-6 py-8 highlight shadow-md bg-white rounded-lg">
            <div class="flex flex-row justify-between">
                <div class="flex flex-col ">
                    <h2 class="text-3xl text-primary font-bold">Nom de la mission</h2>
                    <h3 class="text-xl xl:text-2xl font-bold">Nom de l'entreprise</h3>
                    <h3 class="text-xl xl:text-2xl">Adresse de l'entreprise</h3>

                </div>
                <div class="flex justify-center place-items-center rounded-full bg-inherit w-24 h-24 ">
                    <i class="fas fa-camera fa-2x"></i>
                </div>
            </div>
            <p class="text-lg xl:text-xl">Salaire</p>
            <p class="text-lg xl:text-xl">Taux de réussite : 100%</p><br>
            <p class="text-lg xl:text-xl">-Objectif de la mission : paragraphes sur les tâches à accomplir et des pré-requis à respecter</p>
            <p class="text-lg xl:text-xl">-Objectif de la mission : paragraphes sur les tâches à accomplir et des pré-requis à respecter</p><br>
            <p class="text-lg xl:text-xl text-gray pt-10 justify-self-end mt-auto">Date du post de la mission</p>
        </div>

        <div class="flex flex-col w-lg xl:w-2xl h-auto my-5 xl:m-20 px-6 py-8 highlight shadow-md bg-white rounded-lg">
            <div class="flex flex-row justify-between">
                <div class="flex flex-col ">
                    <h2 class="text-3xl text-primary font-bold">Nom de la mission</h2>
                    <h3 class="text-xl xl:text-2xl font-bold">Nom de l'entreprise</h3>
                    <h3 class="text-xl xl:text-2xl">Adresse de l'entreprise</h3>

                </div>
                <div class="flex justify-center place-items-center rounded-full bg-inherit w-24 h-24 ">
                    <i class="fas fa-camera fa-2x"></i>
                </div>
            </div>
            <p class="text-lg xl:text-xl">Salaire</p>
            <p class="text-lg xl:text-xl">Taux de réussite : 100%</p><br>
            <p class="text-lg xl:text-xl">-Objectif de la mission : paragraphes sur les tâches à accomplir et des pré-requis à respecter</p>
            <p class="text-lg xl:text-xl">-Objectif de la mission : paragraphes sur les tâches à accomplir et des pré-requis à respecter</p><br>
            <p class="text-lg xl:text-xl text-gray pt-10 justify-self-end mt-auto">Date du post de la mission</p>
        </div>
    </div>
</section>
@include('partials/footer')

@endsection
