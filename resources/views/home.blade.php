@extends('guest.layouts.app')

@section('title', 'Dc Comics | Homepage')

@section('main-content')
<section class="bg-dark pt-5">
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-2 pb-4">
                <div class="card">
                <img src="{{ $comic['thumb']}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">{{$comic->title}}</p>
                    <p class="card-text">{{$comic->description}}</p>
                    <p class="card-text">{{$comic->price}}</p>
                    <p class="card-text">{{$comic->type}}</p>
                </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection