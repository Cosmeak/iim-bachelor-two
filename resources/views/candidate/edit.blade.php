@extends('layout')
@include('partials/header')

@section('content')

@php
    $candidate = App\Models\Candidate::where('id_user', auth()->user()->id)->first();
    $location = App\Models\Location::where('id', $candidate->id_location)->first();
    $city = App\Models\City::where('id', $location->id_city)->first();
    $country = App\Models\Country::where('id', $location->id_country)->first();
@endphp




    <section class="bg-gray flex justify-center h-100 relative">
        <img src="../img/add-pic.svg" alt="add pic" class="my-60">
        <div class="flex rounded-full bg-white shadow-md absolute justify-center xl:left-[10%] bottom-[-30%] xl:bottom-[-40%] w-tiny h-tiny xl:w-lg xl:h-lg">
            <a href="" class="m-auto"><img width="50" height="50"  src="../img/add-pic.svg" alt="logo"></a>
        </div>
    </section>

    <article class="flex flex-col justify-evenly mx-14 mt-56 mb-20 place-items-center xl:flex xl:flex-row xl:justify-around xl:text-left ">
        <div class="flex flex-col text-center xl:justify-between place-items-center ">

            <div class="flex flex-row my-10">
                <input class="border-2 border-light-blue font-title text-3xl xl:text-4xl mx-2 xl:mx-10" value="@if ($candidate->first_name) {{$candidate->first_name}} @else Non renseigné @endif"> 
                <input class=" border-2 border-light-blue font-title text-3xl xl:text-4xl mx-2 xl:mx-10 uppercase" value="@if ($candidate->last_name) {{$candidate->last_name}} @else Non renseigné @endif">
                <img src="../img/overwrite-icon.svg" alt="overwrite" class="w-xxs h-xxs">
            </div>
            <div class="flex flex-row my-10">
                <input class=" border-2 border-light-blue font-title text-3xl xl:text-4xl mx-2 xl:mx-8" value="@if ($city->label) {{$city->label}} @else Non renseigné @endif"> 
                <input class="border-2 border-light-blue font-title text-3xl xl:text-4xl mx-2 xl:mx-8" value="@if($country->label) {{ $country->label }} @else Non renseigné @endif">
            </div>

        </div>



    </article>


    <article class="my-14">

        <div class="flex flex-row justify-center place-items-center">
            <h2 class="text-light-blue font-title mx-3 text-4xl">Coordonnées</h2>
            <img src="../img/overwrite-icon.svg" alt="overwrite" class="w-xxs h-xxs">
        </div>
        <div class="flex xl:flex-row flex-col xl:justify-around ml-16 xl:items-center xl:mx-64 my-14" >

            <div class=" flex flex-col xl:text-left">
                <div class="flex items-center mb-2 ">
                    <i class="fas fa-phone-square-alt fa-2x"></i>
                    <input class=" border-2 border-light-blue text-xl xl:text-2xl mx-4" value="@if ($candidate->phone_number){{ $candidate->phone_number}} @else Non renseigné @endif">
                </div>
                <div class="flex items-center mb-2 ">
                    <i class="fas fa-envelope fa-2x"></i>
                    <input class="border-2 border-light-blue text-xl xl:text-2xl mx-4" value="{{auth()->user()->email}}">
                </div>
                
            </div>
            <div class=" flex flex-col xl:text-left">
                <div class="flex items-center mb-2 ">
                    <i class="fab fa-internet-explorer fa-2x"></i>
                    <input class="border-2 border-light-blue text-xl xl:text-2xl mx-4" value="@if ($candidate->website) {{ $candidate->website}} @else Non renseigné @endif">
                </div>

                <div class="flex items-center mb-2">
                    <i class="fab fa-linkedin fa-2x"></i>
                    <input class="border-2 border-light-blue text-xl xl:text-2xl mx-4" value="@if ($candidate->linkedin) {{ $candidate->linkedin}} @else Non renseigné @endif">
                </div>
            </div>
            <div class=" flex flex-col xl:text-left">
                <div class="flex items-center mb-2">
                    <i class="fab fa-instagram fa-2x"></i>
                    <input class="border-2 border-light-blue text-xl xl:text-2xl mx-4" value="@if ($candidate->instagram) {{ $candidate->instagram}} @else Non renseigné @endif">
                </div>
                <div class="flex items-center mb-2">
                    <i class="fab fa-facebook-square fa-2x"></i>
                    <input class="border-2 border-light-blue text-xl xl:text-2xl mx-4" value="@if ($candidate->facebook) {{ $candidate->facebook}} @else Non renseigné @endif">
                </div>

            </div>
        </div>
</div>
</article>

<div class="flex flex-row justify-center place-items-center mt-20" >
    
    <h2 class="text-light-blue font-title mx-3 text-2xl xl:text-3xl">Formation</h2>
    <img src="../img/overwrite-icon.svg" alt="overwrite" class="w-xxs h-xxs">
</div>

<section class="xl:flex xl:flex-row xl:justify-evenly xl:mt-14 flex flex-col justify-center place-items-center">
    <div class="flex flex-col items-start">
        <label for="img" class="my-4">CV</label>

        <div class="dashed-hover py-20 px-20 bg-white ">
            <input id="file-input" type="file" class="hidden" name="pdf">
            <label for="file-input"><img width="50" height="50" class="m-auto cursor-pointer"  src="../img/add-pic.svg" alt="logo"></label>
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