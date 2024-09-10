<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use App\Models\Pesertadidik;
use App\Models\Ptk;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\SekolahImport;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $totalTk = Sekolah::whereIn('bentuk_pendidikan', ['TK', 'SPS', 'TPA', 'RA', 'KB'])->count();
        $totalSd = Sekolah::whereIn('bentuk_pendidikan', ['SD', 'MI', 'SPK SD'])->count();
        $totalSmp = Sekolah::whereIn('bentuk_pendidikan', ['SMP', 'MTS', 'SPK SMP'])->count();
        $totalPgtk = Sekolah::withCount('ptk')->get();
        $totalPgtk = Ptk::count();

        return view('admin.dashboard', compact('totalTk', 'totalSd', 'totalSmp', 'totalPgtk'));
    }

    public function viewPaud()
    {
        $sekolah = Sekolah::whereIn('bentuk_pendidikan', ['TK', 'SPS', 'TPA', 'RA', 'KB'])
            ->withCount('pesertadidik')
            ->get();

        return view('admin.viewPaud', compact('sekolah'));
    }

    public function viewSd()
    {
        $sekolah = Sekolah::whereIn('bentuk_pendidikan', ['SD', 'MI', 'SPK SD'])
            ->withCount('pesertadidik')
            ->get();

        return view('admin.viewSd', compact('sekolah'));
    }

    public function viewSmp()
    {
        $sekolah = Sekolah::whereIn('bentuk_pendidikan', ['SMP', 'MTS', 'SPK SMP'])
            ->withCount('pesertadidik')
            ->get();

        return view('admin.viewSmp', compact('sekolah'));
    }

    public function viewPendidikanMasyarakat()
    {
        $sekolah = Sekolah::whereIn('bentuk_pendidikan', ['PKBM', 'SKB', 'KURSUS', 'SLB'])
            ->withCount('pesertadidik')
            ->get();

        return view('admin.viewPendidikanMasyarakat', compact('sekolah'));
    }

    public function viewPtk()
    {
        $ptk = ptk::with('sekolah')->get();
        return view('admin.viewPgtk', compact('ptk'));
    }

    public function createSekolah()
    {
        return view('admin.addSekolah');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'npsn' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'kabupaten' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'bentuk_pendidikan' => 'required|string|max:255',
            'status_sekolah' => 'required',
            'akreditasi' => 'required|string|max:10',
            'rt' => 'integer|max:30',
            'rw' => 'integer|max:30',
            'nss' => '',
            'alamat_jalan' => '',
            'nama_dusun' => '',
            'kode_wilayah' => '',
            'kode_desa_kelurahan' => '',
            'desa_kelurahan' => '',
            'kode_kecamatan' => '',
            'kode_kabupaten' => '',
            'kode_provinsi' => '',
            'kode_pos' => '',
            'lintang' => '',
            'bujur' => '',
            'nomor_telepon' => 'max:20',
            'nomor_fax' => 'max:20',
            'email' => 'max:60',
            'website' => '',
            'kebutuhan_khusus' => 'max:40',
            'sk_pendirian_sekolah' => 'max:20',
            'tanggal_sk_pendirian' => 'max:80',
            'status_kepemilikan' => 'max:50',
            'yayasan' => 'max:100',
            'sk_izin_operasional' => 'max:80',
            'tanggal_sk_izin_operasional' => '',
            'no_rekening' => 'max:20',
            'nama_bank' => 'max:50',
            'cabang_kcp_unit' => 'max:60',
            'rekening_atas_nama' => 'max:50',
            'mbs' => 'max:30',
            'npwp' => '',
            'nm_wp' => 'max:200',
            'keaktifan' => 'max:5',
            'flag' => '',
            'wilayah_terpencil' => 'max:5',
            'wilayah_perbatasan' => 'max:5',
            'wilayah_transmigrasi' => 'max:5',
            'wilayah_adat_terpencil' => 'max:5',
            'wilayah_bencana_alam' => 'max:5',
            'wilayah_bencana_sosial' => 'max:5',
            'partisipasi_bos' => 'max:5',
            'waktu_penyelenggaraan' => 'max:50',
            'sumber_listrik' => 'max:50',
            'sertifikasi_iso' => 'max:50',
            'akses_internet' => 'max:50',
            'akses_internet_2' => 'max:50',
            'luas_tanah_milik' => 'max:30',
            'luas_tanah_bukan_milik' => 'max:30',
            'kode_registrasi' => 'max:128',
            'daya_listrik' => 'max:30',
            'kontinuitas_listrik' => 'max:5',
            'jarak_listrik' => 'max:9',

        ]);

        Sekolah::create($validatedData);

        return redirect()->route('admin.dashboard')->with('success', 'Sekolah created successfully.');
    }

    public function editSekolah($sekolah_id)
    {
        $sekolah = Sekolah::findOrFail($sekolah_id);

        return view('admin.editSekolah', compact('sekolah'));
    }

    public function updateSekolah(Request $request, $sekolah_id)
    {
        $validatedData = $request->validate([
            'npsn' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'kabupaten' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'bentuk_pendidikan' => 'required|string|max:255',
            'status_sekolah' => 'required',
            'akreditasi' => 'required|string|max:10',
            'rt' => 'integer|max:30',
            'rw' => 'integer|max:30',
            'nss' => '',
            'alamat_jalan' => '',
            'nama_dusun' => '',
            'kode_wilayah' => '',
            'kode_desa_kelurahan' => '',
            'desa_kelurahan' => '',
            'kode_kecamatan' => '',
            'kode_kabupaten' => '',
            'kode_provinsi' => '',
            'kode_pos' => '',
            'lintang' => '',
            'bujur' => '',
            'nomor_telepon' => 'max:20',
            'nomor_fax' => 'max:20',
            'email' => 'max:60',
            'website' => '',
            'kebutuhan_khusus' => 'max:40',
            'sk_pendirian_sekolah' => 'max:20',
            'tanggal_sk_pendirian' => 'max:80',
            'status_kepemilikan' => 'max:50',
            'yayasan' => 'max:100',
            'sk_izin_operasional' => 'max:80',
            'tanggal_sk_izin_operasional' => '',
            'no_rekening' => 'max:20',
            'nama_bank' => 'max:50',
            'cabang_kcp_unit' => 'max:60',
            'rekening_atas_nama' => 'max:50',
            'mbs' => 'max:30',
            'npwp' => '',
            'nm_wp' => 'max:200',
            'keaktifan' => 'max:5',
            'flag' => '',
            'wilayah_terpencil' => 'max:5',
            'wilayah_perbatasan' => 'max:5',
            'wilayah_transmigrasi' => 'max:5',
            'wilayah_adat_terpencil' => 'max:5',
            'wilayah_bencana_alam' => 'max:5',
            'wilayah_bencana_sosial' => 'max:5',
            'partisipasi_bos' => 'max:5',
            'waktu_penyelenggaraan' => 'max:50',
            'sumber_listrik' => 'max:50',
            'sertifikasi_iso' => 'max:50',
            'akses_internet' => 'max:50',
            'akses_internet_2' => 'max:50',
            'luas_tanah_milik' => 'max:30',
            'luas_tanah_bukan_milik' => 'max:30',
            'kode_registrasi' => 'max:128',
            'daya_listrik' => 'max:30',
            'kontinuitas_listrik' => 'max:5',
            'jarak_listrik' => 'max:9',
        ]);

        $sekolah = Sekolah::findOrFail($sekolah_id);
        $sekolah->updateSekolah($validatedData);

        return redirect()->route('admin.dashboard')->with('success', 'Sekolah updated successfully.');
    }

    public function showPesertadidik($sekolah_id, $peserta_didik_id)
    {
        $pesertadidik = Pesertadidik::with('sekolah')->findOrFail($peserta_didik_id);
        return view('admin.showPesertadidik', compact('pesertadidik'));
    }


    public function showSekolah($sekolah_id)
    {
        $sekolah = Sekolah::findOrFail($sekolah_id);
        return view('admin.showSekolah', compact('sekolah'));
    }

    public function destroySekolah($sekolah_id)
    {
        $sekolah = Sekolah::findOrFail($sekolah_id);
        $sekolah->delete();

        return redirect()->route('admin.dashboard');
    }

    public function importExcel(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xls,xlsx'
        ]);
    
        Excel::import(new SekolahImport, $request->file('file'));
    
        return redirect()->back()->with('success', 'Data sekolah berhasil diimpor!');
    }

}
