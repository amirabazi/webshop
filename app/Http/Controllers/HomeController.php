<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index() {

        $q = "SELECT * FROM artikli ORDER BY id DESC LIMIT 3";
        $results = DB::select($q);

        return view("index", [
            "sliderPonuda" => $results,
        ]);
    }

    public function shop() {

        $q = "SELECT * FROM artikli ORDER BY id";
        $results = DB::select($q);

        return view("shop", [
            "artikli" => $results,
        ]);
    }

    public function kontakt(){
        return view("kontakt");
    }

    public function posaljiupit(Request $request) {

        $ime = $request->input("ime");
        $email = $request->input("email");
        $pitanje = $request->input("pitanje");

        $q = "INSERT INTO pitanja (ime, email, pitanje) VALUES (:ime, :email, :pitanje)";
        DB::insert($q, [
            "ime" => $ime,
            "email" => $email,
            "pitanje" => $pitanje,
        ]);
        
        return view("kontakt", [
            "poslanUpit" => true,
        ]);
    }
}
  