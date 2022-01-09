@extends('layout')
@include('partials/header')
@section('content')
    <main class="profile-show">
        <section class="moving-gradient w-10/12 xl:w-6/12 rounded-b-[10px] flex justify-center mx-auto h-[180px] relative">
            <span class="my-60"></span>
            <div
                class="w-[90px] xl:w-[120px] h-[90px] xl:h-[120px] flex rounded-full bg-white shadow-md absolute justify-center bottom-[-23%] xl:bottom-[-30%] ">
                <img class="object-contain" width="90" height="90" src="@if ($candidate->profile_picture){{ $candidate->profile_picture }}@else ../img/logo.png @endif" alt="">
            </div>
        </section>

        <article class="content-section">
            <div class="split-section">
                <button class="btn-plus" id="create_job"><i class="fas fa-plus fa-lg text-white"></i></button>
                <p class="text-2xl">Informations</p>
                <button class="btn-edit" id="form_edit_candidate"><i
                        class="fas fa-pencil-alt fa-lg text-white"></i></button>
            </div>

            <div class="subcontent-section">
                <div class="profile-card">
                    <p class="title">Profil</p>
                    <div class="flex flex-col">
                        <div class="info">
                            <i class="fas fa-id-card fa-lg text-primary"></i>
                            <h2 class="info-p">{{ $candidate->first_name }} <span
                                    class="uppercase">{{ $candidate->last_name }}</span></h2>
                        </div>
                        <div class="info">
                            <i class="fas fa-user-graduate fa-lg text-primary"></i>
                            <p class="info-p">@if ($candidate->status) {{ $candidate->status->label }}@else Non renseigné @endif</p>
                        </div>
                        <div class="info text-left ">
                            <i class="fas fa-map-marker-alt fa-lg text-primary"></i>
                            <p class="info-p">@if ($candidate->location) {{ $candidate->location->country->label }}, {{ $candidate->location->city->label }}@else Non renseigné @endif</p>
                        </div>
                    </div>
                </div>
                <div class="profile-card">
                    <p class="title">Coordonnées</p>
                    <div class="flex flex-col">
                        <div class="info ">
                            <i class="fas fa-phone-square-alt fa-lg text-primary"></i>
                            <p class="info-p">@if ($candidate->phone_number){{ $candidate->phone_number }} @else Non renseigné @endif</p>
                        </div>
                        <div class="info">
                            <i class="fas fa-envelope fa-lg text-primary"></i>
                            <a href="mailto: {{ $candidate->user->email }}"
                                class="link link-underline cursor-pointer info-p">{{ $candidate->user->email }}</a>
                        </div>
                        <div class="info ">
                            <i class="fab fa-internet-explorer fa-lg text-primary"></i>
                            <p class="info-p">@if ($candidate->website){{ $candidate->website }} @else Non renseigné @endif</p>
                        </div>
                        <div class="info">
                            <i class="fab fa-linkedin fa-lg text-primary"></i>
                            <p class="info-p">@if ($candidate->linkedin){{ $candidate->linkedin }} @else Non renseigné @endif</p>
                        </div>
                        <div class="info">
                            <i class="fab fa-instagram fa-lg text-primary"></i>
                            <p class="info-p">@if ($candidate->instagram) {{ $candidate->instagram }} @else Non renseigné @endif</p>
                        </div>
                        <div class="info">
                            <i class="fab fa-facebook-square fa-lg text-primary"></i>
                            <p class="info-p">@if ($candidate->facebook) {{ $candidate->facebook }} @else Non renseigné @endif</p>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <article class="content-section">
            <div class="split-section">
                <button class="btn-plus" id="btn_create_formation"><i class="fas fa-plus fa-lg text-white"></i></button>
                <p class="text-2xl">Formation</p>
                <button class="btn-edit" id=""><i
                        class="fas fa-pencil-alt fa-lg text-white"></i></button>
            </div>
            @if ($candidate->education->count() > 0)

                <div class="subcontent-section-grid">
                    @foreach ($candidate->education as $education)
                        <div class="profile-card">
                            <p class="title">{{ $education->label }}</p>
                            <p class="info-p">Du {{ $education->start_date }} au {{ $education->end_date }}
                            </p>
                            <p class="info-p">{{ $education->degree->label }},{{ $education->diploma->label }}
                            </p>
                        </div>
                    @endforeach
                </div>
            @endif
        </article>

        @if ($candidate->experience->count() > 0)
            <article class="content-section">
                <button class="btn-plus" id="create_job"><i class="fas fa-plus fa-lg text-white"></i></button>
                <div class="split-section">
                    <p class="text-2xl">Experience</p>
                    <button class="btn-edit" id="form_edit_experience"><i
                            class="fas fa-pencil-alt fa-lg text-white"></i></button>
                </div>
                <div class="subcontent-section-grid">
                    @foreach ($candidate->experience as $experience)
                        <div class="profile-card">
                            <p class="title">{{ $experience->company_name }}</p>
                            <p class="info-p">Du {{ $experience->start_date }} au {{ $experience->end_date }}
                            </p>
                            <p class="info-p">{{ $experience->job_name }}</p>
                            <p class="info-p">{{ $experience->sector->label }}</p>
                            <p class="info-p">{{ $experience->description }}</p>
                        </div>
                    @endforeach
                </div>
            </article>
        @endif
        @include('candidate/edit')
        @include('candidate/store-formation')
    </main>
    @include('partials/footer')
@endsection
