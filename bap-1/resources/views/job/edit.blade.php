{{-- Edit 1 --}}
<form class="fixed bg-stone-800 bg-opacity-90 w-screen h-screen right-0 top-0 hidden z-20" method="POST"
    action="{{ route('job.update', [$job->id]) }}" id="form_edit_job">
    @csrf
    @method('PUT')
    <section class="flex flex-col h-[90%]">
        
        <i class="fas fa-times fa-2x absolute right-32 top-20 cursor-pointer text-white hover:text-primary transition"
            id="x_job"></i>
        <article class="content-section flex items-center ">
            
            <section class="flex flex-wrap justify-evenly py-12 shadow-md rounded bg-white px-8">
                <div class="flex flex-col justify-center px-10 ">
                    <div class="info my-2">
                        <i class="fas fa-file-signature fa-lg text-primary mx-auto"></i>
                        <input type="text" class=" my-2 btn-primary" name="label" placeholder="Nom"
                            value="{{ $job->label }}">
                    </div>
                    <div class="info my-2">
                        <i class="far fa-calendar-minus fa-lg text-primary mx-auto"></i>
                        <textarea name="description" cols="30" rows="15"
                            class=" my-2 btn-primary resize-none">{{ $job->description }}</textarea>
                    </div>
                    <div class="info my-2">
                        <i class="fas fa-euro-sign fa-lg text-primary mx-auto"></i>
                        <input type="number" class=" my-2 btn-primary" placeholder="Salaire" name="salary" value=" @if (!empty($job->salary)){{ $job->salary }}  @endif">
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="info my-2">
                        <i class="fas fa-laptop-house fa-lg text-primary mx-auto"></i>
                        <div class="flex flex-col items-start mt-4">
                            <select class="btn-primary" type="text" name="working_mode_id">
                                <option value="">--Sélectionnez l'option--</option>
                                @php
                                    $working_modes = App\Models\WorkingMode::all();
                                @endphp
                                @foreach ($working_modes as $working_mode)
                                <option value="{{ $working_mode->id }}" @if (!empty($job->workingMode)) @if($working_mode->id == ($job->workingMode->id)) selected="selected" @endif @endif>{{$working_mode->label}}
                            
                                @endforeach
                            </select>
                            @error('working_mode_id')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                            @error('company_id')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="info">
                        <i class="fas fa-file-contract fa-lg text-primary mx-auto"></i>
                        <div class=" options flex flex-col items-start mt-4">
                            <select class="btn-primary" type="text" name="contract_type_id">
                                <option value="">--Sélectionnez l'option--</option>
                                @php
                                    $contracts = App\Models\ContractType::all();
                                @endphp
                                @foreach ($contracts as $contract)
                                <option value="{{ $contract->id }}" @if (!empty($job->contractType)) @if($contract->id == ($job->contractType->id)) selected="selected" @endif @endif>{{$contract->label}}
                                @endforeach
                            </select>
                            @error('contract_type_id')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="info ">
                        <i class="fas fa-wrench fa-lg text-primary mx-auto"></i>
                        <div class=" options flex flex-col items-start mt-4">
                            <select class="btn-primary" type="text" name="sector_id">
                                <option value="">--Sélectionnez l'option--</option>
                                @php
                                    $Sector = App\Models\Sector::all();
                                @endphp
                                @foreach ($Sector as $sector)
                                <option value="{{ $sector->id }}" @if (!empty($job->sector)) @if($sector->id == ($job->sector->id)) selected="selected" @endif @endif>{{$sector->label}}
                                @endforeach
                            </select>
                            @error('sector_id')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="info">
                        <i class="fas fa-tags fa-lg text-primary mx-auto"></i>
                        <input type="text" class=" my-2 btn-primary" name="tag_id" plaeholder="Tag" value="@if (!empty($job->address)){{ $job->address }} @else Non renseigné @endif">
                    </div>
                    <div class="info">
                        <i class="fas fa-map-marker-alt fa-lg text-primary mx-auto"></i>
                        <div class="flex flex-col my-2">
                            <div class=" options flex flex-col items-start mt-4">
                                <select class="btn-primary" type="text" name="city">
                                    <option value="">----</option>
                                    @php
                                        $cities = App\Models\City::all();
                                    @endphp
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->id }}" @if (!empty($job->city))@if ($city->id == $job->city->id) selected="selected" @endif @endif>
                                            {{ $city->label }}
                                    @endforeach
                                </select>
                                @error('city')
                                    <p class="text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class=" options flex flex-col items-start mt-4">
                                <select class="btn-primary" type="text" name="country">
                                    <option value="">----</option>
                                    @php
                                        $countries = App\Models\Country::all();
                                    @endphp
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}" @if (!empty($job->country))@if ($country->id == $job->country->id) selected="selected" @endif @endif>
                                            {{ $country->label }}
                                    @endforeach
                                </select>
                                @error('country')
                                    <p class="text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <input type="text" class=" my-1 btn-primary" placeholder="Adresse" name="address" value="@if (!empty($job->address)){{ $job->address }} @else Non renseigné @endif">
                            <input type="text" class=" my-1 btn-primary" placeholder="Code postal" name="zipcode" value="@if (!empty($job->zipcode)){{ $job->zipcode }} @else Non renseigné @endif">
                        </div>
                    </div>
                </div>
            </section>
            
            <div class="flex justify-center pt-10">
                <button type="submit" class="btn-form">Modifier</button>
            </div>
        </article>
        
       
    </section>
</form>
