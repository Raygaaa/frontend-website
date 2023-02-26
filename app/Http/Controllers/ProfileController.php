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
    public function showPersonil()
    {
        return view('profile.personil');
    }
    public function showLayanan()
    {
        return view('profile.layanan');
    }
    public function showPk()
    {
        return view('profile.pk');
    }
    public function showIk()
    {
        return view('profile.ik');
    }
    public function showKontak()
    {
        return view('profile.kontak');
    }
    public function showKsdd()
    {
        return view('monev.ksdd');
    }
    public function showKsdpk()
    {
        return view('monev.ksdpk');
    }
    public function showSinergitas()
    {
        return view('monev.sinergitas');
    }
    public function showKsdpl()
    {
        return view('monev.ksdpl');
    }
    public function showKsdll()
    {
        return view('monev.ksdll');
    }
    public function showPengajuan()
    {
        return view('monev.pengajuan');
    }
    public function showRekapitulasi()
    {
        return view('monitoring.rekapitulasi');
    }
    public function showLayananpublik()
    {
        return view('monitoring.layananpublik');
    }
}
