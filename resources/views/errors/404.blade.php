@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="mb-5">{{ $exception->getMessage()}}</h1>
            <div class="text-center">
                <img class="img-fluid" src="{{ asset('img/batman.gif')}}" alt="Sad Batman">
            </div>


        <a href="{{ route('comics.index')}}">Back to archive</a>
    </div>    

        
@endsection