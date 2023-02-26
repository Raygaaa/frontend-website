<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showLatarBelakang()
    {
        return view('profile.latarbelakang');
    }

    public function showDasarHukum()
    {
        return view('profile.dasar-hukum');
    }
}
