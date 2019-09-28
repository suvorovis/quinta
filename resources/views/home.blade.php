@extends('layouts.app')

@section('content')
<div class="">
    <section id="banner">
        <div class="wrapper">
            <img src="{{ asset('images/statistics.png') }}" alt="">
            <div class="text">
            На данном ресурсе вы можете увидеть подробную статистику о востребованных профессиях, а так же найти нужного вам работодателя или работника.
            </div>
        </div>
    </section>
    <section id="stats">
        <h2 class="header">Наиболее
        востребованные профессии</h2>
        <div class="diagramm" style="height:200px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde, distinctio?</div>
        <div class="all_stat"><a>Весь список</a></div>
    </section>
    <section id="advantages">
        <div class="employee wrapper">
            <h2 class="header">Какие выгоды работодателям?</h2>
        </div>
        <div class="job wrapper">
            <h2 class="header">Какие выгоды работникам?</h2>
        </div>
        
    </section>
</div>
@endsection
