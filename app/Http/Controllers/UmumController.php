<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use App\Models\ptk;
use App\Models\Pesertadidik;
use Illuminate\Http\Request;

class UmumController extends Controller
{
    public function viewPaud()
    {
        $sekolah = Sekolah::whereIn('bentuk_pendidikan', ['TK', 'SPS', 'TPA', 'RA', 'KB'])->get();

        return view('Home.paud', compact('sekolah'));
    }

    public function viewSD()
    {
        $sekolah = Sekolah::whereIn('bentuk_pendidikan', ['TK', 'SPS', 'TPA', 'RA', 'KB'])->get();

        return view('Home.sd', compact('sekolah'));
    }

    public function viewSMP()
    {
        $sekolah = Sekolah::whereIn('bentuk_pendidikan', ['TK', 'SPS', 'TPA', 'RA', 'KB'])->get();

        return view('Home.smp', compact('sekolah'));
    }

    public function index(Request $request)
    {
        $totalTk = Sekolah::whereIn('bentuk_pendidikan', ['TK', 'SPS', 'TPA', 'RA', 'KB'])->count();
        $totalSd = Sekolah::whereIn('bentuk_pendidikan', ['SD', 'MI', 'SPK SD'])->count();
        $totalSmp = Sekolah::whereIn('bentuk_pendidikan', ['SMP', 'MTS', 'SPK SMP'])->count();
        $totalPgtk = Ptk::count();

        $tsTk = PesertaDidik::whereHas('sekolah', function ($query) {
            $query->whereIn('bentuk_pendidikan', ['TK', 'SPS', 'TPA', 'RA', 'KB']);
        })->count();
        $tsSd = PesertaDidik::whereHas('sekolah', function ($query) {
            $query->whereIn('bentuk_pendidikan', ['SD', 'MI', 'SPK SD']);
        })->count();

        $tsSmp = PesertaDidik::whereHas('sekolah', function ($query) {
            $query->whereIn('bentuk_pendidikan', ['SMP', 'MTS', 'SPK SMP']);
        })->count();


        return view('Home.index', compact('totalTk', 'totalSd', 'totalSmp', 'totalPgtk', 'tsTk', 'tsSd', 'tsSmp'));
    }
}
