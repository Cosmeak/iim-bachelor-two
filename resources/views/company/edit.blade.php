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
                                    <option value="{{ $sector->id }}" @if (!empty($company->sector)) @if($sector->id == ($company->sector->id)) selected="selected" @endif @endif>
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
