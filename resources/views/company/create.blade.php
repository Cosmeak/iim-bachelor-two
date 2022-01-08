@extends('layout')
@section('content')

<section class="xl:w-screen xl:h-screen overflow-hidden relative">
    <section class="text-xl flex items-center flex-col xl:h-screen justify-center mt-24 xl:mt-0">
        <div
            class="hidden xl:block rounded-full w-2xl h-2xl bg-primary absolute -right-52 -top-64 border-2 border-blue-400">
        </div>
        <div class="hidden xl:block rounded-full w-2xl h-2xl bg-primary absolute -left-96 border-2 border-blue-400">
        </div>
        <div
            class="hidden xl:block rounded-md w-2xl h-2xl bg-primary absolute right-52 top-3/4 border-2 border-blue-400">
        </div>


        <form class="flex flex-col px-8 pb-10 pt-32  bg-white relative shadow-md rounded-lg xl:w-xl xl:h-2xl" method="POST" action="{{ route('company.store') }}">
            @csrf {{-- Token check --}}
            <div class=" w-40 h-40 rounded-full mb-6 bg-white shadow-md absolute -translate-x-1/2 left-1/2 -top-20">
                <img src="../img/logo.png" alt="logo">
            </div>
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

            <section id="content_inscription_1" class="flex flex-col justify-center items-center px-16 h-xl">
                <div class="flex flex-col items-start my-4">
                    <label for="name" class="my-2">Nom de l'entreprise</label>
                    <input class="btn-primary" type="text" name="name" value="{{ old('name') }}">
                    @error('name')
                        <p class="text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col items-start my-4">
                    <label for="description" class="my-2">Description de l'entreprise</label>
                    <textarea class="resize-none btn-primary py-4 h-tiny" type="text" name="description"
                        value="{{ old('description') }}"> </textarea>
                    @error('description')
                        <p class="text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

            </section>
            <div id="next_inscription_1" class="flex justify-end mt-auto">
                <a id="inscription_1" class=" cursor-pointer btn-blue ">Suivant </a>
            </div>



            <section id="content_inscription_2" class="hidden flex-col justify-center items-center px-16 h-xl">
                <div id="container_form" class="my-4">
                    <label for="sector_id" class="my-2">Secteur d'activité</label>
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
                        @error('id_sector')
                            <p class="text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div id="container_form" class=" mt-4">
                    <label for="company-size_id" class="my-2">Taille de l'entreprise</label>
                    <div class=" options flex flex-col items-start mt-4">
                        <select class="btn-primary" type="text" name="company_size_id">
                            <option value="">--Sélectionnez l'option--</option>
                            @php
                                $companySize = App\Models\CompanySize::all();
                            @endphp
                            @foreach ($companySize as $size)
                                <option value="{{ $size->id }}">{{ $size->label }}</option>
                            @endforeach
                        </select>
                        @error('company_size_id')
                            <p class="text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-col items-start my-4">
                    <label for="email" class="my-2">Email de l'entreprise</label>
                    <input class="btn-primary" type="email" name="email">
                    @error('email')
                        <p class="text-red-500 mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col items-start my-4">
                    <label for="phone_number" class="my-2">Numéro de téléphone</label>
                    <input class="btn-primary" type="tel" name="phone_number">
                    @error('phone_number')
                        <p class="text-red-500 mt-2">{{ $message }}</p>
                    @enderror
                </div>
            </section>
            <div id="next_inscription_2" class="hidden justify-between mt-auto">
                <a id="back_1" class=" cursor-pointer btn-blue ">Retour</a>
                <a id="inscription_2" class=" cursor-pointer btn-blue ">Suivant </a>
            </div>

            <section id="content_inscription_3" class="hidden flex-col justify-center items-center px-16 h-xl">
                <div class="flex flex-col items-start my-4">
                    <label for="website" class="my-2">Site Internet</label>
                    <input class="btn-primary" type="url" name="website">
                    @error('website')
                        <p class="text-red-500 mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col items-start my-4">
                    <label for="facebook" class="my-2">Facebook</label>
                    <input class="btn-primary" type="text" name="facebook">
                    @error('facebook')
                        <p class="text-red-500 mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col items-start my-4">
                    <label for="instagram" class="my-2">Instagram</label>
                    <input class="btn-primary" type="text" name="instagram">
                    @error('instagram')
                        <p class="text-red-500 mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col items-start my-4">
                    <label for="linkedin" class="my-2">LinkedIn</label>
                    <input class="btn-primary" type="text" name="linkedin">
                    @error('linkedin')
                        <p class="text-red-500 mt-2">{{ $message }}</p>
                    @enderror
                </div>

            </section>
            <div id="next_inscription_3" class="hidden justify-between mt-auto">
                <a id="back_2" class="cursor-pointer btn-blue ">Retour</a>
                <a id="inscription_3" class=" cursor-pointer btn-blue ">Suivant </a>
            </div>

            <section id="content_inscription_4" class="hidden flex-col justify-center items-center px-16 h-xl">
                <div class="flex flex-col items-start my-4">
                    <label for="logo" class="my-2">Logo</label>
                    <input type="file" class=" rounded-xl py-24 px-8 border-2 border-slate-600 border-dashed bg-white"
                        name="logo">
                    @error('logo')
                        <p class="text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </section>
            <div id="next_inscription_4" class="hidden justify-between mt-auto">
                <a id="back_3" class="cursor-pointer btn-blue ">Retour</a>
                <button id="sub_inscription" type="submit" class=" btn-blue">Valider</button>
            </div>
        </form>
    </section>
</section>

@endsection
