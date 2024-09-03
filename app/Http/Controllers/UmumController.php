<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use App\Models\Ptk;
use App\Models\Pesertadidik;
use Illuminate\Http\Request;

class UmumController extends Controller
{
    public function viewPaud()
    {
        $sekolah = Sekolah::whereIn('bentuk_pendidikan', ['TK', 'SPS', 'TPA', 'RA', 'KB'])->get();
        return view('home.paud', compact('sekolah'));
    }

    public function viewSD()
    {
        $sekolah = Sekolah::whereIn('bentuk_pendidikan', ['SD', 'MI', 'SPK SD'])->get();
        return view('home.sd', compact('sekolah'));
    }

    public function viewSMP()
    {
        $sekolah = Sekolah::whereIn('bentuk_pendidikan', ['SMP', 'MTS', 'SPK SMP'])->get();
        return view('home.smp', compact('sekolah'));
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

        return view('home.index', compact('totalTk', 'totalSd', 'totalSmp', 'totalPgtk', 'tsTk', 'tsSd', 'tsSmp'));
    }
}
