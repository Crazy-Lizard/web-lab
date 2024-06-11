<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>


        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->

        <!-- Styles -->
        <link href="{{ asset('css/style.css?v=') . time() }}" rel="stylesheet">
        
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
                  <a href="{{ route('history') }}">История</a>
                  <a href="{{ route('admin') }}">Администратор</a>
                  {{-- <a href="{{ route('new') }}">NEW</a> --}}
                  <a href="{{ route('guestbook') }}">Гостевая книга</a>
                  <a href="{{ route('myblog') }}">Мой блог</a>
                  <a href="{{ route('blog') }}">Создать пост</a>
              </p>
          </menu>
      </header>

      @yield('content')

      {{-- <footer>
        <p>Copyright 2024 Crazy Lizard</p>
      </footer> --}}
    </body>
</html>