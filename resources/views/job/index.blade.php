@extends('layout')
@include('partials/header')
@section('content')

{{-- <section class="moving-gradient p-12 text-lg xl:text-xl">
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
</section> --}}

<section class="content-section">
    <div class="flex flex-col items-center">
        <h2>Résultats</h2>
        <input class="mt-6 mb-1 cursor-pointer btn-blue" type="submit" value="Postuler à toutes les offres">
    </div>
    <div class="subcontent-section-grid">
        @foreach ($jobs as $job)
        <div class="profile-card">
            <p class="title">{{ $job->label }}</p>
            <p class="info-p">{{ $job->description }}</p>
            <a href="{{route('job.show', [$job->id])}}" class="btn-form relative mt-auto mx-auto">En savoir plus<i class="fas fa-chevron-right fa-sm ml-[8px]"></i></a>
        </div>
        @endforeach
    </div>
</section>
@include('partials/footer')

@endsection
