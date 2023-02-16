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
                    <h1 class="pb-3">Create a new Comic</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-16">
                    <form action="{{ route('comics.store') }}" method="POST">
                        @csrf
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
                            <input type="text" name="title">
                        </div>

                        <div class="py-2">
                            <label for="name" class="form-label d-block">
                                Description
                            </label>
                            <textarea type="text" name="description"></textarea>
                        </div>

                        <div class="py-2">
                            <label for="name" class="form-label d-block">
                                Thumb
                            </label>
                            <input type="text" name="thumb">
                        </div>

                        <div class="py-2">
                            <label for="name" class="form-label d-block">
                                Price
                            </label>
                            <input type="text" name="price">
                        </div>


                        <div class="py-2">
                            <label for="name" class="form-label d-block">
                                Series
                            </label>
                            <input type="text" name="series">
                        </div>

                        <div class="py-2">
                            <label for="name" class="form-label d-block">
                                Sale Date
                            </label>
                            <input type="text" name="sale_date">
                        </div>

                        <div class="py-2">
                            <label for="name" class="form-label d-block">
                                Type
                            </label>
                            <input type="text" name="type">
                        </div>

                        <div class="pt-4">
                            <a class="ms-auto btn btn-primary me-3" href="{{ route('comics.index') }}">
                                Go Back
                            </a>
                            <button type="submit" class="btn btn-success">
                                Create
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </main>

</body>

</html>
