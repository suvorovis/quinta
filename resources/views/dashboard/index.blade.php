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
    <h3>Количество работающих по профессии</h3>
</div>
<div id="table" style="color: black; background-color: white; margin:0 auto ; margin-top: 50px; max-width: 1500px; padding: 20px">
    <table id="data-table" class="table table-striped">
        <thead>
        <tr>
            <th>Направление</th>
            <th>Профессия</th>
            <th>Количество выпускников</th>
            <th>Количество трудоустроенных</th>
            <th>Эффективность</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>IT технологии</td>
                <td>Back-end разработчик</td>
                <td>10000</td>
                <td>2000</td>
                <td>20%</td>
            </tr>
            <tr>
                <td>IT технологии</td>
                <td>Front-end разработчик</td>
                <td>10000</td>
                <td>3000</td>
                <td>30%</td>
            </tr>
            <tr>
                <td>IT технологии</td>
                <td>Machine learning engineer</td>
                <td>10000</td>
                <td>1000</td>
                <td>10%</td>
            </tr>
            <tr>
                <td>Дизайн</td>
                <td>Веб-дизайнер</td>
                <td>5000</td>
                <td>1000</td>
                <td>20%</td>
            </tr>
            <tr>
                <td>Дизайн</td>
                <td>Графический дизайн</td>
                <td>5000</td>
                <td>3000</td>
                <td>60%</td>
            </tr>
            <tr>
                <td>Финансовое дело</td>
                <td>Бухгалтер</td>
                <td>8000</td>
                <td>2000</td>
                <td>25%</td>
            </tr>
        </tbody>
    </table>
</div>

</section>

<script type="application/javascript">
    $(function () {
        initDataTable('#data-table', {order: [[0, 'asc']]})
    });
</script>
    
@endsection
