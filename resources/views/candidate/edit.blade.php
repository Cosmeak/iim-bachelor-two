{{-- Edit 1 --}}
<form class="fixed bg-stone-800 bg-opacity-90 w-screen h-screen hidden z-20" method="POST"
    action="{{ route('candidate.update', [auth()->user()->id]) }}" id="form_edit">
    @csrf
    @method('PUT')
    <section class="flex flex-col justify-center items-center h-[80%]">
        <i class="fas fa-times fa-2x absolute right-32 top-20 cursor-pointer text-white hover:text-primary transition"
            id="x_edit"></i>
        <article class="content-section">

            <div class="subcontent-section">
                <div class="profile-card xl:h-[350px] ">
                    <p class="title">Profil</p>
                    <div class="flex flex-col">
                        <div class="info my-1">
                            <i class="fas fa-id-card fa-lg text-primary mx-auto"></i>
                            <input class="btn-primary" value="@if ($candidate->first_name){{ $candidate->first_name }} @else Non renseigné @endif" name="first_name">
                        </div>
                        <div class="info my-1">
                            <i class="fas fa-user-graduate fa-lg text-primary mx-auto"></i>
                            <input class="btn-primary" value="@if ($candidate->last_name){{ $candidate->last_name }} @else Non renseigné @endif" name="last_name">
                        </div>
                        <div class="info my-1">
                            <i class="fas fa-map-marker-alt fa-lg text-primary mx-auto"></i>
                            <input class="btn-primary" value="@if ($candidate->location){{ $candidate->location->country->label}} @else Non renseigné  @endif" name="country_id" placeholder="Pays">
                        </div>
                        <div class="info my-1">
                            <i class="fas fa-map-marker-alt fa-lg text-primary mx-auto"></i>
                            <input class="btn-primary" value="@if ($candidate->location){{ $candidate->location->city->label}} @else Non renseigné @endif" name="city_id" placeholder="Ville">
                        </div>
                    </div>

                </div>
                <div class="profile-card xl:h-[350px] ">
                    <p class="title">Coordonnées</p>
                    <div class="flex flex-col">
                        <div class="info my-1">
                            <i class="fas fa-phone-square-alt fa-lg text-primary mx-auto"></i>
                            <input class="btn-primary" value="@if ($candidate->phone_number){{ $candidate->phone_number }} @else Non renseigné @endif" name="phone_number">
                        </div>
                        <div class="info my-1">
                            <i class="fas fa-envelope fa-lg text-primary mx-auto"></i>

                            <input class="btn-primary" value="@if ($candidate->user->email){{ $candidate->user->email }} @else Non renseigné @endif" name="email">
                        </div>
                        <div class="info my-1">
                            <i class="fab fa-internet-explorer fa-lg text-primary mx-auto"></i>
                            <input class="btn-primary" value="@if ($candidate->website){{ $candidate->website }} @else Non renseigné @endif" name="website">
                        </div>
                        <div class="info my-1">
                            <i class="fab fa-linkedin fa-lg text-primary mx-auto"></i>
                            <input class="btn-primary" value="@if ($candidate->linkedin){{ $candidate->linkedin }} @else Non renseigné @endif" name="linkedin">
                        </div>
                        <div class="info my-1">
                            <i class="fab fa-instagram fa-lg text-primary mx-auto"></i>
                            <input class="btn-primary" value="@if ($candidate->instagram) {{ $candidate->instagram }} @else Non renseigné @endif" name="instagram">
                        </div>
                        <div class="info my-1">
                            <i class="fab fa-facebook-square fa-lg text-primary mx-auto"></i>
                            <input class="btn-primary" value="@if ($candidate->facebook) {{ $candidate->facebook }} @else Non renseigné @endif" name="facebook">
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
