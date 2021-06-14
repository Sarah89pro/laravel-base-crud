@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="mb-5">Our Comics</h1>

        <!--table Comics-->
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Series</th>
                    <th>Sale Date</th>
                    <th>Type</th>
                    <th colspan="3">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->id }}</td>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>

                        <td>
                            <a class="btn btn-success" href="{{ route('comics.show', $comic->id)}}">SHOW</a>
                        </td>
                        <td>EDIT</td>
                        <td>DELETE</td>
                    </tr>
                    
                @endforeach

            </tbody>
        </table>


        <!--per scorrere nella paginazione-->
        {{ $comics->links() }}
    </div>
@endsection