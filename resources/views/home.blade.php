@extends('layouts.app')
@include('js.home_diagram')
@section('content')
<div>
    <section id="banner">
        <div class="wrapper container-fluid">
            <img src="{{ asset('images/statistics.png') }}" alt="">
            <div class="text">
            На данном ресурсе вы можете увидеть подробную статистику о востребованных профессиях, а так же найти нужного вам работодателя или работника.
            </div>
        </div>
    </section>

    <section id="advantages" class="container-fluid">
    <div class="head_row">
        <div class="employee wrapper">
            <h2 class="header">Какие выгоды работодателям?</h2>
        </div>
        <div class="job wrapper">
            <h2 class="header">Какие выгоды работникам?</h2>
        </div>
    </div>

        <div class="adv_row">
            <img src="{{ asset('images/people.png') }}" alt="">
            <p class="left_text">Удобный поиск работников</p>
            <div class="dot"></div>
            <p class="right_text">Удобный поиск рабочих мест</p>
            <img src="{{ asset('images/job.png') }}" alt="">
        </div>
        <div class="adv_row">
            <img src="{{ asset('images/history.png') }}" alt="">
            <p class="left_text">Подтверждение трудовой истории</p>
            <div class="dot"></div>
            <p class="right_text">Ориентированность на рынок труда</p>
            <img src="{{ asset('images/market.png') }}" alt="">
        </div>
        <div class="adv_row">
            <img src="{{ asset('images/business.png') }}" alt="">
            <p class="left_text">Эффективное управление бизнесом</p>
            <div class="dot"></div>
            <p class="right_text">Множество вакансий</p>
            <img src="{{ asset('images/docs.png') }}" alt="" width="115">
        </div>
    </section>

    <section id="stats">
        <h2 class="header">Наиболее
        востребованные профессии</h2>
        <div class="diagramm"> <div class="container-fluid"><div id="chart_div" style="padding-bottom: 20px; margin-left: 100px;"></div></div> </div>
        <div class="all_stat"><a href="{{route('dashboard.index')}}">Весь список</a></div>
    </section>
</div>
@endsection
