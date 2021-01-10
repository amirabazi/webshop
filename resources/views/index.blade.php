@extends('layouts.layout')

@section('content')
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        @foreach ($sliderPonuda as $i => $slider)
            @if ($i == 0)
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$i}}" class="active"></li>
            @else
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$i}}" class="active"></li>
            @endif
        @endforeach
    </ol>
    <div class="carousel-inner">
        @foreach ($sliderPonuda as $i => $slider)
        @if ($i == 0)
            <div class="carousel-item active">
        @else
            <div class="carousel-item">
        @endif
            <img src="{{$slider->image_url}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>{{$slider->naziv}}</h5>
              <p>Hit cijena - {{$slider->cijena}}KM</p>
            </div>
          </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
</div>
<!--Do ovdje ide slajder-->
@endsection