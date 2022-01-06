@extends('layout')
@include('partials/header')
@section('content')

<section class="bg-primary p-12 text-xl">
    <div class="flex justify-center">
        <img src="img/search.png" alt="search" class="h-xxs">
        <input type="search" placeholder="Rechercher..." class=" w-sm placeholder:text-light-black bg-transparent placeholder:text-black-mat ">
    </div>
    <div class="flex flex-wrap justify-center my-10">
        <div class="flex flex-col mx-32  my-14"> 
            <label for="" class="my-2">Domaine d'activité</label>
            <input type="text" class="btn-primary w-lg" name="dmn_activity">
        </div>
        <div class="flex flex-col mx-32 my-14"> 
            <label for="" class="my-2">Missions recherchées</label>
            <input type="text" class="btn-primary w-lg " name="">
        </div>
        <div class="flex flex-col mx-32 my-14"> 
            <label for="" class="my-2">Localisation</label>
            <input type="text" class="btn-primary w-lg ">
        </div>
        <div class="flex flex-col mx-32 my-14"> 
            <label for="" class="my-2">Recherche par mots clés</label>
            <input type="text" class="btn-primary w-lg ">
        </div>
        <div class="flex flex-col mx-32 my-14"> 
            <label for="" class="my-2">Type de contrat</label>
            <input type="text" class="btn-primary w-lg ">
        </div>
        <div class="flex flex-col mx-32 my-14 items-left w-lg"> 
            <label for="checkbox" class="my-2">Télétravail</label>
            <input type="checkbox" name="checkbox">
        </div>
    </div>
</section>

<section class="text-xl mx-32 my-14">
    <div class="flex flex-col items-center">
        <h2>Résultats</h2>
        <input class="mt-6 mb-1 p-4 bg-primary text-white rounded-2xl shadow-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75 cursor-pointer text-center" type="submit" value="Postuler à toutes les offres">
    </div>
    <div class="flex flex-wrap justify-center">
        <div class="w-2xl h-lg m-24 bg-primary"></div>
        <div class="w-2xl h-lg m-24 bg-primary"></div>
        <div class="w-2xl h-lg m-24 bg-primary"></div>
        <div class="w-2xl h-lg m-24 bg-primary"></div>
    </div>
</section>
@include('partials/footer')

@endsection