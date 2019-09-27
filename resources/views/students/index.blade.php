@extends('layouts.app')

@section('title')
    {{ __('messages.Students') }}
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-body">
            <table id="data-table" class="table table-striped">
                <thead>
                <tr>
                    <th>{{ __('messages.id') }}</th>
                    <th>{{ __('students.first_name') }}</th>
                    <th>{{ __('students.last_name') }}</th>
                    <th>{{ __('students.patronymic') }}</th>
                    <th>{{ __('students.birthday') }}</th>
                    <th>{{ __('messages.Actions') }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($rows as $row)
                    <tr>
                        <td>{{ $row['id'] }}</td>
                        <td>{{ $row['first_name'] }}</td>
                        <td>{{ $row['last_name'] }}</td>
                        <td>{{ $row['patronymic'] }}</td>
                        <td>{{ $row['birthday'] }}</td>
                        <td>
                            <button class="btn btn-block btn-primary" type="button" onclick="edit({{ $row['id'] }}, '{{ route('students.edit', config('params.id')) }}');">
                                {{ __('messages.Edit') }}
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @include('students.modal_edit')

    <script type="application/javascript">
        $(function () {
            initDataTable('#data-table', {order: [[0, 'desc']]})
        });
    </script>
    <script type="application/javascript" src="{{ asset('js/resource.js') }}"></script>
@endsection
