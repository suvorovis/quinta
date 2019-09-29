@extends('modals.edit')

@section('modal-edit-content')
    <div class="form-group row">
        <label for="id" class="col-sm-4 control-label">{{ __('messages.id') }}</label>
        <div class="col-sm-8">
            <input class="form-control" id="id" name="id" placeholder="{{ __('messages.id') }}" type="text" disabled>
        </div>
    </div>
    <div class="form-group row">
        <label for="institute_id" class="col-sm-4 control-label">{{ __('education.institute') }}</label>
        <div class="col-sm-8">
            <select class="form-control select2" id="institute_id" name="institute_id">
                @foreach($institutes as $institute)
                    <option value="{{ $institute['id'] }}">{{ $institute['name'] }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="speciality_id" class="col-sm-4 control-label">{{ __('education.speciality') }}</label>
        <div class="col-sm-8">
            <select class="form-control select2" id="speciality_id" name="speciality_id">
                @foreach($specialities as $speciality)
                    <option value="{{ $speciality['id'] }}">{{ $speciality['name'] }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="end_date" class="col-sm-4 control-label">{{ __('education.end_date') }}</label>
        <div class="col-sm-8">
            <input class="form-control" id="end_date" name="end_date" placeholder="{{ __('education.end_date') }}" type="text">
        </div>
    </div>
@endsection
