@extends('layouts.app')

@section('title')
    {{ __('messages.Employments') }}
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <button class="btn btn-block btn-success col-md-2" type="button" onclick="create('{{ route('employments.store') }}');">
                {{ __('messages.Add') }}
            </button>
        </div>
        <div class="card-body">

            <table id="data-table" class="table table-striped">
                <thead>
                <tr>
                    <th>{{ __('messages.id') }}</th>
                    <th>{{ __('employments.organization') }}</th>
                    <th>{{ __('employments.profession') }}</th>
                    <th>{{ __('employments.from') }}</th>
                    <th>{{ __('employments.to') }}</th>
                    <th>{{ __('messages.Actions') }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($rows as $row)
                    <tr>
                        <td>{{ $row['id'] }}</td>
                        <td>{{ $row['organization'] }}</td>
                        <td>{{ $row['profession'] }}</td>
                        <td>{{ $row['from'] }}</td>
                        <td>{{ $row['to'] }}</td>
                        <td class="row">
                            <button class="btn btn-block btn-primary" type="button" onclick="edit({{ $row['id'] }}, '{{ route('employments.edit', config('params.id')) }}');">
                                {{ __('messages.Edit') }}
                            </button>
                            <button class="btn btn-block btn-danger" type="button" onclick="destroy({{ $row['id'] }}, '{{ route('employments.destroy', config('params.id')) }}');">
                                {{ __('messages.Delete') }}
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @include('employments.modal_add')
    @include('employments.modal_edit')
    @include('modals.destroy')

    <script type="application/javascript">
        $(function () {
            initDataTable('#data-table', {order: [[0, 'desc']]})
        });
    </script>
    <script type="application/javascript" src="{{ asset('js/resource.js') }}"></script>
@endsection
