<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $name = 'Giusppe';
        $lastname = 'Verdi';

        $films = [
            'Via Col Vento',
            'The Matrix',
            'Ritorno al futuro'

        ];
        // compact riceve in stringa il nome di una o più var e le trasroma i array associativi con la corrispondenza chiave valore con nome della variabile
        return view('home', compact('name', 'lastname', 'films'));
    }

    public function about(){

        return view('about');
    }

    public function contacts(){

        return view('contacts');
    }


}
