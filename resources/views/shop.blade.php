@extends('layouts.layout')

@section('content')
    @foreach ($artikli as $artikal)
        <div class="card kartica" style="width: 18rem;">
            <img src="{{$artikal->image_url}}" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title text-truncate">{{$artikal->naziv}}</h5>
                <p class="card-text">
                    <p class="card-opis">Cijena: {{$artikal->cijena}}KM</p>
                    <p class="card-opis">Na stanju: {{$artikal->stanje}}</p>
                </p>
            </div>
        </div>
    @endforeach
@endsection