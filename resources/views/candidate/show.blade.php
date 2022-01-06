@extends('layout')
@include('partials/header')

@section('content')

    <section class="bg-gray flex justify-center h-100 relative">
        <img src="../img/add-pic.svg" alt="add pic" class="my-60">
        <div
            class="flex rounded-full bg-white shadow-md absolute justify-center xl:left-[10%] bottom-[-30%] xl:bottom-[-40%] w-xxs h-xss xl:w-lg xl:h-lg">
            <a href="" class="m-auto"><img width="50" height="50" src="../img/add-pic.svg" alt="logo"></a>
        </div>
    </section>

    <article
        class="flex flex-col justify-evenly mx-14 mt-56 mb-20 place-items-center xl:flex xl:flex-row xl:justify-around xl:text-left ">
        <div class="flex flex-col text-center xl:justify-between place-items-center ">
            <div class="flex flex-row my-10">
                <h2 class="font-title text-3xl xl:text-4xl mx-2 xl:mx-10">{{ $candidate->first_name }}<span
                        class="uppercase">{{ $candidate->last_name }}</span></h2>
                <img src="../img/overwrite-icon.svg" alt="overwrite" class="w-xxs h-xxs">
            </div>
            <h3 class="text-2xl xl:text-3xl"> @if ($candidate->location()) {{ $candidate->location->country->label }}, {{ $candidate->location->city->label }} @else Non renseigné @endif<h3>
        </div>
    </article>

    <article class="my-14">
        <div class="flex flex-row justify-center place-items-center">
            <h2 class="text-light-blue font-title mx-3 text-4xl">Coordonnées</h2>
            <img src="../img/overwrite-icon.svg" alt="overwrite" class="w-xxs h-xxs">
        </div>
        <div class="flex xl:flex-row flex-col xl:justify-around ml-16 xl:items-center xl:mx-64 my-14">
            <div class=" flex flex-col xl:text-left">
                <div class="flex items-center mb-2 ">
                    <i class="fas fa-phone-square-alt fa-2x"></i>
                    <p class="text-xl xl:text-2xl mx-4">@if ($candidate->phone_number){{ $candidate->phone_number }} @else Non renseigné @endif</p>
                </div>
                <div class="flex items-center mb-2 ">
                    <i class="fas fa-envelope fa-2x"></i>
                    <a href="mailto: project@easyapply.fr" class="link link-underline text-xl xl:text-2xl mx-4">
                        {{ $candidate->user->email }}
                    </a>
                </div>
            </div>
            <div class=" flex flex-col xl:text-left">
                <div class="flex items-center mb-2 ">
                    <i class="fab fa-internet-explorer fa-2x"></i>
                    <p class="text-xl xl:text-2xl mx-4">@if ($candidate->website) {{ $candidate->website }} @else Non renseigné @endif</p>
                </div>
                <div class="flex items-center mb-2">
                    <i class="fab fa-linkedin fa-2x"></i>
                    <p class="text-xl xl:text-2xl mx-4">@if ($candidate->linkedin) {{ $candidate->linkedin }} @else Non renseigné @endif</p>
                </div>
            </div>
            <div class=" flex flex-col xl:text-left">
                <div class="flex items-center mb-2">
                    <i class="fab fa-instagram fa-2x"></i>
                    <p class="text-xl xl:text-2xl mx-4">@if ($candidate->instagram) {{ $candidate->instagram }} @else Non renseigné @endif</p>
                </div>
                <div class="flex items-center mb-2">
                    <i class="fab fa-facebook-square fa-2x"></i>
                    <p class="text-xl xl:text-2xl mx-4">@if ($candidate->facebook) {{ $candidate->facebook }} @else Non renseigné @endif</p>
                </div>
            </div>
        </div>
    </article>

    <div class="flex flex-row justify-center place-items-center mt-20">
        <h2 class="text-light-blue font-title mx-3 text-2xl xl:text-3xl">Formation</h2>
        <img src="../img/overwrite-icon.svg" alt="overwrite" class="w-xxs h-xxs">
    </div>

    <section class="xl:flex xl:flex-row xl:justify-evenly xl:mt-14 flex flex-col justify-center place-items-center">
        <div class="flex flex-col items-start">
            <label for="img" class="my-4">CV</label>
            <div class="dashed-hover py-20 px-20 bg-white ">
                <input id="file-input" type="file" class="hidden" name="pdf">
                <label for="file-input"><img width="50" height="50" class="m-auto cursor-pointer" src="../img/add-pic.svg" alt="logo"></label>
            </div>
        </div>

        <div class="highlight shadow-md hover:shadow-xl bg-white rounded-3xl p-10 m-5 relative w-lg my-14">
            <h3 class="font-title text-light-blue text-center text-2xl font-bold mt-5">Stage en pharmacie</h3>
            <p class="text-center">De mai 2020 à juillet 2020</p>
            <p class="text-xl mt-14">Stage rémunéré de 3 mois dans une pharmacie
                dans le 5ème arrondissement de Paris.
            </p><br>
            <p class="text-xl mt-5">- approvisionnement des stocks</p>
            <p class="text-xl mt-5">- conseil des clients</p>
            <p class="text-xl mt-5">- vente de médicaments sur ordonnance</p>
        </div>

    </section>
    @include('partials/footer')


@endsection
