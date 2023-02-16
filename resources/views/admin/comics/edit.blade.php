<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dc Comics | Add New Comic</title>

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
                <div class="col-12">
                    <h1 class="pb-3">Edit Comic</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <form action="{{ route('comics.update', compact('comic')) }}" method="POST">
                        {{-- mettere sempre nei form (_token) --}}
                        @csrf
                        {{-- inserisco il metodo PUT --}}
                        @method('PUT')
                        
                        <!--aggiungo un div per mostrare l'errore tramite foreach e endif per visualizzarlo dopo-->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>
                                            {{$error}}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="py-2">
                            <label for="name" class="form-label d-block">
                                Title
                            </label>
                            <input type="text" name="title" value="{{ $comic->title }}">
                        </div>

                        <div class="py-2">
                            <label for="name" class="form-label d-block">
                                Description
                            </label>
                            <textarea type="text" name="description" value="{{ $comic->description }}"></textarea>
                        </div>

                        <div class="py-2">
                            <label for="name" class="form-label d-block">
                                Thumb
                            </label>
                            <input type="text" name="thumb" value="{{ $comic->thumb }}">
                        </div>

                        <div class="py-2">
                            <label for="name" class="form-label d-block">
                                Price
                            </label>
                            <input type="text" name="price" value="{{ $comic->price }}">
                        </div>


                        <div class="py-2">
                            <label for="name" class="form-label d-block">
                                Series
                            </label>
                            <input type="text" name="series" value="{{ $comic->series }}">
                        </div>

                        <div class="py-2">
                            <label for="name" class="form-label d-block">
                                Sale Date
                            </label>
                            <input type="text" name="sale_date" value="{{ $comic->sale_date }}">
                        </div>

                        <div class="py-2">
                            <label for="name" class="form-label d-block">
                                Type
                            </label>
                            <input type="text" name="type" value="{{ $comic->type }}">
                        </div>

                        <div class="pt-4">
                            <a class="ms-auto btn btn-primary me-3" href="{{ route('comics.index') }}">
                                Go Back
                            </a>
                            <button type="submit" class="btn btn-success">
                                Edit
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </main>

</body>

</html>
