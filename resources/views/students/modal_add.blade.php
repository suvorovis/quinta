@extends('modals.edit')

@section('modal-add-content')
    <div class="form-group row">
        <label for="first_name" class="col-sm-4 control-label">{{ __('students.first_name') }}</label>
        <div class="col-sm-8">
            <input class="form-control" id="first_name" name="first_name" placeholder="{{ __('students.first_name') }}" type="text">
        </div>
    </div>
    <div class="form-group row">
        <label for="last_name" class="col-sm-4 control-label">{{ __('students.last_name') }}</label>
        <div class="col-sm-8">
            <input class="form-control" id="last_name" name="last_name" placeholder="{{ __('students.last_name') }}" type="text">
        </div>
    </div>
    <div class="form-group row">
        <label for="patronymic" class="col-sm-4 control-label">{{ __('students.patronymic') }}</label>
        <div class="col-sm-8">
            <input class="form-control" id="patronymic" name="patronymic" placeholder="{{ __('students.patronymic') }}" type="text">
        </div>
    </div>
    <div class="form-group row">
        <label for="birthday" class="col-sm-4 control-label">{{ __('students.birthday') }}</label>
        <div class="col-sm-8">
            <input class="form-control" id="birthday" name="birthday" placeholder="{{ __('students.birthday') }}" type="text">
        </div>
    </div>
@endsection
