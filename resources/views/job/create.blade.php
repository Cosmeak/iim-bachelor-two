<form action="{{ route('job.store') }}" method="POST">
    @csrf
    <table>
        <tr>
            <td>
                <label for="">Nom du Job</label>
            </td>
            <td>
                <input type="text" name="label" value="{{ old('label') }}">
                @error('label')
                    <p> {{ $message }} </p>
                @enderror
            </td>
        </tr>

        <tr>
            <td>
                <label for="">Description</label>
            </td>
            <td>
                <input type="text" name="description" value="{{ old('description') }}">
                @error('description')
                    <p> {{ $message }} </p>
                @enderror
            </td>
        </tr>

        <tr>
            <td>
                <label for="">Salaire</label>
            </td>
            <td>
                <input type="text" name="salary" value="{{ old('salary') }}">
                @error('salary')
                    <p> {{ $message }} </p>
                @enderror
            </td>
        </tr>
        <input type="hidden" name="working_mode_id" value="1">
        @error('working_mode_id')
            <p> {{ $message }} </p>
        @enderror

        <input type="hidden" name="contract_type_id" value="1">
        @error('contract_type_id')
            <p> {{ $message }} </p>
        @enderror

        <input type="hidden" name="company_id" value="{{ auth()->user()->company->id }}">
        @error('company_id')
            <p> {{ $message }} </p>
        @enderror

        <input type="hidden" name="sector_id" value="1">
        @error('sector_id')
            <p> {{ $message }} </p>
        @enderror

        <input type="hidden" name="tag_id_1" value="1">
        @error('tag_id_1')
            <p> {{ $message }} </p>
        @enderror

        <input type="hidden" name="tag_id_2" value="2">
        @error('tag_id_2')
            <p> {{ $message }} </p>
        @enderror

        <input type="hidden" name="tag_id_3" value="3">
        @error('tag_id_3')
            <p> {{ $message }} </p>
        @enderror
        <tr>
            <td></td>
            <td> <button type="submit">Valider</button> </td>
        </tr>
    </table>
</form>
