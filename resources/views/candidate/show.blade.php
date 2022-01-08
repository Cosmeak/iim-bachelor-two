@extends('layout')
@include('partials/header')
@section('content')
<main class="profile-show pt-[80px]">
    <section class="moving-gradient w-10/12 xl:w-6/12 rounded-b-[10px] flex justify-center mx-auto h-[180px] relative mb-[32px]">
        <span class="my-60"></span>
        <div class="w-[90px] xl:w-[120px] h-[90px] xl:h-[120px] flex rounded-full bg-white shadow-md absolute justify-center bottom-[-23%] xl:bottom-[-30%] ">
            <img class="object-contain" width="90" height="90" src="@if($candidate->profile_picture){{ $candidate->profile_picture }}@else ../img/logo.png @endif" alt="">
        </div>
    </section>

    <article class="content-section">
        <div class="split-section">
            <p class="text-2xl">Informations</p>
            <button class="btn-edit" id="form_edit_candidate"><i class="fas fa-pencil-alt fa-lg text-white"></i></button>
        </div>

        <div class="subcontent-section">
            <div class="profile-card">
                <p class="title">Profil</p>
                <div class="flex flex-col">
                    <div class="info">
                        <i class="fas fa-id-card fa-lg text-primary"></i>
                        <h2 class="info-p">{{ $candidate->first_name }} <span class="uppercase">{{ $candidate->last_name }}</span></h2>
                    </div> 
                    <div class="info">
                        <i class="fas fa-user-graduate fa-lg text-primary"></i>
                        <p class="info-p">@if ($candidate->status) {{ $candidate->status->label }}@else Non renseigné @endif</p>
                    </div>
                    <div class="info text-left ">
                        <i class="fas fa-map-marker-alt fa-lg text-primary"></i>
                        <p class="info-p">@if ($candidate->location) {{ $candidate->location->country->label }}, {{ $candidate->location->city->label }}@else Non renseigné @endif</p>
                    </div>
                </div>
            </div>
            <div class="profile-card">
                <p class="title">Coordonnées</p>
                <div class="flex flex-col">
                    <div class="info ">
                        <i class="fas fa-phone-square-alt fa-lg text-primary"></i>
                        <p class="info-p">@if ($candidate->phone_number){{ $candidate->phone_number }} @else Non renseigné @endif</p>
                    </div>
                    <div class="info">
                        <i class="fas fa-envelope fa-lg text-primary"></i>
                        <a href="mailto: {{ $candidate->user->email }}" class="link link-underline cursor-pointer info-p">{{ $candidate->user->email }}</a>
                    </div>
                    <div class="info ">
                        <i class="fab fa-internet-explorer fa-lg text-primary"></i>
                        <p class="info-p">@if($candidate->website){{ $candidate->website }} @else Non renseigné @endif</p>
                    </div>
                    <div class="info">
                        <i class="fab fa-linkedin fa-lg text-primary"></i>
                        <p class="info-p">@if($candidate->linkedin){{ $candidate->linkedin }} @else Non renseigné @endif</p>
                    </div>
                    <div class="info">
                        <i class="fab fa-instagram fa-lg text-primary"></i>
                        <p class="info-p">@if ($candidate->instagram) {{ $candidate->instagram }} @else Non renseigné @endif</p>
                    </div>
                    <div class="info">
                        <i class="fab fa-facebook-square fa-lg text-primary"></i>
                        <p class="info-p">@if ($candidate->facebook) {{ $candidate->facebook }} @else Non renseigné @endif</p>
                    </div>
                </div>
            </div>
        </div>


    </article>


    <article class="content-section">
        <div class="split-section">
            <p class="text-2xl">Formation</p>
            <button class="btn-edit" id="form_edit_formation"><i class="fas fa-pencil-alt fa-lg text-white"></i></button>

        </div>
        <div class="flex flex-col xl:flex-row justify-center place-items-center xl:justify-between">
            <div class="highlight w-full xl:w-1/2   flex flex-col shadow-md rounded bg-white px-6 xl:px-10 py-6 mb-10">
                    <p class="title">Stage en pharmacie</p>
                    <p class="text-center">De mai 2020 à juillet 2020</p>
                    <p class="text-lg xl:text-xl mt-10 xl:mt-14">Stage rémunéré de 3 mois dans une pharmacie
                        dans le 5ème arrondissement de Paris.
                    </p><br>
                    <p class="text-lg xl:text-xl mt-2 xl:mt-5">- approvisionnement des stocks</p>
                    <p class="text-lg xl:text-xl mt-2 xl:mt-5">- conseil des clients</p>
                    <p class="text-lg xl:text-xl mt-2 xl:mt-5">- vente de médicaments sur ordonnance</p>
            </div>
            <div class="highlight w-full xl:w-1/2 ml-0 xl:ml-14 flex flex-col shadow-md rounded bg-white px-6 xl:px-10 py-6 mb-10">
                    <p class="title">Stage en pharmacie</p>
                    <p class="text-center">De mai 2020 à juillet 2020</p>
                    <p class="text-lg xl:text-xl mt-10 xl:mt-14">Stage rémunéré de 3 mois dans une pharmacie
                        dans le 5ème arrondissement de Paris.
                    </p><br>
                    <p class="text-lg xl:text-xl mt-2 xl:mt-5">- approvisionnement des stocks</p>
                    <p class="text-lg xl:text-xl mt-2 xl:mt-5">- conseil des clients</p>
                    <p class="text-lg xl:text-xl mt-2 xl:mt-5">- vente de médicaments sur ordonnance</p>
            </div>
            </div>
        </div>
    </article>

    <article class="content-section">
        <div class="split-section">
            <p class="text-light-blue font-title text-2xl">Expériences</p>
            <button class="btn-edit"" id="form_edit_experience"><i class="fas fa-pencil-alt fa-lg text-white"></i></button>

        </div>
        <div class="flex flex-col xl:flex-row justify-center place-items-center xl:justify-between">
            <div class="highlight w-full xl:w-1/2  flex flex-col shadow-md rounded bg-white px-6 xl:px-10 py-6 mb-10">
                <p class="title">Stage en pharmacie</p>
                <p class="text-center">De mai 2020 à juillet 2020</p>
                <p class="text-lg xl:text-xl mt-10 xl:mt-14">Stage rémunéré de 3 mois dans une pharmacie
                    dans le 5ème arrondissement de Paris.
                </p><br>
                <p class="text-lg xl:text-xl mt-2 xl:mt-5">- approvisionnement des stocks</p>
                <p class="text-lg xl:text-xl mt-2 xl:mt-5">- conseil des clients</p>
                <p class="text-lg xl:text-xl mt-2 xl:mt-5">- vente de médicaments sur ordonnance</p>
            </div>
            <div class="highlight w-full xl:w-1/2 ml-0 xl:ml-14 flex flex-col shadow-md rounded bg-white px-6 xl:px-10 py-6 mb-10">
                <p class="title">Stage en pharmacie</p>
                <p class="text-center">De mai 2020 à juillet 2020</p>
                <p class="text-lg xl:text-xl mt-10 xl:mt-14">Stage rémunéré de 3 mois dans une pharmacie
                    dans le 5ème arrondissement de Paris.
                </p><br>
                <p class="text-lg xl:text-xl mt-2 xl:mt-5">- approvisionnement des stocks</p>
                <p class="text-lg xl:text-xl mt-2 xl:mt-5">- conseil des clients</p>
                <p class="text-lg xl:text-xl mt-2 xl:mt-5">- vente de médicaments sur ordonnance</p>
            </div>
        </div>
        </div>
    </article>
</main>
@include('partials/footer')
@endsection
