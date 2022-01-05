@extends('layout')
@include('partials/header')

@section('content')

<section class="text-xl">
    <div class="bg-primary flex justify-center text-white items-center py-32">
        <h1 class="text-5xl">Créer un travail</h1><br>
    </div>
    <form class="flex flex-col xl:mx-96 items-center" action="POST">
        <div class="flex flex-col xl:flex-row py-10" >
            <div class="flex flex-col items-start mx-16 my-4">
                <label for="activity"class="my-2" >Nom</label>
                <input class="btn-primary" type="text" placeholder="Domaine d'activité" name="label">
            </div>
            <div class="flex flex-col items-start mx-16 my-4">
                <label for="activity"class="my-2" >Domaine d'activité</label>
                <input class="btn-primary" type="text" placeholder="Domaine d'activité" name="activity">
            </div>
            <div class="flex flex-col items-start mx-16 my-4">
                <label for="contract" class="my-2" >Type de contrat</label>
                <select name="contract" id="" class="btn-primary text-gray-400">
                            <option value="">CDI</option>
                            <option value="">CDD</option>
                            <option value="">ETT</option>
                            <option value="">Intérim</option>
                            <option value="">Stage</option>
                            <option value="">Alternance</option>
                            <option value="">Apprentissage</option>
                        </select>
            </div>
            <div class="flex flex-col items-start mx-16 my-4">
                <label for="salary" class="my-2">Salaire</label>
                <input class="btn-primary text-gray-400" type="text" placeholder="Salaire" name="salary">
            </div>
        </div>
        <div class="flex flex-col xl:flex-row py-10">
            <div class="flex flex-col items-start mx-16 my-4">
                <label for="description" class="my-2">Description</label>
                <textarea class="btn-primary text-gray-400 h-32" type="text" placeholder="Présentez le travail en quelques lignes..." name="description"></textarea>
            </div>
            <div class="flex flex-col items-start mx-16 my-4">
                <label for="goal" class="my-2">Missions</label>
                <textarea class="btn-primary text-gray-400 h-32" type="text" placeholder="Définissez les objectifs à remplir..." name="goal"></textarea>
            </div>
        </div>
        <div class="flex flex-col xl:flex-row py-10">
            <div class="flex flex-col items-start mx-16 my-4">
                <label for="candidate" class="my-2 mx-10">Candidat idéal</label>
                <ul class="flex flex-col xl:flex-row list-decimal">
                    <li>
                        <select name="candidate" id="" class="btn-primary text-gray-400 my-5 mx-10">
                            <option value="">Le Profil</option>
                            <option value="">Les Softs Skills (compétences)</option>
                            <option value="">L'experience professionnelle</option>
                            <option value="">La personalité</option>
                        </select>
                    </li>
                    <li>
                        <select name="candidate" id="" class="btn-primary text-gray-400 my-5 mx-10">
                            <option value="">Le Profil</option>
                            <option value="">Les Softs Skills (compétences)</option>
                            <option value="">L'experience professionnelle</option>
                            <option value="">La personalité</option>
                        </select>
                    </li>
                    <li>
                    <select name="candidate" id="" class="btn-primary text-gray-400 my-5 mx-10">
                        <option value="">Le Profil</option>
                        <option value="">Les Softs Skills (compétences)</option>
                        <option value="">L'experience professionnelle</option>
                        <option value="">La personalité</option>
                    </select>
                    <li>
                        <select name="candidate" id="" class="btn-primary text-gray-400 my-5 mx-10">
                            <option value="">Le Profil</option>
                            <option value="">Les Softs Skills (compétences)</option>
                            <option value="">L'experience professionnelle</option>
                            <option value="">La personalité</option>
                        </select>
                    </li>
                </ul>
            </div>
        </div>
        <input type="submit" value="Valider" class="w-sm my-12 py-4 bg-primary text-white rounded-2xl shadow-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75 cursor-pointer text-center">
    </form>
</section>
@endsection
