{{-- Edit 1 --}}
<form class="fixed bg-stone-800 bg-opacity-90 w-screen h-screen right-0 top-0 hidden z-20" method="POST"
    action="{{ route('education.update', [$education->id]) }}" id="form_edit_formation_{{ $education->id }}">
    @csrf
    @method('PUT')
    <section class="flex flex-col h-[90%]">
        <i class="fas fa-times fa-2x absolute right-32 top-20 cursor-pointer text-white hover:text-primary transition x_edit_formation"
            name="{{ $education->id }}"></i>
        <article class="content-section flex items-center">
            <div class="profile-card xl:h-auto w-1/2 pb-16 pt-12 flex items-center">
                <p class="title">Formation</p>
                <div class="info my-1">
                    <i class="fas fa-file-signature fa-lg text-primary mx-auto"></i>
                    <input class="btn-primary" type="text" name="label" placeholder="Nom de la formation"
                        value="{{ $education->label }}">
                    @error('label')
                        <p class="text-red-500 mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="info my-1">
                    <i class="far fa-calendar-plus fa-lg text-primary mx-auto"></i>
                    <input class="btn-primary" type="date" name="start_date" value="{{ $education->start_date }}">
                    @error('start_date')
                        <p class="text-red-500 mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="info my-1">
                    <i class="far fa-calendar-minus fa-lg text-primary mx-auto""></i>
                        <input class=" btn-primary" type="date" name="end_date" value="{{ $education->end_date }}">
                        @error('end_date')
                            <p class="text-red-500 mt-2">{{ $message }}</p>
                        @enderror
                </div>
                <div class="info my-1">
                    <i class="far fa-calendar-minus fa-lg text-primary mx-auto"></i>
                    <textarea class="btn-primary" name="description" id="" cols="30"
                        rows="10">{{ $education->description }}</textarea>
                    @error('description')
                        <p class="text-red-500 mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="info my-1">
                    <i class="fas fa-user-graduate fa-lg text-primary mx-auto"></i>
                    <select class="btn-primary" type="text" placeholder="Site" name="diploma_id">
                        <option value="">----</option>
                        @php
                            $diplomas = App\Models\Diploma::all();
                        @endphp
                        @foreach ($diplomas as $diploma)
                            <option value="{{ $diploma->id }}" @if ($diploma->id == $education->diploma->id) selected="selected" @endif>{{ $diploma->label }}
                            </option>
                        @endforeach
                    </select>
                    @error('diploma_id')
                        <p class="text-red-500 mt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="flex justify-center pt-10">
                <button type="submit" class="btn-form">Modifier</button>
            </div>
        </article>
        
    </section>
</form>

{{-- <option value="{{ $sector->id }}" @if (!empty($company->sector)) @if ($sector->id == $company->sector->id) selected="selected" @endif @endif> --}}
{{-- //// --}}

{{-- <article class="content-section flex items-center">
            <div class="profile-card xl:h-auto w-1/2 pb-16 pt-12 flex items-center">
                <p class="title">Formation</p>
                <div class="info my-1">
                    <i class="fas fa-file-signature fa-lg text-primary mx-auto"></i>
                    <input class="btn-primary" type="text" name="label" placeholder="Nom de la formation" required>
                    @error('label')
                        <p class="text-red-500 mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="info my-1">
                    <i class="far fa-calendar-plus fa-lg text-primary mx-auto"></i>
                    <input class="btn-primary" type="date" name="start_date" placeholder="Date de début - jj/mm/aaaa" required>
                    @error('start_date')
                        <p class="text-red-500 mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="info my-1">
                    <i class="far fa-calendar-minus fa-lg text-primary mx-auto""></i>
                    <input class="btn-primary" type="date" name="end_date" placeholder="Date de fin - jj/mm/aaaa" required>
                    @error('end_date')
                        <p class="text-red-500 mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="info my-1">
                    <i class="far fa-calendar-minus fa-lg text-primary mx-auto"></i>
                    <textarea class="btn-primary" name="description" id="" cols="30" rows="10" placeholder="Description de la formation" required></textarea>
                    @error('description')
                        <p class="text-red-500 mt-2">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="info my-1">
                    <i class="fas fa-user-graduate fa-lg text-primary mx-auto"></i>
                    <select class="btn-primary" type="text" placeholder="Site" name="diploma_id">
                        <option value="">--Sélectionnez un diplôme--</option>
                        @php
                            $diplomas = App\Models\Diploma::all();
                        @endphp
                        @foreach ($diplomas as $diploma)
                            <option option value="{{ $diploma->id }}">{{ $diploma->label }}</option>
                        @endforeach
                    </select>
                    @error('diploma_id')
                    <p class="text-red-500 mt-2">{{ $message }}</p>
                @enderror
                </div>
                
            </div>
            </div>
            <div class="flex justify-center pt-10">
                <button type="submit" class="btn-form">Ajouter</button>
            </div>
        </article> --}}
