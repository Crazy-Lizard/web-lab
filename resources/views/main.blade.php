@extends('layouts.layout')

@section('content')
    <head>
        <title>Главная страница</title>
    </head>
    <body>
        <header>
            <menu class = "menu">
                <p>
                    {{-- <a href="{{ route('about') }}">Главная</a> --}}
                    <a href="{{ route('interests') }}">Интересы</a>
                    <a href="{{ route('study') }}">Учёба</a>
                    <a href="{{ route('album') }}">Фотоальбом</a>
                    <a href="{{ route('contact') }}">Контакт</a>
                    <a href="{{ route('test') }}">Тест</a>
                    <a href="{{ route('history') }}">История</a>
                    <a href="{{ route('admin') }}">Администратор</a>
                </p>
            </menu>
        </header>
        <section class = "page">
            <header>
                <h1>Ковылин Евгений Александрович</h1>
            </header>
            <div><img src="images/lizard1.jpg" alt="Lizard"/></div>
            <p>ПИ/б-21-1-о</p>
            <p>Лабораторная работа №8 "Исследование архитектуры MVC приложения и возможностей обработки данных HTML-форм на стороне сервера с использованием языка PHP"</p>
            <div id="datetime"></div>
        </section>
        
        <script src = "{{ asset('js/dateTime.js') }}"> </script>
        <script src = "{{ asset('js/history.js') }}"></script>
        <script src = "{{ asset('js/localHistory.js') }}"></script>
    </body>
@endsection