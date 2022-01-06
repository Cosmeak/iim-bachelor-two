@extends('layout')

@section('content')
    <section class=" mt-28 text-xl flex items-center flex-col">
        <div class=" w-sm h-sm rounded-full mb-6 bg-gray-50">
            <img src="../img/logo.png" alt="logo">
        </div>
        <h1 class=" text-center text-3xl ">Inscrivez-vous</h1>
        <form class="flex flex-col xl:w-5xl xl:px-64 justify-center items-center" method="POST" action="{{route('candidate.store')}}">
          @csrf
          <input type="hidden" name="id_user" value="{{ auth()->user()->id }}">
            <div id="content_inscription_1" class="flex xl:flex-row flex-col justify-center items-center xl:h-xl">
                <div class="flex flex-wrap justify-center xl:justify-start" >
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="last_name"class="my-2" >Nom</label>
                        <input class="btn-primary" type="text" placeholder="Nom" name="last_name" value="{{ old('last_name')}}">
                        @error('last_name')
                            <p class="text-red-500 mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="first_name" class="my-2" >Prénom</label>
                        <input class="btn-primary" type="text" placeholder="Prénom" name="first_name" value="{{ old('first_name')}}">
                        @error('first_name')
                            <p class="text-red-500 mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="birth_date" class="my-2">Date de naissance</label>
                        <input class="btn-primary text-gray-400" type="date" placeholder="Date de Naissance" name="birth_date">
                        @error('birth_date')
                            <p class="text-red-500 mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="city" class="my-2">Ville</label>
                        <input class="btn-primary" type="text" placeholder="Ville" name="address">
                        @error('address')
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
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="status" class="my-2">Status</label>
                        <select class="btn-primary" type="text" placeholder="Status" name="id_status"> 
                            <option value="">--Sélectionnez l'option--</option>
                            @php 
                                $status = App\Models\Statu::all()
                                @endphp
                                @foreach ($status as $statu)
                                    <option value="{{ $statu->id}}">{{$statu->label}}</option>
                                @endforeach
                        </select>
                        @error('status')
                            <p class="text-red-500 mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    <div class="flex flex-col items-start">
                        <label for="profile_picture" class="my-4">Photo</label>
                        <input type="file" class=" max-w-sm xl:max-w-2xl rounded-xl py-24 px-8 border-2 border-slate-600 border-dashed bg-white " name="profile_picture">
                        @error('profile_picture')
                            <p class="text-red-500 mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>


            <div id="content_inscription_2" class="xl:flex-row flex-col justify-center items-center hidden bg">
                <div class="flex flex-wrap justify-center xl:justify-start" >
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="website"class="my-2" >Site Internet</label>
                        <input class="btn-primary" type="url" placeholder="Site web" name="website">
                        @error('website')
                            <p class="text-red-500 mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col items-start mx-16 my-4">
                        <label for="linkedIn" class="my-2" >LinkedIn</label>
                        <input class="btn-primary" type="text" placeholder="LinkedIn" name="linkedIn">
                        @error('linkedin')
                            <p class="text-red-500 mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div id ="container_ss" class=" mx-16 mt-4"> <!-- Container Soft skills -->
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
                    </div>
                    <div id ="container_form" class=" mx-16 mt-4"> <!-- Container Formation -->
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
                    </div>
                    {{-- <div id ="container_dip" class="mx-16 mt-4"> <!-- Container Expériences -->
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
                </div>
                <div>
                    <div class="flex flex-col items-start">
                        <label for="cv" class="my-4">CV</label>
                        <input type="file" class=" max-w-sm xl:max-w-2xl rounded-xl py-24 px-8 border-2 border-slate-600 border-dashed bg-white " name="cv">
                        @error('cv')
                            <p class="text-red-500 mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <a id="next_inscription" class=" w-sm my-12 py-4 bg-light-blue text-white rounded-2xl shadow-md hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75 cursor-pointer text-center">Suivant </a>
            <div id="submit_inscription" class=" hidden flex-col">
                <button type="submit" class=" w-sm mt-12 mb-1 py-4 bg-light-blue text-white rounded-2xl shadow-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75 cursor-pointer text-center">S'incrire</button>
                <a id="back_inscription" class=" w-sm cursor-pointer text-gray-500 text-center mb-4 hover:text-black">Retour </a>
            </div>
            <p>Déjà un compte Easy Apply ? <a href="{{route('login.index')}}" class=" text-light-blue font-bold">Connexion</a></p>
                
        </form>
    </section>
</body>

@endsection