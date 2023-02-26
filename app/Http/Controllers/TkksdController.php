<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TkksdController extends Controller
{
    public function showTkksd()
    {
        return view('tkksd');
    }
    public function showTkksdaward()
    {
        return view('tkksd-award');
    }
    public function showKaledoiskop()
    {
        return view('kaledoiskop');
    }
}
