<?php

namespace App\Http\Controllers;

use App\Models\Pesertadidik;
use App\Models\Sekolah;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PesertaDidikImport;

class PesertadidikController extends Controller
{
    public function index()
    {
        $pesertadidik = Pesertadidik::with('sekolah')->get();
        return view('pesertadidik.index', compact('pesertadidik'));
    }

    public function show($peserta_didik_id)
    {
        $pesertadidik = Pesertadidik::with('sekolah')->findOrFail($peserta_didik_id);
        return view('pesertadidik.show', compact('pesertadidik'));
    }

    public function tk()
    {
        $sekolah = Sekolah::where('bentuk_pendidikan', 'TK')
            ->orWhere('bentuk_pendidikan', 'PAUD')
            ->get();
 
        return view('sekolah.filter', ['sekolah' => $sekolah, 'filter' => 'TK']);
    }

    public function sd()
    {
        $sekolah = Sekolah::where('bentuk_pendidikan', 'SD')
            ->orWhere('bentuk_pendidikan', 'MI')
            ->get();

        return view('sekolah.filter', ['sekolah' => $sekolah, 'filter' => 'SD']);
    }

    public function smp()
    {
        $sekolah = Sekolah::where('bentuk_pendidikan', 'SMP')
            ->orWhere('bentuk_pendidikan', 'MA')
            ->get();

        return view('sekolah.filter', ['sekolah' => $sekolah, 'filter' => 'SMP']);
    }

    public function create($sekolah_id = null)
    {
        $sekolah = Sekolah::all(); // Fetch all sekolah records
        return view('pesertadidik.create', compact('sekolah', 'sekolah_id'));
    }
    

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'sekolah_id' => 'required|exists:sekolah,sekolah_id' // Corrected validation rule
        ]);

        Pesertadidik::create($validatedData);

          return redirect()->route('admin.showSekolah', ['sekolah_id' => $request->input('sekolah_id')])
                     ->with('success', 'Peserta didik created successfully.');
    }

    public function edit($peserta_didik_id)
    {
        $pesertadidik = Pesertadidik::findOrFail($peserta_didik_id);
        $sekolah = Sekolah::all(); // Fetch all sekolah records

        return view('pesertadidik.edit', compact('pesertadidik', 'sekolah'));
    }

    public function update(Request $request, $peserta_didik_id)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'sekolah_id' => 'required|exists:sekolah,sekolah_id' // Corrected validation rule
        ]);

        $pesertadidik = Pesertadidik::findOrFail($peserta_didik_id);
        $pesertadidik->update($validatedData);

        return redirect()->route('pesertadidik.index')->with('success', 'Pesertadidik updated successfully.');
    }

    public function destroy($peserta_didik_id)
    {
        $pesertadidik = Pesertadidik::findOrFail($peserta_didik_id);
        $pesertadidik->delete();

        return redirect()->route('pesertadidik.index')->with('success', 'Pesertadidik deleted successfully.');
    }

    public function import(Request $request, Sekolah $sekolah)
    {
        // Validasi file yang diunggah
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv',
        ]);

        // Proses impor dengan Laravel Excel
        Excel::import(new PesertaDidikImport($sekolah->sekolah_id), $request->file('file'));

        return redirect()->route('admin.dashboard', $sekolah->sekolah_id)->with('success', 'Peserta Didik berhasil diimpor');
    }

}
