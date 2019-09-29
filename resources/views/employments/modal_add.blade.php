@extends('modals.create')

@section('modal-add-content')
    <div class="form-group row">
        <label for="organization" class="col-sm-4 control-label">{{ __('employments.organization') }}</label>
        <div class="col-sm-8">
            <input class="form-control" id="organization" name="organization" placeholder="{{ __('employments.organization') }}" type="text">
        </div>
    </div>
    <div class="form-group row">
        <label for="profession_id" class="col-sm-4 control-label">{{ __('employments.profession') }}</label>
        <div class="col-sm-8">
            <input class="form-control" id="profession_id" name="profession_id" placeholder="{{ __('employments.profession') }}" type="text">
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
