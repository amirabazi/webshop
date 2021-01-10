@extends('layouts.layout')

@section('content')

    @if (isset($uspjesnoDodano) && $uspjesnoDodano == true)
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Uspjeh!</strong> Uspjesno ste dodali artikal u bazu.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row">

        <div class="col-3"></div>

        <div class="col-6">
            <!--Glavni container-->
            <h4 class="mb-5">Dodavanje artikla</h4>

            <form method="POST" action="/admin/dodaj">
                @csrf

                <div class="input-group mb-3">
                    <span class="input-group-text" id="artikal_naziv">Naziv</span>
                    <input type="text" class="form-control" name="artikal_naziv" placeholder="Naziv artikla" aria-label="naziv" aria-describedby="artikal_naziv">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="artikal_kategorija">Naziv</span>
                    <input type="text" class="form-control" name="artikal_kategorija" placeholder="Kategorija" aria-label="kategorija" aria-describedby="artikal_kategorija">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="artikal_cijena">Cijena</span>
                    <input type="number" class="form-control" name="artikal_cijena" placeholder="Cijena" aria-label="cijena" aria-describedby="artikal_cijena">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="artikal_image">Slika</span>
                    <input type="text" class="form-control" name="artikal_image" placeholder="Slika" aria-label="slika" aria-describedby="artikal_image">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="artikal_stanje">Stanje</span>
                    <input type="number" class="form-control" name="artikal_stanje" placeholder="Stanje" aria-label="stanje" aria-describedby="artikal_stanje">
                </div>

                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary">Dodaj artikal</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-3"></div>
    </div>
@endsection