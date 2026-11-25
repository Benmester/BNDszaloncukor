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
}
