@extends('modals.edit')

@section('modal-edit-content')
    <div class="form-group row">
        <label for="id" class="col-sm-4 control-label">{{ __('messages.id') }}</label>
        <div class="col-sm-8">
            <input class="form-control" id="id" name="id" placeholder="{{ __('messages.id') }}" type="text" disabled>
        </div>
    </div>
    <div class="form-group row">
        <label for="organization" class="col-sm-4 control-label">{{ __('employments.organization') }}</label>
        <div class="col-sm-8">
            <input class="form-control" id="organization" name="organization" placeholder="{{ __('employments.organization') }}" type="text">
        </div>
    </div>
    <div class="form-group row">
        <label for="profession_id" class="col-sm-4 control-label">{{ __('employments.profession') }}</label>
        <div class="col-sm-8">
            <select class="form-control select2" id="profession_id" name="profession_id">
                @foreach($professions as $profession)
                    <option value="{{ $profession['id'] }}">{{ $profession['name'] }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="from" class="col-sm-4 control-label">{{ __('employments.from') }}</label>
        <div class="col-sm-8">
            <input class="form-control" id="from" name="from" placeholder="{{ __('employments.from') }}" type="text">
        </div>
    </div>
    <div class="form-group row">
        <label for="to" class="col-sm-4 control-label">{{ __('employments.to') }}</label>
        <div class="col-sm-8">
            <input class="form-control" id="to" name="to" placeholder="{{ __('employments.to') }}" type="text">
        </div>
    </div>
@endsection
