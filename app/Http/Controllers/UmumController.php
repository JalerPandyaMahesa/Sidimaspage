<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use Illuminate\Http\Request;

class UmumController extends Controller
{
    public function viewPaud()
    {
        $sekolah = Sekolah::whereIn('bentuk_pendidikan', ['TK', 'SPS', 'TPA', 'RA', 'KB'])->get();

        return view('Home.paud', compact('sekolah'));
    }
}
