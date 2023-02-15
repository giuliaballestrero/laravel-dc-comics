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

<body class="bg-dark text-light">

    <main>
        <div class="container py-5">
            <div class="row">
                @dump(Route::currentRouteName())
                <div class="col-12 d-flex ">
                    <h1>Admin Control Section</h1>
                    <a class="ms-auto me-5 btn btn-success text-uppercase mb-5" href="{{ route('comics.create') }}">
                        >> Insert New Comic << 
                    </a>
                    <a class="ms-auto me-5 btn btn-danger text-uppercase mb-5" href="{{ route('home') }}">
                        Logout
                    </a>
                </div>

                <div class="col-12">
                    <table class="table text-light">
                        <thead>
                            <tr>
                                <th role="col" class="text-uppercase">ID</th>
                                <th role="col" class="text-uppercase">Title</th>
                                <th role="col" class="text-uppercase">Price</th>
                                <th role="col" class="text-uppercase">Sale Date</th>
                                <th role="col" class="text-uppercase">Type</th>
                                <th role="col" class="text-uppercase">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comics as $comic)
                                <tr>
                                    <th scope="row">{{ $comic->id }}</th>
                                    <td>{{ $comic->title }}</td>
                                    <td>{{ $comic->price }}&euro;</td>
                                    <td>{{ $comic->sale_date }}</td>
                                    <td class="text-capitalize">{{ $comic->type }}</td>
                                    <td>
                                        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary btn-sm me-2">Show comic</a>
                                        <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning btn-sm me-2">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm me-2">Delete</a>
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
