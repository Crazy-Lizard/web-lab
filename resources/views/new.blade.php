<!-- resources/views/new.blade.php -->

@extends('layouts.layout')

@section('content')
    <form method="POST" action="/new">
        @csrf
        <button type="submit" name="action" value="new">new</button>
        <button type="submit" name="action" value="old">old</button>
    </form>
    @if (!empty($message))
        <h1>{{$message}}</h1>
    @endif
@endsection
