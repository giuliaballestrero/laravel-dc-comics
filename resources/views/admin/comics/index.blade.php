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

<body class="bg-dark">

    <main>
        <div class="container py-5">
            <div class="row">
                {{--@dump(Route::currentRouteName())--}}
                <div class="col-12 d-flex justify-content-between py-4">
                    <h1 class="text-light">Admin Control Section</h1>
                    <div>
                        <a class="ms-auto me-3 btn btn-success text-uppercase mb-5" href="{{ route('comics.create') }}">
                        >> Add New Comic << 
                        </a>
                        <a class="ms-auto btn btn-danger text-uppercase mb-5" href="{{ route('home') }}">
                            Logout
                        </a>
                    </div>
                </div>

                <!--Aggiungo un if session per i messaggi di conferma azioni-->
                @if (session('message'))
                    <div class="alert alert-{{ session('alert-type') }}">
                        {{ session('message')  }}
                    </div>
                @endif

                <div class="col-12">
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th role="col" class="text-uppercase">ID</th>
                                <th role="col" class="text-uppercase">Comic Title</th>
                                <th role="col" class="text-uppercase">Description</th>
                                <th role="col" class="text-uppercase">Image</th>
                                <th role="col" class="text-uppercase">Date</th>
                                <th role="col" class="text-uppercase">Type</th>
                                <th role="col" class="text-uppercase">Price</th>
                                <th role="col" class="text-uppercase">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comics as $comic)
                                <tr>
                                    <th scope="row">{{ $comic->id }}</th>
                                    <td>{{ $comic->title }}</td>
                                    <td>{{ $comic->description }}</td>
                                    <td><img class="img-thumbnail" src="{{ $comic->thumb }}" alt="{{ $comic->title }}"> </td>
                                    <td>{{ $comic->sale_date }}</td>
                                    <td class="text-capitalize">{{ $comic->type }}</td>
                                    <td>{{ $comic->price }}&euro;</td>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary btn-sm mb-2">Show comic</a>
                                        <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning btn-sm mb-2">Edit</a>
                                        <form class="d-inline" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                            @csrf
                                            {{--aggiungere il metodo DELETE--}}
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm mb-2">
                                                Delete
                                            </button>
                                        </form>
                                        </div>
                                        
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
