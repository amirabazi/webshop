@extends('layouts.layout')

@section('content')

@if (isset($poslanUpit) && $poslanUpit == true)
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Uspjeh!</strong> Hvala vam na poslanom upitu!
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
@endif

<div class="row">
  <div class="col">
    <h1>Pitajte nas:</h1>
	<form method="POST" action="/posaljiupit">
		@csrf
        <div class="row">
          <div class="col">
            <input type="text" name="ime" class="form-control nasInput" placeholder="Ime:">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <input type="text" name="email" class="form-control nasInput" placeholder="Email:">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <input type="text" name="pitanje" class="form-control nasInput" placeholder="Pitanje:">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <button type="submit" class="btn btn-primary">Posalji upit</button>
           </div>
        </div>
    </form>
  </div>

  <div class="col">
    <h1> Web Shop</h1>
    <p> Jaci smo od Doppera</p>
    <p> 033-225-883 Sejo Kalac </p>
  </div>
</div>  
@endsection