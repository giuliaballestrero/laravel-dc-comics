<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dc Comics | Index</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th role="col">ID</th>
                                <th role="col">Title</th>
                                <th role="col">Price</th>
                                <th role="col">Sale Date</th>
                                <th role="col">Type</th>
                                <th role="col">Buttons</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comics as $comic)
                            <tr>
                                <th scope="row">{{$comic->id}}</th>
                                <td>{{$comic->title}}</td>
                                <td>{{$comic->price}}&euro;</td>
                                <td>{{$comic->sale_date}}</td>
                                <td>{{$comic->type}}</td>
                                <td>
                                    <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary btn-sm">Show comic</a>
                                    <a href="#" class="btn btn-success btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                                @endforeach
    
                        </tbody>
                    </table>
            </div>

        </div>
    </main>

</body>

</html>
