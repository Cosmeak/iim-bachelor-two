@extends('layout')
@include('partials/header')
@section('content')

@php
$company = App\Models\Company::where('id_user', auth()->user()->id)->first();
  $sector = App\Models\Sector::where('id', $company->id_sector)->first();
  $company_size = App\Models\CompanySize::where('id', $company->id_company_size)->first();

  $jobs = App\Models\Job::where('id_company', $company->id)->get();
  foreach ($jobs as $job) {
    
  }
@endphp
  

<section class="bg-primary w-full h-auto p-8 xl:p-24 flex flex-col xl:flex-row gap-8 xl:justify-center xl:place-items-center">
  <div class="rounded-full bg-white shadow-md p-4 xl:p-8 w-fit m-auto xl:m-0">
    <img class="h-32 xl:w-sm xl:h-auto object-contain m-auto" src="./img/logo.png" alt="logo">
  </div>
  
  <div class="w-full text-center xl:text-left xl:w-1/2 text-white ">
    @if ($company->count() > 0)
      <div class="flex justify-between">
        <h1 class="font-bold text-xl xl:text-3xl pb-8">{{$company->name}}</h1>
        <h1 class="font-bold text-xl xl:text-3xl pb-8">Secteur : {{$sector->label}}</h1>
      </div>
      <div class="text-lg leading-relaxed">
        <h2 class="font-bold text-2xl pb-8">Taille de l'entreprise : {{$company_size->label}}</h2>
        <p>Description : {{$company->description}}</p>
      </div>
    @else
      <h1 class="font-bold text-xl xl:text-3xl pb-8">Aucune Entreprise</h1>
    @endif
  </div>
</section>
  

<section class="py-16 flex flex-col gap-16">
  @if ($jobs->count() > 0)
    @foreach ($jobs as $job)
      @php
        $working_mode = App\Models\WorkingMode::where('id', $job->id_working_mode)->first();
        $contract = App\Models\ContractType::where('id', $job->id_contract_type)->first();
        $sector_job = App\Models\Sector::where('id', $job->id_sector)->first();
      @endphp
      <article class="w-3/4 m-auto bg-white shadow-md p-8 rounded-[20px]">
        <div class="flex justify-between ">
          <h3 class="font-bold text-lg xl:text-xl pb-2">Titre de l'annonce : {{$job->label}}</h3>
          <h3 class="font-bold text-lg xl:text-xl pb-2">Secteur : {{$sector_job->label}}</h3>
        </div>
        <h3 class="text-lg pb-4">{{$working_mode->label}}, {{$contract->label}} </h3>
        
        <p class="leading-relaxed"><span>Description : {{$job->description}}</p>
      </article>
  @endforeach
  @else
    <article class="w-3/4 m-auto bg-white shadow-md p-8 rounded-[20px]">
      <h3 class="font-bold text-lg xl:text-xl pb-4">Aucun travail</h3>
    </article>
  @endif
  
  <article class="bg-primary text-white text-center m-24 xl:mx-20 p-10 flex flex-col justify-center place-items-center gap-8">
    <h3 class="font-title xl:text-4xl text-2xl">Pour créer un nouveau travail, cliquez ici</h3>
    <a href="{{route('job.create')}}" class="rounded-full border-2 border-white bg-white text-xl xl:text-2xl text-primary py-2 px-4 hover:text-white hover:bg-primary hover:border-2 hover:border-white transition duration-150 ease-out hover:ease-in">Créer un job</a>
  </article>
</section>
@include('partials/footer')
@endsection