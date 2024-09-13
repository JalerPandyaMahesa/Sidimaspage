<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sekolah;
use App\Models\ptk;
use App\Imports\PtkImport;
use Maatwebsite\Excel\Facades\Excel;

class PtkController extends Controller
{
    public function index()
    {
        $ptk = ptk::with('sekolah')->get();
        return view('ptk.index', compact('ptk'));
    }

    public function show($ptk_id)
    {
        $ptk = ptk::with('sekolah')->findOrFail($ptk_id);
        return view('ptk.show', compact('ptk'));
    }

    public function create($sekolah_id = null)
    {
        $sekolah = Sekolah::all(); // Fetch all sekolah records
        return view('ptk.create', compact('sekolah', 'sekolah_id'));
    }
    

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'sekolah_id' => 'required|exists:sekolah,sekolah_id',
            'nama_suami_istri' => '' // Corrected validation rule
        ]);

        ptk::create($validatedData);

          return redirect()->route('admin.showSekolah', ['sekolah_id' => $request->input('sekolah_id')])
                     ->with('success', 'Peserta didik created successfully.');
    }

    public function edit($ptk_id)
    {
        $ptk = ptk::findOrFail($ptk_id);
        $sekolah = Sekolah::all(); // Fetch all sekolah records

        return view('ptk.edit', compact('ptk', 'sekolah'));
    }

    public function update(Request $request, $ptk_id)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'sekolah_id' => 'required|exists:sekolah,sekolah_id' // Corrected validation rule
        ]);

        $ptk = ptk::findOrFail($ptk_id);
        $ptk->update($validatedData);

        return redirect()->route('ptk.index')->with('success', 'ptk updated successfully.');
    }

    public function destroy($ptk_id)
    {
        $ptk = ptk::findOrFail($ptk_id);
        $ptk->delete();

        return redirect()->route('ptk.index')->with('success', 'ptk deleted successfully.');
    }

    public function import(Request $request, $sekolah_id)
    {
        // Validasi file
        $request->validate([
            'file' => 'required|mimes:xls,xlsx',
        ]);

        // Import PTK dari Excel
        Excel::import(new PtkImport($sekolah_id), $request->file('file'));

        // Redirect kembali ke halaman sekolah dengan pesan sukses
        return redirect()->route('admin.dashboard', $sekolah_id)->with('success', 'Data PTK berhasil diimpor!');
    }

}

