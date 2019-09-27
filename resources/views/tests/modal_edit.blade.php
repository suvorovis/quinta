@extends('modals.edit')

@section('modal-edit-content')
    <div class="form-group row">
        <label for="id" class="col-sm-4 control-label">{{ __('tests.id') }}</label>
        <div class="col-sm-8">
            <input class="form-control" id="id" name="id" placeholder="{{ __('tests.id') }}" type="text" disabled>
        </div>
    </div>
    <div class="form-group row">
        <label for="Name" class="col-sm-4 control-label">{{ __('tests.name') }}</label>
        <div class="col-sm-8">
            <input class="form-control" id="name" name="name" placeholder="{{ __('tests.name') }}" type="text" disabled>
        </div>
    </div>
    <div class="form-group row">
        <label for="created_at" class="col-sm-4 control-label">{{ __('tests.created_at') }}</label>
        <div class="col-sm-8">
            <input class="form-control" id="created_at" name="created_at" placeholder="{{ __('tests.created_at') }}" type="text" disabled>
        </div>
    </div>
@endsection
