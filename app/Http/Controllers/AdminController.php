<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function index() {
        return view("admin");
    }

    public function dodaj(Request $request) {
        
        $naziv = $request->input("artikal_naziv");
        $kategorija = $request->input("artikal_kategorija");
        $cijena = $request->input("artikal_cijena");
        $slika = $request->input("artikal_image");
        $stanje = $request->input("artikal_stanje");

        $q = "INSERT INTO artikli (naziv, kategorija, cijena, image_url, stanje) VALUES
            (:naziv, :kategorija, :cijena, :image_url, :stanje)";
        DB::insert($q, [
            "naziv" => $naziv,
            "kategorija" => $kategorija,
            "cijena" => $cijena,
            "image_url" => $slika,
            "stanje" => $stanje,
        ]);

        return view("admin", [
            "uspjesnoDodano" => true,
        ]);
    }
}
