@extends('layout')
@include('partials/header')

@section('content')
@php
  $auth_id =  auth()->user()->id;
  $company = App\Models\Company::where('id_user', auth()->user()->id)->first();
@endphp

<section class="text-xl">
  <div class="bg-primary flex justify-center text-white items-center py-32">
      <h1 class="text-5xl">Créer un job</h1><br>
  </div>
  <form class="flex flex-col xl:mx-96 items-center" method="POST" action="/employer/new-job">
    @csrf
    <input type="hidden" name="id_company" value="{{$company->id}}">
    <input type="hidden" name="archive_date" value="<?= date('Y-m-d') ?>">
    <div class="flex flex-col xl:flex-row py-10" >
      <div class="flex flex-col items-start mx-16 my-4">
        <label for="label"class="my-2" >Nom</label>
        <div class="input-div">
          <input class="btn-second text-gray-400 outline-input" type="text" placeholder="Nom" name="label">
          <span class="focus-border"><i></i></span>
        </div>
      </div>
      <div class="flex flex-col items-start mx-16 my-4">
        <label for="id_sector"class="my-2 " >Domaine d'activité</label>
        <div class="input-div">
          <select name="id_sector" class="btn-second outline-input">
            <option value="">--Sélectionnez l'option--</option>
            @php
              $sectors = App\Models\Sector::all()
            @endphp
            @foreach ($sectors as $sector)
              <option value="{{ $sector->id }}">{{ $sector->label }}</option>
            @endforeach
          </select>
          <span class="focus-border"><i></i></span>
        </div>
      </div>
      <div class="flex flex-col items-start mx-16 my-4">
        <label for="id_contract_type" class="my-2" >Type de contrat</label>
        <div class="input-div">
          <select name="id_contract_type" class="btn-second text-gray-400 outline-input">
            @php
              $contracts = App\Models\ContractType::all()
            @endphp
            @foreach ($contracts as $contract)
              <option value="{{ $contract->id }}">{{ $contract->label }}</option>
            @endforeach
          </select>
          <span class="focus-border"><i></i></span>
        </div>
      </div>
      <div class="flex flex-col items-start mx-16 my-4">
        <label for="salary" class="my-2">Salaire</label>
        <div class="input-div">
          <input class="btn-second text-gray-400 outline-input" type="text" placeholder="Salaire" name="salary">
          <span class="focus-border"><i></i></span>
        </div>
      </div>
    </div>
    <div class="flex flex-col xl:flex-row py-10">
      <div class="flex flex-col items-start mx-16 my-4">
        <label for="id_working_mode" class="my-2" >Type de travail</label>
        <div class="input-div">
          <select name="id_working_mode" id="" class="btn-second text-gray-400 outline-input">
            @php
              $works = App\Models\WorkingMode::all()
            @endphp
            @foreach ($works as $work)
              <option value="{{ $work->id }}">{{ $work->label }}</option>
            @endforeach
          </select>
          <span class="focus-border"><i></i></span>
          </div>
        </div>
        <div class="flex flex-col items-start mx-16 my-4">
          <label for="description" class="my-2">Description</label>
          <div class="input-div">
            <textarea class="btn-second text-gray-400 outline-input text-gray-400 h-32" type="text" placeholder="Présentez le travail en quelques lignes..." name="description"></textarea>
            <span class="focus-border"><i></i></span>
          </div>
        </div>
    </div>
    <input type="submit" value="Valider" class="my-12 btn-blue cursor-pointer">
  </form>
</section>
@include('partials/footer')
@endsection
