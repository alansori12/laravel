<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kalkulator extends Controller
{
    public function index(){
        return view('kalkulator');
    }

    public function penjumlahan(){
        $a = 5;
        $b = 10;
        $c = $a+$b;
        return "$c";
    }

    public function pengurangan(){
        $a = 5;
        $b = 10;
        $c = $a-$b;
        return "$c";
    }

    public function perkalian(){
        $a = 5;
        $b = 10;
        $c = $a*$b;
        return "$c";
    }

    public function pembagian(){
        $a = 5;
        $b = 10;
        $c = $a/$b;
        return "$c";
    }

    public function modulus(){
        $a = 5;
        $b = 10;
        $c = $a%$b;
        return "$c";
    }
}
