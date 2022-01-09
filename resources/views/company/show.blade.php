@extends('layout')
@include('partials/header')
@section('content')
    <main class="profile-show">
        <section class="moving-gradient w-10/12 xl:w-6/12 rounded-b-[10px] flex justify-center mx-auto h-[180px] relative">
            <span class="my-60"></span>
            <div
                class="w-[90px] xl:w-[120px] h-[90px] xl:h-[120px] flex rounded-full bg-white shadow-md absolute justify-center bottom-[-23%] xl:bottom-[-30%] ">
                <img class="object-contain" width="90" height="90" src="@if ($company->logo){{ $company->logo }}@else ../img/logo.png @endif" alt="">
            </div>
        </section>

        <article class="content-section">
            <div class="split-section">
                <h1 class="text-2xl">{{ $company->name }}</h1>
                <button class="btn-edit z-0" id="form_edit_company"><i
                        class="fas fa-pencil-alt fa-lg text-white"></i></button>
            </div>

            <div class="subcontent-section">
                <div class="profile-card">
                    <p class="title">Information</p>
                    <div class="flex flex-col">
                        <div class="info">
                            <i class="fas fa-wrench fa-lg text-primary"></i>
                            <p class="info-p">@if ($company->sector) {{ $company->sector->label }}@else Non renseigné @endif</p>
                        </div>
                        <div class="info text-left ">
                            <i class="fas fa-map-marker-alt fa-lg text-primary"></i>
                            <p class="info-p">@if ($company->location) {{ $company->location->country->label }}, {{ $company->location->city->label }}@else Non renseigné @endif</p>
                        </div>
                    </div>
                </div>
                <div class="profile-card">
                    <p class="title">Coordonnées</p>
                    <div class="flex flex-col">
                        <div class="info ">
                            <i class="fas fa-phone-square-alt fa-lg text-primary"></i>
                            <p class="info-p">@if ($company->phone_number){{ $company->phone_number }} @else Non renseigné @endif</p>
                        </div>
                        <div class="info">
                            <i class="fas fa-envelope fa-lg text-primary"></i>
                            @if ($company->email)
                                <a href="mailto: {{ $company->email }}"
                                    class="link link-underline cursor-pointer info-p">{{ $company->email }}</a>
                            @else
                                <p class="info-p">Non renseigné</p>
                            @endif
                        </div>
                        <div class="info ">
                            <i class="fab fa-internet-explorer fa-lg text-primary"></i>
                            <p class="info-p">@if ($company->website){{ $company->website }} @else Non renseigné @endif</p>
                        </div>
                        <div class="info">
                            <i class="fab fa-linkedin fa-lg text-primary"></i>
                            <p class="info-p">@if ($company->linkedin){{ $company->linkedin }} @else Non renseigné @endif</p>
                        </div>
                        <div class="info">
                            <i class="fab fa-instagram fa-lg text-primary"></i>
                            <p class="info-p">@if ($company->instagram) {{ $company->instagram }} @else Non renseigné @endif</p>
                        </div>
                        <div class="info">
                            <i class="fab fa-facebook-square fa-lg text-primary"></i>
                            <p class="info-p">@if ($company->facebook) {{ $company->facebook }} @else Non renseigné @endif</p>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        {{-- Edit 1 --}}
        <form class="fixed bg-stone-800 bg-opacity-90 w-screen h-screen hidden z-20" method="POST" action="{{ route('company.update', [ auth()->user()->id ])}}" id="form_edit">
            @csrf
            @method('PUT')
            <section class="flex flex-col justify-center items-center h-[80%]">
                <i
                    class="fas fa-times fa-2x absolute right-32 top-20 cursor-pointer text-white hover:text-primary transition" id="x_edit"></i>
                <article class="content-section">
                    <div class="split-section">
                        <input class=" text-2xl btn-primary" value="{{ $company->name }}" name="name">
                    </div>

                    <div class="subcontent-section">
                        <div class="profile-card xl:h-[350px] ">
                            <p class="title">Information</p>
                            <div class="flex flex-col items-end">
                                <div class="info my-1">
                                    <i class="fas fa-wrench fa-lg text-primary mx-auto"></i>
                                    <select class="btn-primary" type="text" name="sector_id">
                                        <option value="">----</option>
                                        @php
                                            $Sector = App\Models\Sector::all();
                                        @endphp
                                        @foreach ($Sector as $sector)
                                            <option value="{{ $sector->id }}" @if ($sector->id == $company->sector->id) selected="selected" @endif>
                                                {{ $sector->label }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="info text-left my-1 ">
                                    <i class="fas fa-map-marker-alt fa-lg text-primary mx-auto"></i>
                                    <input class="btn-primary" value="@if ($company->location) {{ $company->location->country->label }}, {{ $company->location->city->label }}@else Non renseigné @endif">
                                </div>
                            </div>
                        </div>
                        <div class="profile-card xl:h-[350px] ">
                            <p class="title">Coordonnées</p>
                            <div class="flex flex-col">
                                <div class="info my-1">
                                    <i class="fas fa-phone-square-alt fa-lg text-primary mx-auto"></i>
                                    <input class="btn-primary" value="@if ($company->phone_number){{ $company->phone_number }} @else Non renseigné @endif">
                                </div>
                                <div class="info my-1">
                                    <i class="fas fa-envelope fa-lg text-primary mx-auto"></i>
                                    
                                        <input class="btn-primary" value="@if($company->email){{ $company->email }} @else Non renseigné @endif" name="email">
                                </div>
                                <div class="info my-1">
                                    <i class="fab fa-internet-explorer fa-lg text-primary mx-auto"></i>
                                    <input class="btn-primary" value="@if ($company->website){{ $company->website }} @else Non renseigné @endif">
                                </div>
                                <div class="info my-1">
                                    <i class="fab fa-linkedin fa-lg text-primary mx-auto"></i>
                                    <input class="btn-primary" value="@if ($company->linkedin){{ $company->linkedin }} @else Non renseigné @endif">
                                </div>
                                <div class="info my-1">
                                    <i class="fab fa-instagram fa-lg text-primary mx-auto"></i>
                                    <input class="btn-primary" value="@if ($company->instagram) {{ $company->instagram }} @else Non renseigné @endif">
                                </div>
                                <div class="info my-1">
                                    <i class="fab fa-facebook-square fa-lg text-primary mx-auto"></i>
                                    <input class="btn-primary" value="@if ($company->facebook) {{ $company->facebook }} @else Non renseigné @endif">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center pt-10">
                        <button type="submit" class="btn-form">Modifier</button>
                    </div>
                </article>
            </section>
        </form>
        {{-- //// --}}


        @if ($company->job->count() > 0)
            <article class="content-section">
                <div class="split-section">
                    <button class="btn-plus" id="create_job"><i class="fas fa-plus fa-lg text-white"></i></button>
                    <p class="text-2xl">Missions proposées</p>
                    <button class="btn-edit" id="form_edit_formation"><i
                            class="fas fa-pencil-alt fa-lg text-white"></i></button>
                </div>
                <div class="subcontent-section-grid">
                    @foreach ($company->job as $job)
                        <div class="profile-card">
                            <p class="title">{{ $job->label }}</p>
                            <p class="info-p">{{ $job->description }}</p>
                            <p class="info-p">{{ $job->sector->label }}</p>
                            <p class="info-p">{{ $job->workingMode->label }}</p>
                            <p class="info-p">{{ $job->contractType->label }}</p>
                            <p class="info-p">{{ $job->salary }}</p>
                            @if ($company->location) <p class="info-p">{{ $company->location->city->label }}, {{ $company->location->country->label }}</p>@endif
                        </div>
                    @endforeach
                </div>
            </article>
        @endif
    </main>
    @include('partials/footer')
@endsection
