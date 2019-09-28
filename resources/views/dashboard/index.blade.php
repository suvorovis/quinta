@extends('layouts.app')
@include('js.diagrams')
@section('title')
    {{ __('messages.Dashboard') }}
@endsection

@section('content')
<section id="stats">
<h2 class="header">Аналитика</h2>
<div class="diagrams">
    <h3>Количество работающих по профессиям</h3>
    <div id="chart_div" style="padding-left: 100px;"></div>
    <h3>Востребованность направлений</h3>
    <div id="chart_div2" style="padding-left: 100px; margin-top: 50px"></div>
    <h3>Анализ трудоустройства студентов</h3>
</div>
<div class="card text-white" style="background-color: #333;">
    <div class="card-header text-center">
        <form id="filter-form" method="get">
            <input id="from" name="from" type="text" placeholder="{{ __('reports.From') }}" @if($params['from'] ?? null) value="{{$params['from']}}" @endif/>
            <input id="to" name="to" type="text" placeholder="{{ __('reports.To') }}" @if($params['to'] ?? null) value="{{$params['to']}}" @endif/>
            <button type="submit" class="btn btn-light">{{ __('reports.Filter') }}</button>
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

</section>

<script type="application/javascript">
    $(function () {
        initDataTable('#data-table', {order: [[4, 'desc']]})
    });
</script>
    
@endsection
