@extends('layout')
@include('partials/header')
@section('content')
<main class="profile-show">
    <section class="content-section moving-gradient  p-[16px]">
        <h2 class="text-center text-2xl text-white">Recherche de missions</h2>
        <form class="flex flex-col gap-[16px] m-0" action="{{ route('job.index') }}" method="GET" role="search">
            @csrf
            <div class="subcontent-section">
                <input type="text" class="btn-primary" placeholder="Recherche par mots clés" name="search" value="{{ old('search') }}">
                <select class="btn-primary" type="text" name="contract_type_id">
                    <option value="">Type de contrat</option>
                    @php
                        $contracts = App\Models\ContractType::all();
                    @endphp
                    @foreach ($contracts as $contract)
                        <option value="{{ $contract->id }}">{{ $contract->label }}</option>
                    @endforeach
                </select>
                <select class="btn-primary" type="text" name="working_mode">
                    <option value="">Mode de travail</option>
                    @php
                        $working_mods = App\Models\WorkingMode::all();
                    @endphp
                    @foreach ($working_mods as $working_mod)
                        <option value="{{ $working_mod->id }}">{{ $working_mod->label }}</option>
                    @endforeach
                </select>
                <select class="btn-primary" name="sector">
                    <option value="">Secteur d'activité</option>
                    @php
                        $Sector = App\Models\Sector::all();
                    @endphp
                    @foreach ($Sector as $sector)
                        <option value="{{ $sector->id }}">{{ $sector->label }}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn-white relative my-0 mx-auto" type="submit">Rechercher</button>
        </form>
    </section>
    
    <section class="content-section">
        <h2 class="title text-center">Résultats</h2>
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
</main>
@include('partials/footer')
@endsection
