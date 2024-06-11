@extends('layouts.layout')

@section('content')
    @section('title','Фотоальбом')
    <head>
        <link href="{{ asset('css/album.css?v=') . time() }}" rel="stylesheet">        
        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> --}}
    </head>
    <body>
        <div class="images">
            <h1 class="albtitle"> Фотоальбом </h1>
            <div class="gallery">
                <table>
                    @foreach (array_chunk($images, 4) as $row) 
                    <tr> 
                        @foreach($row as $image) 
                            <td> 
                                <img src="{{ $image['src'] }}" title="{{ $image['title'] }}"/> 
                            </td> 
                        @endforeach 
                    </tr> 
                    @endforeach 
                    {{-- <script src="{{ asset('js/photoAlbum.js') }}"></script> --}}
                </table>
            </div>
        </div>
        
        <script src = "{{ asset('js/history.js') }}"></script>
        <script src = "{{ asset('js/localHistory.js') }}"></script>
    </body>

@endsection
