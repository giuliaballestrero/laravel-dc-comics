@extends('layouts.app')

@section('title', 'Dc Comics | Homepage')

@section('jumbo')
<section class="jumbo">
    <!--inserisco sfondo in app.scss-->
    <a class="btn btn-primary text-uppercase my_series_btn" href="#" role="button">current series</a> 
</section>
@endsection


@section('main-content')
<section class="bg-dark pt-5">
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-2 pb-4">
                <div class="card">
                <img src="{{ $comic['thumb']}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">{{$comic['title']}}</p>
                    <p class="card-text">{{$comic['description']}}</p>
                    <p class="card-text">{{$comic['price']}}</p>
                    <p class="card-text">{{$comic['type']}}</p>
                </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection