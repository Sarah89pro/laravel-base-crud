@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="mb-5">{{ $comic->title}}</h1>
        <div class="mb-5">
            <span class="badge bg-primary">{{ $comic->type}}</span>
            Prezzo: {{ $comic->price}}
        </div>

        <div class="row">
            <div class="col md-6">
                <img class="img-fluid" src="{{$comic->thumb}}" alt="{{$comic->title}}">
            </div>
            <div class="col md-6">
                {{ $comic->description}}
            </div>
        </div>



        <a href="{{ route('comics.index')}}">Back to archive</a>
    </div>    

        
@endsection