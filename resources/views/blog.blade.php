@extends('layouts.layout')

@section('content')
    @section('title','Блог')
    <head>
        <link href="{{ asset('css/blog.css?v=') . time() }}" rel="stylesheet">
    </head>
    <div class="Information">
        <div class = "header">
            <h1 id="Name"> Редактор блога </h1>
        </div>
        <form method="POST" action="/blog" enctype="multipart/form-data">
            @csrf
            <input name="title" type="text" placeholder="Тема сообщения" required>
            <input name="image" type="file">
            <textarea name="content" placeholder="Текст сообщения" required></textarea>
            <button type="submit">Добавить запись</button>
        </form>
        
        @foreach ($posts as $post)
            <div>
                <h2>{{ $post->title }}</h2>
                {{--@if ($post->image)
                    <img src="data:image/jpeg;base64,{{ $post->image }}">
                @endif
                <p>{{ $post->content }}</p> --}}
            </div>
        @endforeach
        
        {{ $posts->links() }}
    </div>
@endsection
