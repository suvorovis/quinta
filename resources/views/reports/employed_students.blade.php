@extends('layouts.app')

@section('title')
    {{ __('messages.Employed students') }}
@endsection

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h1>{{ __('reports.Employed students') }}</h1>
            <form id="filter-form" method="get">
                <input id="from" name="from" type="text" placeholder="{{ __('reports.From') }}" @if($params['from'] ?? null) value="{{$params['from']}}" @endif/>
                <input id="to" name="to" type="text" placeholder="{{ __('reports.To') }}" @if($params['to'] ?? null) value="{{$params['to']}}" @endif/>
                <button type="submit" class="btn btn-primary">{{ __('reports.Filter') }}</button>
            </form>
        </div>
        <div class="card-body">

            <table id="data-table" class="table table-striped">
                <thead>
                <tr>
                    <th>{{ __('reports.direction') }}</th>
                    <th>{{ __('reports.profession') }}</th>
                    <th class="text-center">{{ __('reports.educated') }}</th>
                    <th class="text-center">{{ __('reports.employed') }}</th>
                    <th class="text-center">{{ __('reports.rate') }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($rows as $row)
                    <tr>
                        <td>{{ $row['direction'] }}</td>
                        <td>{{ $row['profession'] }}</td>
                        <td class="text-center">{{ $row['educated'] }}</td>
                        <td class="text-center">{{ $row['employed'] }}</td>
                        <td class="text-center">{{ $row['rate'] }}%</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script type="application/javascript">
        $(function () {
            initDataTable('#data-table', {order: [[4, 'desc']]})
        });
    </script>
@endsection
