{{-- Edit 1 --}}
<form class="fixed bg-stone-800 bg-opacity-90 w-screen h-screen hidden z-30 -mt-[80px]" method="POST"
    action="{{ route('education.store') }}" id="form_store_formation">
    @csrf
    <section class="flex flex-col justify-center items-center mt-[80px] h-[80%]">
        <i class="fas fa-times fa-2x absolute right-[2rem] xl:right-32 top-[2rem] xl:top-20 cursor-pointer text-white hover:text-primary transition"
            id="x_store"></i>
        <article class="content-section flex items-center">
            <div class="formation-card xl:h-auto w-full xl:w-1/2 pb-16 pt-12 flex items-center">
                <p class="title">Formation</p>
                <div class="info my-1 object-contain">
                    <i class="fas fa-file-signature fa-lg text-primary mx-auto"></i>
                    <input class="btn-primary" type="text" name="label" placeholder="Nom de la formation" required>

                </div>
                @error('label')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                <div class="info my-1">
                    <i class="far fa-calendar-plus fa-lg text-primary mx-auto"></i>
                    <input class="btn-primary" type="date" name="start_date" placeholder="Date de début - jj/mm/aaaa" required>

                </div>
                @error('start_date')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                <div class="info my-1">
                    <i class="far fa-calendar-minus fa-lg text-primary mx-auto"></i>
                    <input class="btn-primary" type="date" name="end_date" placeholder="Date de fin - jj/mm/aaaa" required>

                </div>
                @error('end_date')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                <div class="info my-1">
                    <i class="fas fa-pencil-alt fa-lg text-primary mx-auto"></i>
                    <textarea class="btn-primary resize-none" name="description" id="" cols="30" rows="10" placeholder="Description de la formation (120 caractères max)" maxlength="120" required></textarea>

                </div>
                @error('description')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror

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

                </div>
                @error('diploma_id')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

            </div>
            </div>
            <div class="flex justify-center pt-2 xl:pt-10">
                <button type="submit" class="btn-form">Ajouter</button>
            </div>
        </article>
    </section>
</form>
{{-- //// --}}
