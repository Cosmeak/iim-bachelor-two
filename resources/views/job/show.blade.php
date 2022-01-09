@extends('layout')
@include('partials/header')
@section('content')
<main class="profile-show">
    <section class="content-section mt-[32px]">
        <div class="split-section">
            <a class="btn-plus z-10" href="{{ url()->previous() }}"><i class="fas fa-chevron-left fa-lg text-white ml-[-4px]"></i></a>
            <h1 class="text-xl">{{ $job->label }}</h1>
        </div>
        <div class="moving-gradient rounded">
            <div class="flex xl:flex-row flex-col justify-center place-items-center xl:justify-evenly my-8 xl:my-14">
                <div class="text-center my-4">
                    <div class="flex flex-col justify-center text-center rounded-2xl bg-white xl:text-6xl text-4xl xl:w-base xl:h-sm p-8 px-10">
                        <h2>@if (!empty($job->candidate)) {{$job->candidate->count()}} @else 0 @endif </h2>
                    </div>
                    <p class="text-white text-2xl xl:mt-5 my-2">Candidatures reçues</p>
                </div>

                <div class="text-center my-4">
                    <div class="flex flex-col justify-center text-center rounded-2xl bg-white xl:text-6xl text-4xl xl:w-base xl:h-sm p-8 px-10">
                        <h2>?</h2>
                    </div>
                    <p class="text-white text-2xl xl:mt-5 my-2">Candidatures pertinentes</p>
                </div>
            </div>
            <p class="text-center text-white text-xl">Date de publication : {{ $job->created_at }}</p>
            @if (!empty(auth()->user()->company))
                @if (auth()->user()->company->id == $job->company->id)
                    <div
                        class="flex flex-col xl:flex-row xl:justify-evenly justify-center place-items-center my-[16px]">
                        <button id="stop_job" class="btn-yellow my-2 ">Suspendre le poste</button>
                        <button id="edit_job" class="btn-white my-2 ">Modifier la fiche de poste</button>
                        <button id="delete_job" class="btn-red my-2">Supprimer le poste</button>
                    </div>
                @endif
            @endif
        </div>
        <div class="subcontent-section">
            <div class="profile-card">
                <h3 class="title">Description de la mission</h3>
                <p class="info-p">{{ $job->description }}</p>
            </div>
            <div class="profile-card">
                <p class="title">Information sur la mission</p>
                <div class="flex flex-col">
                    <p class="info-p">Secteur: {{ $job->sector->label }}</p>
                    <p class="info-p">Mode de travail: {{ $job->workingMode->label }}</p>
                    <p class="info-p">Type de contrat: {{ $job->contractType->label }}</p>
                    @if (!empty($job->location))
                        <p class="info-p">Localisation: {{ $job->location->city->label }}, {{ $job->location->country->label }}</p>
                    @endif
                </div>
            </div>
        </div>
    </section>

    @if (!empty(auth()->user()->company))
        @if (auth()->user()->company->id == $job->company->id)
            <section class="content-section">
                <div class="split-section">
                    <p class="title">Candidats postulant</p>
                </div>
                <div class="subcontent-section-grid">
                    <div class="job-candidate">
                        <div class="candidate-name">
                            <p class="font-bold underline text-2xl mb-2">Candidat</p>
                            <p class="text-lg xl:text-xl">Nom du candidat</p>
                        </div>
                        <div class="candidate-rate">
                            <p class="font-bold underline text-2xl mb-2">Taux de match</p>
                            <p class="text-lg xl:text-xl">84%</p>
                        </div>
                    </div>
                    <div class="job-candidate ">
                        <div class="candidate-name">
                            <p class="font-bold underline text-2xl mb-2">Candidat</p>
                            <p class="text-lg xl:text-xl">Nom du candidat</p>
                        </div>
                        <div class="candidate-rate">
                            <p class="font-bold underline text-2xl mb-2">Taux de match</p>
                            <p class="text-lg xl:text-xl">94%</p>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @endif

    @if (!empty(auth()->user()->candidate))
        @if ( empty(auth()->user()->candidate->job->where('id', $job->id) ) ) 
            <form action="{{ route('job.addCandidate') }}" method="POST" class="content-section">
                @csrf
                <input type="hidden" value="{{ $job->id }}" name="job_id">
                <button class="btn-form mx-auto">Postuler à la mission</button>
            </form>
        @else
            <div class="content-section">
                <p class="btn-form mx-auto">Vous avez déjà postulé à cette mission</p>
            </div>
        @endif
    @endif
</main>
@include('partials/footer')
@endsection
