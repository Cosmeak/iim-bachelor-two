{{-- Edit 1 --}}
<form class="fixed bg-stone-800 bg-opacity-90 w-screen h-screen right-0 top-0 hidden z-20" method="POST"
    action="{{ route('experience.update', [$experience->id]) }}" id="form_edit_experience_{{ $experience->id }}">
    @csrf
    @method('PUT')
    <section class="flex flex-col h-[90%]">
        <i class="fas fa-times fa-2x absolute right-32 top-20 cursor-pointer text-white hover:text-primary transition x_edit_experience"
            name="{{ $experience->id }}"></i>
        <article class="content-section flex items-center">
            <div class="profile-card xl:h-auto w-1/2 pb-16 pt-12 flex items-center">
                <p class="title">Experience</p>
                <div class="info my-1">
                    <i class="fas fa-file-signature fa-lg text-primary mx-auto"></i>
                    <input class="btn-primary" type="text" name="job_name" placeholder="Nom du travail"
                        value="{{ $experience->job_name }}">
                    
                </div>
                @error('job_name')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                <div class="info my-1">
                    <i class="fas fa-building fa-lg text-primary mx-auto"></i>
                    <input class="btn-primary" type="text" name="company_name" placeholder="Nom de l'entreprise"
                        value="{{ $experience->company_name }}">
                    
                </div>
                @error('company_name')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                <div class="info my-1">
                    <i class="far fa-calendar-plus fa-lg text-primary mx-auto"></i>
                    <input class="btn-primary" type="date" name="start_date" value="{{ $experience->start_date }}">
                    
                </div>
                @error('start_date')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                <div class="info my-1">
                    <i class="far fa-calendar-minus fa-lg text-primary mx-auto""></i>
                        <input class=" btn-primary" type="date" name="end_date" value="{{ $experience->end_date }}">
                        
                </div>
                @error('end_date')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                <div class="info my-1">
                    <i class="far fa-calendar-minus fa-lg text-primary mx-auto"></i>
                    <textarea class="btn-primary resize-none" name="description" id="" cols="30"
                        rows="10">{{ $experience->description }}</textarea>
                    
                </div>
                @error('description')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                <div class="info my-1">
                    <i class="fas fa-user-graduate fa-lg text-primary mx-auto"></i>
                    <select class="btn-primary" name="sector_id">
                        <option value="">----</option>
                        @php
                            $sectors = App\Models\Sector::all();
                        @endphp
                        @foreach ($sectors as $sector)
                            <option value="{{ $sector->id }}" @if ($sector->id == $experience->sector->id) selected="selected" @endif>{{ $sector->label }}
                            </option>
                        @endforeach
                    </select>
                    
                </div>
                @error('sector_id')
                <p class="text-red-500 mt-2">{{ $message }}</p>
            @enderror
            </div>
            <div class="flex justify-center pt-10">
                <button type="submit" class="btn-form">Modifier</button>
            </div>
        </article>
        
    </section>
</form>

