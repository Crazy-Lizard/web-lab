@extends('layouts.layout')

@section('content')
    @section('title','Гостевая книга')
    <head>
        <link href="{{ asset('css/guestbook.css?v=') . time() }}" rel="stylesheet">
    </head>
    <div class="Information">
        <div class="header">
            <h1> Гостевая книга </h1>
        </div>
        <form method="POST" action="/guestbook">
            @csrf
            <input name="surname" type="text" placeholder="Фамилия">
            <input name="name" type="text" placeholder="Имя">
            <input name="email" type="email" placeholder="E-mail">
            <textarea name="message" placeholder="Текст отзыва"></textarea>
            <button type="submit">Отправить</button>
        </form>

        @if ($messages)
            <table>
                @foreach ($messages as $message)
                <tr>
                    <td>{{ $message['created_at'] }}</td>
                    <td>{{ $message['surname'] }} {{ $message['name'] }}</td>
                    <td>{{ $message['email'] }}</td>
                    <td>{{ $message['message'] }}</td>
                </tr>
            @endforeach
            </table>
        @else
            <p>Нет данных для отображения.</p>
        @endif
    </div>

@endsection
