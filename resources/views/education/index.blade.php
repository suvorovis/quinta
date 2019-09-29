@extends('layouts.app')

@section('title')
    {{ __('messages.Education') }}
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <button class="btn btn-block btn-success col-md-2" type="button" onclick="create('{{ route('education.store') }}');">
                {{ __('messages.Add') }}
            </button>
        </div>
        <div class="card-body">

            <table id="data-table" class="table table-striped">
                <thead>
                <tr>
                    <th>{{ __('messages.id') }}</th>
                    <th>{{ __('education.institute') }}</th>
                    <th>{{ __('education.speciality') }}</th>
                    <th>{{ __('education.end_date') }}</th>
                    <th>{{ __('messages.Actions') }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($rows as $row)
                    <tr>
                        <td>{{ $row['id'] }}</td>
                        <td>{{ $row['institute'] }}</td>
                        <td>{{ $row['speciality'] }}</td>
                        <td>{{ $row['end_date'] }}</td>
                        <td class="row">
                            <button class="btn btn-block btn-primary" type="button" onclick="edit({{ $row['id'] }}, '{{ route('education.edit', config('params.id')) }}');">
                                {{ __('messages.Edit') }}
                            </button>
                            <button class="btn btn-block btn-danger" type="button" onclick="destroy({{ $row['id'] }}, '{{ route('education.destroy', config('params.id')) }}');">
                                {{ __('messages.Delete') }}
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @include('education.modal_add')
    @include('education.modal_edit')
    @include('modals.destroy')

    <script type="application/javascript">
        $(function () {
            initDataTable('#data-table', {order: [[0, 'desc']]})
        });
    </script>
    <script type="application/javascript" src="{{ asset('js/resource.js') }}"></script>
@endsection
