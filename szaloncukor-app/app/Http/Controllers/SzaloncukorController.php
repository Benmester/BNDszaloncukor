<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Termekek;

class SzaloncukorController extends Controller
{
    public function Termekek() {
        $data = Termekek::all();
        return view('welcome', [
            "data" => $data
        ]);
    }

    public function Hozzaadas(Request $req) {
        $req -> validate([
            'marka'             => 'required|min:2',
            'iz'                => 'required|min:2',
            'suly'              => 'required|numeric|min:100',
            'ar'                => 'required|numeric|min:100'
        ],[
            'marka.required'    => "A márka megadása kötelező!",
            'marka.min'         => "A márkanév legyen minimum 2 betű",

            'iz.required'       => "Az íz megadása kötelező!",
            'iz.min'            => "Az íz legyen minimum 2 betű",

            'suly.required'     => "A súly megadása kötelező!",
            'suly.min'          => "Minimum súly 100 g!",

            'ar.required'       => "Az ár megadása kötelező!",
            'ar.min'            => "Minimum ár 100 Ft!",
        ]);

        $data = new Termekek;
        $data['marka']  = $req['marka'];
        $data['iz']     = $req['iz'];
        $data['suly']   = $req['suly'];
        $data['ar']     = $req['ar'];
        if ($req -> has('plusz18')) {
            $data['plusz18'] = 1;
        } else {
            $data['plusz18'] = 0;
        }
        $data -> save();
        $data = Termekek::all();
        return view('welcome', [
            "data" => $data
        ]);
    }
}
