@extends('layout')
@include('partials/header')

@section('content')
    <main class="pt-[80px]"></main>
    <section class="flex flex-col justify-center items-center">
        <section
            class="px-12 xl:px-64 justify-center flex flex-col moving-gradient h-[100px] shadow-md rounded-b-xl w-10/12 xl:w-1/2 mx-auto items-center">
            <h2 class="text-3xl text-center text-white font-bold">Créer un travail</h2>
        </section>

        <form action="{{ route('job.store') }}" method="POST"
            class="w-10/12 xl:w-1/2 bg-white my-10 flex flex-col py-8 shadow-lg rounded-xl">
            @csrf
            <section class="flex flex-wrap justify-evenly">
                <div class="flex flex-col justify-center">
                    <div class="flex flex-col my-2">
                        <label for="label">Nom <span class="text-red-500">*</span></label>
                        <input type="text" class=" my-2 btn-primary" name="label">
                    </div>
                    <div class="flex flex-col my-2">
                        <label for="description">Description <span class="text-red-500">*</span></label>
                        <textarea name="description" id="" cols="30" rows="15"
                            class=" my-2 btn-primary resize-none"></textarea>
                    </div>
                    <div class="flex flex-col my-2">
                        <label for="salary">Salaire</label>
                        <input type="text" class=" my-2 btn-primary" name="salary">
                    </div>

                </div>
                <div class="flex flex-col">
                    <div class="flex flex-col my-2">
                        <label for="working_mode_id">Mode de travail <span class="text-red-500">*</span></label>
                        <div class="flex flex-col items-start mt-4">
                            <select class="btn-primary" type="text" name="working_mode_id">
                                <option value="">--Sélectionnez l'option--</option>
                                @php
                                    $working_mods = App\Models\WorkingMode::all();
                                @endphp
                                @foreach ($working_mods as $working_mod)
                                    <option value="{{ $working_mod->id }}">{{ $working_mod->label }}</option>
                                @endforeach
                            </select>
                            @error('working_mode_id')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex flex-col my-2">
                        <label for="contract_type_id">Type de contrat <span class="text-red-500">*</span></label>
                        <div class=" options flex flex-col items-start mt-4">
                            <select class="btn-primary" type="text" name="contract_type_id">
                                <option value="">--Sélectionnez l'option--</option>
                                @php
                                    $contracts = App\Models\ContractType::all();
                                @endphp
                                @foreach ($contracts as $contract)
                                    <option value="{{ $contract->id }}">{{ $contract->label }}</option>
                                @endforeach
                            </select>
                            @error('contract_type_id')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex flex-col my-2">
                        <label for="label">Secteur d'activité <span class="text-red-500">*</span></label>
                        <div class=" options flex flex-col items-start mt-4">
                            <select class="btn-primary" type="text" name="sector_id">
                                <option value="">--Sélectionnez l'option--</option>
                                @php
                                    $Sector = App\Models\Sector::all();
                                @endphp
                                @foreach ($Sector as $sector)
                                    <option value="{{ $sector->id }}">{{ $sector->label }}</option>
                                @endforeach
                            </select>
                            @error('sector_id')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex flex-col my-2">
                        <label for="tag_id_1">Tag (1 obligatoire) <span class="text-red-500">*</span></label>
                        <input type="text" class=" my-2 btn-primary" name="tag_id_1">
                    </div>
                    <div class="flex flex-col my-2">
                        <label for="city">Localisation</label>
                        <div class=" options flex flex-col items-start mt-4">
                            <select class="btn-primary" type="text" name="city">
                                <option value="">--Sélectionnez l'option--</option>
                                @php
                                    $cities = App\Models\City::all();
                                @endphp
                                @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->label }}</option>
                                @endforeach
                            </select>
                            @error('city')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class=" options flex flex-col items-start mt-4">
                            <select class="btn-primary" type="text" name="country">
                                <option value="">--Sélectionnez l'option--</option>
                                @php
                                    $countries = App\Models\Country::all();
                                @endphp
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->label }}</option>
                                @endforeach
                            </select>
                            @error('country')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <input type="text" class=" my-1 btn-primary" placeholder="Adresse" name="address">
                        <input type="text" class=" my-1 btn-primary" placeholder="Code postal" name="zipcode">
                    </div>
                </div>
            </section>
            <div class="flex justify-center pt-10">
                <button type="submit" class="btn-form">Valider</button>
            </div>

        </form>
    </section>

@include('partials/footer')
@endsection
