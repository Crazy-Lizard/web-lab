@extends('layouts.layout')

@section('content')
    <head>
        <title>История</title>
        <link rel="stylesheet" href="{{ asset('css/history.css?v=') . time() }}">
    </head>

    <body>
        <header>
            <menu class = "menu">
                <p>
                    <a href="{{ route('main') }}">Главная</a>
                    <a href="{{ route('about') }}">Обо мне</a>
                    <a href="{{ route('interests') }}">Интересы</a>
                    <a href="{{ route('study') }}">Учёба</a>
                    <a href="{{ route('album') }}">Фотоальбом</a>
                    <a href="{{ route('contact') }}">Контакт</a>
                    <a href="{{ route('test') }}">Тест</a>
                    <a href="{{ route('admin') }}">Администратор</a>
                </p>
            </menu>
        </header>
        <div class="Information">
            <h1 id="Name"> История </h1>

            <h2>История текущего сеанса</h2>
            <table id="sessionHistoryTable">
                <thead>
                <tr>
                    <th>Страница</th>
                    <th>Количество просмотров</th>
                </tr>
                </thead>
                <tbody>
                <!-- Здесь будет генерироваться содержимое таблицы с помощью JavaScript -->
                </tbody>
            </table>
            
            <h2>История за все время</h2>
            <table id="allTimeHistoryTable">
                <thead>
                <tr>
                    <th>Страница</th>
                    <th>Количество просмотров</th>
                </tr>
                </thead>
                <tbody>
                <!-- Здесь будет генерироваться содержимое таблицы с помощью JavaScript -->
                </tbody>
            </table>
        </div>
        <script src = "{{ asset('js/history.js') }}"></script>
        <script src = "{{ asset('js/localHistory.js') }}"></script>

    </body>
@endsection