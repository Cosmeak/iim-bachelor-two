@extends('layout')
@include('partials/header')

@section('content')

    <section class="moving-gradient w-8/12 rounded-b-[10px] flex justify-center m-auto h-100 relative">
        <span class="my-60"></span>
        <div class="flex rounded-full bg-white shadow-md absolute justify-center bottom-[-30%] xl:bottom-[-28%] w-xxs h-xss xl:w-72 xl:h-72">
            <a href="" class="m-auto"><img width="50" height="50" src="@if($candidate->profile_picture){{ $candidate->profile_picture }}@else ../img/logo.png @endif" alt="logo"></a>
        </div>
    </section>


    <article class="flex flex-col w-8/12 m-auto  my-4 mt-44">
        <div class="flex flex-row justify-center place-items-center py-8 shadow-md w-full my-12 m-auto rounded bg-white highlight relative">
            <div class="text-center">
                <h2 class="text-light-blue font-title text-4xl">Informations</h2>
            </div>
            <div class="flex justify-center place-items-center rounded-full bg-primary w-14 h-14 absolute right-10 shadow-inset ">
                <a href="" class="z-10 m-auto"><i class="fas fa-pencil-alt fa-2x text-white"></i></a>
            </div>

        </div>
        <div class="flex flex-row justify-between">
            <div class="highlight w-1/2 mr-14 flex flex-col shadow-md rounded bg-white px-10 py-6">
                <h2 class="text-light-blue font-title text-3xl xl:text-4xl text-center my-6">Profil</h2>
                <div class="flex flex-row text-left my-2">
                    <i class="fas fa-id-card fa-2x text-primary"></i>
                    <h2 class="font-title text-xl xl:text-3xl mx-2">{{ $candidate->first_name }} <span class="uppercase">{{ $candidate->last_name }}</span></h2>
                </div>
                {{-- <h3 class="text-2xl xl:text-3xl"> @if ($candidate->location()) {{ $candidate->location->country->label }}, {{ $candidate->location->city->label }} @else Non renseigné @endif<h3> --}}
                <div class="flex flex-row text-left my-2">
                    <i class="fas fa-user-graduate fa-2x text-primary"></i>
                    <h2 class="font-title text-xl xl:text-3xl mx-2">Étudiante</h2>
                </div>
                <div class="flex flex-row text-left my-2">
                    <i class="fas fa-map-marker-alt fa-2x text-primary"></i>
                    <h2 class="font-title text-xl xl:text-3xl mx-2">Nantes,France</h2>
                </div>

                <div class="flex flex-col justify-center place-items-center">
                    <label for="img" class="my-4">CV</label>
                    <div class="dashed-hover z-10 py-20 px-20 bg-white">
                        <input id="file-input" type="file" class="hidden" name="pdf">
                        <label for="file-input"><i class="fas fa-camera fa-3x text-primary"></i></label>
                    </div>
                </div>
            </div>
            <div class="highlight flex flex-col w-1/2 ml-14 shadow-md rounded bg-white px-10 py-6">
                    <h2 class="text-light-blue font-title mx-3 text-3xl xl:text-4xl text-center my-6">Coordonnées</h2>
                <div class="flex flex-col">
                    <div class="flex items-center mb-2 ">
                        <i class="fas fa-phone-square-alt fa-2x text-primary"></i>
                        <p class="text-xl xl:text-3xl mx-4">@if ($candidate->phone_number){{ $candidate->phone_number }} @else Non renseigné @endif</p>
                    </div>
                    <div class="flex items-center mb-2">
                        <i class="fas fa-envelope fa-2x text-primary"></i>
                        <a href="mailto: {{ $candidate->user->email }}" class="link link-underline cursor-pointer text-xl xl:text-3xl mx-4">{{ $candidate->user->email }}</a>
                    </div>
                    <div class="flex items-center mb-2 ">
                        <i class="fab fa-internet-explorer fa-2x text-primary"></i>
                        <p class="text-xl xl:text-3xl mx-4">@if($candidate->website){{ $candidate->website }} @else Non renseigné @endif</p>
                    </div>
                    <div class="flex items-center mb-2">
                        <i class="fab fa-linkedin fa-2x text-primary"></i>
                        <p class="text-xl xl:text-3xl mx-4">@if($candidate->linkedin){{ $candidate->linkedin }} @else Non renseigné @endif</p>
                    </div>
                    <div class="flex items-center mb-2">
                        <i class="fab fa-instagram fa-2x text-primary"></i>
                        <p class="text-xl xl:text-3xl mx-4">@if ($candidate->instagram) {{ $candidate->instagram }} @else Non renseigné @endif</p>
                    </div>
                    <div class="flex items-center mb-2">
                        <i class="fab fa-facebook-square fa-2x text-primary"></i>
                        <p class="text-xl xl:text-3xl mx-4">@if ($candidate->facebook) {{ $candidate->facebook }} @else Non renseigné @endif</p>
                    </div>
                </div>
            </div>
        </div>


    </article>


    <article class="flex flex-col w-8/12 m-auto my-4 mt-14">
        <div class="flex flex-row justify-center place-items-center py-8 shadow-md w-full my-12 m-auto rounded bg-white highlight relative">
            <div class="text-center">
                <h2 class="text-light-blue font-title text-4xl">Formation</h2>
            </div>
            <div class="flex justify-center place-items-center rounded-full bg-primary w-14 h-14 absolute right-10 shadow-inset ">
                <a href="" class="z-10 m-auto"><i class="fas fa-pencil-alt fa-2x text-white"></i></a>
            </div>

        </div>
        <div class="flex flex-row justify-between">
            <div class="highlight w-1/2 mr-14 flex flex-col shadow-md rounded bg-white px-10 py-6 pb-36">
                    <h3 class="font-title text-light-blue text-center text-2xl font-bold mt-5">Stage en pharmacie</h3>
                    <p class="text-center">De mai 2020 à juillet 2020</p>
                    <p class="text-xl mt-14">Stage rémunéré de 3 mois dans une pharmacie
                        dans le 5ème arrondissement de Paris.
                    </p><br>
                    <p class="text-xl mt-5">- approvisionnement des stocks</p>
                    <p class="text-xl mt-5">- conseil des clients</p>
                    <p class="text-xl mt-5">- vente de médicaments sur ordonnance</p>
            </div>
                <div class="highlight w-1/2 ml-14 flex flex-col shadow-md rounded bg-white px-10 py-6 pb-36">
                    <h3 class="font-title text-light-blue text-center text-2xl font-bold mt-5">Stage en pharmacie</h3>
                    <p class="text-center">De mai 2020 à juillet 2020</p>
                    <p class="text-xl mt-14">Stage rémunéré de 3 mois dans une pharmacie
                        dans le 5ème arrondissement de Paris.
                    </p><br>
                    <p class="text-xl mt-5">- approvisionnement des stocks</p>
                    <p class="text-xl mt-5">- conseil des clients</p>
                    <p class="text-xl mt-5">- vente de médicaments sur ordonnance</p>
                </div>
            </div>
        </div>
    </article>

    <article class="flex flex-col w-8/12 m-auto my-4 mt-14">
        <div class="flex flex-row justify-center place-items-center py-8 shadow-md w-full my-12 m-auto rounded bg-white highlight relative">
            <div class="text-center">
                <h2 class="text-light-blue font-title text-4xl">Expériences</h2>
            </div>
            <div class="flex justify-center place-items-center rounded-full bg-primary w-14 h-14 absolute right-10 shadow-inset ">
                <a href="" class="z-10 m-auto"><i class="fas fa-pencil-alt fa-2x text-white"></i></a>
            </div>

        </div>
        <div class="flex flex-row justify-between">
            <div class="highlight w-1/2 mr-14 flex flex-col shadow-md rounded bg-white px-10 py-6 pb-36">
                <h3 class="font-title text-light-blue text-center text-2xl font-bold mt-5">Stage en pharmacie</h3>
                <p class="text-center">De mai 2020 à juillet 2020</p>
                <p class="text-xl mt-14">Stage rémunéré de 3 mois dans une pharmacie
                    dans le 5ème arrondissement de Paris.
                </p><br>
                <p class="text-xl mt-5">- approvisionnement des stocks</p>
                <p class="text-xl mt-5">- conseil des clients</p>
                <p class="text-xl mt-5">- vente de médicaments sur ordonnance</p>
            </div>
            <div class="highlight w-1/2 ml-14 flex flex-col shadow-md rounded bg-white px-10 py-6 pb-36">
                <h3 class="font-title text-light-blue text-center text-2xl font-bold mt-5">Stage en pharmacie</h3>
                <p class="text-center">De mai 2020 à juillet 2020</p>
                <p class="text-xl mt-14">Stage rémunéré de 3 mois dans une pharmacie
                    dans le 5ème arrondissement de Paris.
                </p><br>
                <p class="text-xl mt-5">- approvisionnement des stocks</p>
                <p class="text-xl mt-5">- conseil des clients</p>
                <p class="text-xl mt-5">- vente de médicaments sur ordonnance</p>
            </div>
        </div>
        </div>
    </article>

    @include('partials/footer')


@endsection
