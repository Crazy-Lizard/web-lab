@extends('layouts.layout')

@section('content')
    @section('title','Мой блог')
    <head>
        <link href="{{ asset('css/blog.css?v=') . time() }}" rel="stylesheet">
    </head>
    <div class="Information">
        <div class="header">
            <h1 id="Name"> Мой Блог </h1>
        </div>

        <div id="postList">
            @foreach ($posts as $post)
                <div class="postTitle" data-id="{{ $post->id }}">
                    <h3>{{ $post->title }}</h3>
                    <button class="expandButton">⬇️</button>
                    <div class="postContent" style="display: none;">
                        <img class="postImage">
                        <p class="postDescription"></p>
                        <div class="commentsList" data-id="{{ $post->id }}"></div>
                    </div>
                    {{-- <button class="commentButton" onclick="openModal({{ $post->id }})">Добавить комментарий</button>

                    <div id="commentModal" class="modal" style="display: none;">
                        <div class="modal-content">
                            <span class="close" onclick="closeModal()">&times;</span>
                            <iframe id="commentIframe" name="commentFrame" style="display: none;"></iframe>
                            <form id="commentForm" method="POST" target="commentFrame" onsubmit="submitComment(event, {{ $post->id }})">
                                @csrf
                                <textarea id="commentText" name="content"></textarea>
                                <button type="submit">Отправить</button>
                            </form>
                        </div>
                    </div> --}}
                </div>
            @endforeach
        </div>

        {{ $posts->links() }}

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.expandButton').click(function() {
                var id = $(this).parent().data('id');
                var content = $(this).siblings('.postContent');
                if (content.is(':visible')) {
                    content.slideUp();
                } else {
                    $.get('/myblog/' + id, function(data) {
                        content.find('.postImage').attr('src', 'data:image/jpeg;base64,' + data.image);
                        content.find('.postDescription').text(data.content);
                        content.slideDown();
                        // loadComments(id); // Загружаем комментарии при разворачив

                    });
                }
            });
        });

    </script>
@endsection