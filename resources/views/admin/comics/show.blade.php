<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dc Comics | Comic Details</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body class="bg-dark">

    <main >
        <div class="container py-5">
            <div class="row">

                <div class="col-12">
                    <a class="ms-auto btn btn-success text-uppercase" href="{{ route('comics.index') }}">
                        Go Back
                    </a>
                    <h1 class="text-light text-center py-3">{{$comic->title}} - Details</h1>
                </div>
                <div class="col-12">
                <!--Aggiungo un if session per i messaggi di conferma azioni-->
                @if (session('message'))
                    <div class="alert alert-{{ session('alert-type') }}">
                        {{ session('message')  }}
                    </div>
                @endif
                    <div class="card p-5 text-center">
                        <div class="card-title">
                            <h2>
                                {{ $comic->title }}
                            </h2>
                        </div>
                        <div class="card-img">
                            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="img-fluid">
                        </div>
                        <div class="card-subtitle pt-4">
                            <h3 class="text-light bg-dark">
                               {{ $comic->series }}
                            </h3>
                        </div>
                        <div class="card-body">
                            <p>
                                {{ $comic->description }}
                            </p>
                            <p class="text-light bg-dark fw-bold">
                                Price &euro; {{ $comic->price}}
                            </p>
                            <p>
                                Type:{{ $comic->type}}
                            </p>
                        </div>
                        <div>
                            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning me-2">Edit</a>
                            <form class="d-inline" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                @csrf
                                {{--aggiungere il metodo DELETE--}}
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger me-2 d-inline">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
            </div>

        </div>
    </main>

</body>

</html>
