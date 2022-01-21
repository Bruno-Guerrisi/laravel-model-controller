@extends('layouts.main')

@section('main-content')

    <section>

        <div class="title-main">
            <h1>Movies</h1>
        </div>


        <div class="container-movies">

            @foreach($movies as $movie)


                <div class="card">
                    <div class="movie">
                    
                        <h2 class="title">{{$movie -> title}}</h2>
                        <span class="d-block title-2">{{$movie -> original_title}}</span>
                        <span class="d-block nationality">{{$movie -> nationality}}</span>
                        <span class="d-block date">{{$movie -> date}}</span>
                        <span class="d-block vote">{{$movie -> vote}}</span>
                    </div>
                </div>
                
            @endforeach
        </div>
    </section>

@endsection