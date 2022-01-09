@extends('layout')

@section('content')
    <section class="xl:w-screen xl:h-screen overflow-hidden relative">
        <section class=" text-xl flex items-center flex-col xl:h-screen justify-center mt-24 xl:mt-0">
            <div
                class="hidden xl:block rounded-full w-2xl h-2xl bg-primary absolute -right-52 -top-64 border-2 border-blue-400">
            </div>
            <div class="hidden xl:block rounded-full w-2xl h-2xl bg-primary absolute -left-96 border-2 border-blue-400">
            </div>
            <div
                class="hidden xl:block rounded-md w-2xl h-2xl bg-primary absolute right-52 top-3/4 border-2 border-blue-400">
            </div>
            
            <form class="flex flex-col px-8 pb-10 pt-32  bg-white relative shadow-md rounded-lg xl:w-xl xl:h-2xl"
                method="POST" action="{{ route('candidate.store') }}">
                @csrf
                <div class="  w-40 h-40 rounded-full mb-6 bg-white shadow-md absolute -translate-x-1/2 left-1/2 -top-20">
                    <img src="../img/logo.png" alt="logo">
                </div>
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                {{-- <input type="hidden" name="location_id" value="2"> --}}
                <section id="content_inscription_1" class="flex flex-col justify-center items-center px-16 h-xl">
                    <div class="flex flex-col items-start my-4">
                        <label for="last_name" class="my-2">Nom <span class="text-red-500">*</span></label>
                        <input class="btn-primary" type="text" name="last_name" value="{{ old('last_name') }}">
                        @error('last_name')
                            <p class="text-red-500 mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col items-start my-4">
                        <label for="first_name" class="my-2">Prénom <span class="text-red-500">*</span></label>
                        <input class="btn-primary" type="text" name="first_name" value="{{ old('first_name') }}">
                        @error('first_name')
                            <p class="text-red-500 mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col items-start my-4">
                        <label for="birth_date" class="my-2">Date de naissance</label>
                        <input class="btn-primary text-gray-400" type="date" name="birth_date">
                        @error('birth_date')
                            <p class="text-red-500 mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="phone" class="my-2">Numéro</label>
                        <input class="btn-primary" type="tel" placeholder="Numéro" name="phone_number">
                        @error('phone_number')
                            <p class="text-red-500 mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </section>
                <div id="next_inscription_1" class="flex justify-end mt-auto">
                    <a id="inscription_1" class=" cursor-pointer btn-blue ">Suivant </a>
                </div>

                <section id="content_inscription_2" class="hidden flex-col justify-center items-center px-16 h-xl">
                    <div class="flex flex-col items-start my-4">
                        <label for="website" class="my-2">Site Internet</label>
                        <input class="btn-primary" type="url" placeholder="Site web" name="website">
                        @error('website')
                            <p class="text-red-500 mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col items-start my-4">
                        <label for="linkedin" class="my-2">LinkedIn</label>
                        <input class="btn-primary" type="text" placeholder="LinkedIn" name="linkedin">
                        @error('linkedin')
                            <p class="text-red-500 mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col items-start my-4">
                        <label for="instagram" class="my-2">Instagram</label>
                        <input class="btn-primary" type="text" placeholder="Instagram" name="instagram">
                        @error('instagram')
                            <p class="text-red-500 mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col items-start my-4">
                        <label for="facebook" class="my-2">Facebook</label>
                        <input class="btn-primary" type="text" placeholder="Facebook" name="facebook">
                        @error('facebook')
                            <p class="text-red-500 mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    
                </section>
                <div id="next_inscription_2" class="hidden justify-between mt-auto">
                    <a id="back_1" class=" cursor-pointer btn-blue ">Retour</a>
                    <a id="inscription_2" class=" cursor-pointer btn-blue ">Suivant </a>
                </div>


                <section id="content_inscription_3" class="hidden flex-col justify-center items-center px-16 h-xl">
                    
                    <div class="flex flex-col items-start">
                        <label for="profile_picture" class="my-4">Photo</label>
                        <input type="file"
                            class="rounded-xl py-10 px-8 border-2 border-slate-600 border-dashed bg-white "
                            name="profile_picture">
                        @error('profile_picture')
                            <p class="text-red-500 mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col items-start">
                        <label for="cv" class="my-4">CV</label>
                        <input type="file"
                            class="rounded-xl py-10 px-8 border-2 border-slate-600 border-dashed bg-white"
                            name="cv">
                        @error('cv')
                            <p class="text-red-500 mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col items-start my-4">
                        <label for="status" class="my-2">Status</label>
                        <select class="btn-primary" type="text" placeholder="Status" name="id_status">
                            <option value="">--Sélectionnez l'option--</option>
                            @php
                                $status = App\Models\Status::all();
                            @endphp
                            @foreach ($status as $statu)
                                <option value="{{ $statu->id }}">{{ $statu->label }}</option>
                            @endforeach
                        </select>
                        @error('id_status')
                            <p class="text-red-500 mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </section>
                <div id="next_inscription_3" class="hidden justify-between mt-auto">
                    <a id="back_2" class="cursor-pointer btn-white ">Retour</a>
                    <button id="inscription_3" type="submit" class=" btn-blue">Valider</button> 
                </div>
            </form>
        </section>
    </section>
@endsection
{{-- <div id ="container_ss" class=" mx-16 mt-4"> <!-- Container Soft skills -->
                        <label for="id_soft_skill_1">Soft Skills</label>
                        <div class="content">
                            <div class="options flex flex-col items-start mt-4">
                                <select class="btn-primary" type="text" name="id_softkill_1">
                                    <option value="">--Sélectionnez l'option--</option>
                                    @php
                                        $softskills = App\Models\Softskill::all()
                                        @endphp
                                        @foreach ($softskills as $softskill)
                                            <option value="{{ $softskill->id}}">{{$softskill->label}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div> 
                        <div class="flex w-tiny justify-center text-white">
                            <input value="Supprimer -" type="button" id="dlt_ss" class="dlt_option cursor-pointer grayscale shadow-md m-2 px-4 py-2 rounded-lg bg-light-blue">
                            <input value="Ajouter +" type="button" id="add_ss" class="add_option cursor-pointer shadow-md m-2 px-4 py-2 rounded-lg bg-light-blue">
                        </div>
                    </div> --}}
{{--                <div id ="container_form" class=" mx-16 mt-4"> <!-- Container Formation -->
                        <label for="id_sector_1" class="my-2">Formation</label>
                        <div class="content">
                            <div class=" options flex flex-col items-start mt-4">
                                <select class="btn-primary" type="text" placeholder="Site" name="id_sector_1">
                                    <option value="">--Sélectionnez l'option--</option>
                                    @php
                                      $sectors = App\Models\Sector::all()
                                    @endphp
                                    @foreach ($sectors as $sector)
                                      <option option value="{{ $sector->id}}">{{$sector->label}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="flex w-tiny justify-center text-white">
                            <input value="Supprimer -" type="button" id="dlt_ss" class="dlt_option cursor-pointer grayscale shadow-md m-2 px-4 py-2 rounded-lg bg-light-blue">
                            <input value="Ajouter +" type="button" id="add_ss" class="add_option cursor-pointer shadow-md m-2 px-4 py-2 rounded-lg bg-light-blue">
                        </div>
                    </div> --}}
{{-- <div id ="container_dip" class="mx-16 mt-4"> <!-- Container Diplomas -->
                        <label for="diploma" class="my-2" >Diplômes</label>
                        <div class="content">
                            <div class="options flex flex-col items-start mt-4">
                                <select class="btn-primary" type="text" placeholder="Diplômes" name="diploma">
                                    <option value="">--Sélectionnez l'option--</option>
                                    @php
                                      $diplomas = App\Models\Diploma::all()
                                    @endphp
                                    @foreach ($diplomas as $diploma)
                                      <option option value="{{ $diploma->id}}">{{$diploma->label}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="flex w-tiny justify-center text-white">
                            <input value="Supprimer -" type="button" id="dlt_ss" class="dlt_option cursor-pointer grayscale shadow-md m-2 px-4 py-2 rounded-lg bg-light-blue">
                            <input value="Ajouter +" type="button" id="add_ss" class="add_option cursor-pointer shadow-md m-2 px-4 py-2 rounded-lg bg-light-blue">
                        </div>
                    </div> --}}
