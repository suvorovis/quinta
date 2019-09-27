@extends('layouts.app')

@section('title')
    {{ __('messages.Tests') }}
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-body">
            <table id="data-table" class="table table-striped">
                <thead>
                <tr>
                    <th>{{ __('tests.id') }}</th>
                    <th>{{ __('tests.name') }}</th>
                    <th>{{ __('tests.created_at') }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($rows as $row)
                    <tr>
                        <td>{{ $row['id'] }}</td>
                        <td>{{ $row['name'] }}</td>
                        <td>{{ $row['created_at'] }}</td>
                        <td>
                            <button class="btn btn-block btn-primary" type="button" onclick="edit({{ $row['id'] }}, '{{ route('tests.edit', config('params.id')) }}');">
                                {{ __('messages.Edit') }}
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @include('tests.modal_edit')

    <script type="application/javascript">
        $(function () {
            initDataTable('#data-table', {order: [[0, 'desc']]})
        });
    </script>
    <script type="application/javascript" src="{{ asset('js/resource.js') }}"></script>
@endsection
