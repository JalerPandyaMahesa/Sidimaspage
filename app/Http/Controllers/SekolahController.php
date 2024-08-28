<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function index(Request $request)
{
    $bentukPendidikan = $request->input('bentuk_pendidikan');
    $kecamatan = $request->input('kecamatan');

    $query = Sekolah::query();

    if ($bentukPendidikan) {
        $query->where('bentuk_pendidikan', $bentukPendidikan);
    }

    if ($kecamatan) {
        $query->where('kecamatan', $kecamatan);
    }

    $sekolah = $query->get();

    $kecamatans = [
        'Kec. Ajibarang', 'Kec. Banyumas', 'Kec. Baturaden', 'Kec. Cilongok',
        'Kec. Gumelar', 'Kec. Jatilawang', 'Kec. Kalibagor', 'Kec. Karanglewas',
        'Kec. Kebasen', 'Kec. Kedung Banteng', 'Kec. Kembaran', 'Kec. Kemranjen',
        'Kec. Lumbir', 'Kec. Patikraja', 'Kec. Pekuncen', 'Kec. Purwojati',
        'Kec. Purwokerto Barat', 'Kec. Purwokerto Selatan', 'Kec. Purwokerto Timur',
        'Kec. Purwokerto Utara', 'Kec. Rawalo', 'Kec. Sokaraja', 'Kec. Somagede',
        'Kec. Sumbang', 'Kec. Sumpiuh', 'Kec. Tambak', 'Kec. Wangon'
    ];

    $bentukPendidikan = [
        (object) [
            'bentuk_pendidikan' => 'PAUD & DIKMAS',
            'jumlah' => Sekolah::whereIn('bentuk_pendidikan', ['TK', 'SPS'])->count(),
        ],
        (object) [
            'bentuk_pendidikan' => 'SD',
            'jumlah' => Sekolah::whereIn('bentuk_pendidikan', ['SD', 'MI'])->count(),
        ],
        (object) [
            'bentuk_pendidikan' => 'SMP',
            'jumlah' => Sekolah::whereIn('bentuk_pendidikan', ['SMP', 'MA', 'MTs'])->count(),
        ],
    ];

    // Menghitung jumlah sekolah untuk TK, SD, dan SMP
    $totalTk = Sekolah::whereIn('bentuk_pendidikan', ['TK', 'SPS'])->count();
    $totalSd = Sekolah::whereIn('bentuk_pendidikan', ['SD', 'MI'])->count();
    $totalSmp = Sekolah::whereIn('bentuk_pendidikan', ['SMP', 'MA', 'MTs'])->count();

    return view('sekolah.index', compact('sekolah', 'bentukPendidikan', 'kecamatan', 'kecamatans',
     'totalTk', 'totalSd', 'totalSmp'
    ));
}
public function pilihBentukPendidikan()
{
    // Menghitung jumlah sekolah yang digabungkan untuk setiap kategori
    $bentukPendidikan = [
        (object) [
            'bentuk_pendidikan' => 'PAUD & DIKMAS',
            'jumlah' => Sekolah::whereIn('bentuk_pendidikan', ['TK', 'SPS'])->count(),
        ],
        (object) [
            'bentuk_pendidikan' => 'SD',
            'jumlah' => Sekolah::whereIn('bentuk_pendidikan', ['SD', 'MI'])->count(),
        ],
        (object) [
            'bentuk_pendidikan' => 'SMP',
            'jumlah' => Sekolah::whereIn('bentuk_pendidikan', ['SMP', 'MA', 'MTs'])->count(),
        ],
    ];

    return view('sekolah.pilih_bentuk_pendidikan', compact('bentukPendidikan'));
}


public function pilihKecamatan(Request $request)
{
    $request->validate(['bentuk_pendidikan' => 'required|string']);

    // Mapping
    $bentukPendidikanMap = [
        'PAUD & DIKMAS' => ['TK', 'SPS'],
        'SD' => ['SD', 'MI'],
        'SMP' => ['SMP', 'MA', 'MTs'],
    ];

    $selectedBentukPendidikan = $bentukPendidikanMap[$request->bentuk_pendidikan] ?? [$request->bentuk_pendidikan];

    // Menghitung jumlah sekolah untuk setiap kecamatan berdasarkan bentuk pendidikan yang digabungkan
    $kecamatan = Sekolah::whereIn('bentuk_pendidikan', $selectedBentukPendidikan)
        ->select('kecamatan')
        ->selectRaw('count(*) as jumlah')
        ->groupBy('kecamatan')
        ->get();

    return view('sekolah.pilih_kecamatan', [
        'bentuk_pendidikan' => $request->bentuk_pendidikan,
        'kecamatan' => $kecamatan
    ]);
}

    public function filterSekolah(Request $request)
{
    $request->validate([
        'bentuk_pendidikan' => 'required|string',
        'kecamatan' => 'required|string',
    ]);

    // Sesuaikan query untuk mencakup berbagai bentuk pendidikan
    $bentukPendidikanMap = [
        'PAUD & DIKMAS' => ['TK', 'SPS'],
        'SD' => ['SD', 'MI'],
        'SMP' => ['SMP', 'MA', 'MTs'],
    ];

    $bentukPendidikan = $request->input('bentuk_pendidikan');
    $kecamatan = $request->input('kecamatan');

    // Cek apakah bentuk_pendidikan termasuk dalam map
    $pendidikanFilter = $bentukPendidikanMap[$bentukPendidikan] ?? [$bentukPendidikan];

    // Query untuk mengambil sekolah berdasarkan bentuk_pendidikan dan kecamatan
    $sekolah = Sekolah::whereIn('bentuk_pendidikan', $pendidikanFilter)
        ->where('kecamatan', $kecamatan)
        ->get();

    return view('sekolah.filter', [
        'sekolah' => $sekolah,
        'filter' => $bentukPendidikan . ' di ' . $kecamatan
    ]);
}

    public function show($sekolah_id)
    {
        $sekolah = Sekolah::findOrFail($sekolah_id);
        return view('sekolah.show', compact('sekolah'));
    }

    public function tk()
    {
        $kecamatan = Sekolah::whereIn('bentuk_pendidikan', ['TK', 'SPS'])
            ->select('kecamatan')
            ->selectRaw('count(*) as jumlah')
            ->groupBy('kecamatan')
            ->get();
    
        $totalTk = Sekolah::whereIn('bentuk_pendidikan', ['TK', 'SPS'])->count();
    
        return view('sekolah.pilih_kecamatan', [
            'bentuk_pendidikan' => 'PAUD & DIKMAS',
            'kecamatan' => $kecamatan,
            'totalTk' => $totalTk,
        ]);
    }
    
    public function sd()
    {
        $kecamatan = Sekolah::whereIn('bentuk_pendidikan', ['SD', 'MI'])
            ->select('kecamatan')
            ->selectRaw('count(*) as jumlah')
            ->groupBy('kecamatan')
            ->get();
    
        $totalSd = Sekolah::whereIn('bentuk_pendidikan', ['SD', 'MI'])->count();
    
        return view('sekolah.pilih_kecamatan', [
            'bentuk_pendidikan' => 'SD',
            'kecamatan' => $kecamatan,
            'total' => $totalSd,
        ]);
    }
    
    public function smp()
    {
        $kecamatan = Sekolah::whereIn('bentuk_pendidikan', ['SMP', 'MA', 'MTs'])
            ->select('kecamatan')
            ->selectRaw('count(*) as jumlah')
            ->groupBy('kecamatan')
            ->get();
    
        $totalSmp = Sekolah::whereIn('bentuk_pendidikan', ['SMP', 'MA', 'MTs'])->count();
    
        return view('sekolah.pilih_kecamatan', [
            'bentuk_pendidikan' => 'SMP',
            'kecamatan' => $kecamatan,
            'total' => $totalSmp,
        ]);
    }
    

    

    public function create()
    {
        return view('sekolah.create');
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

    return redirect()->route('sekolah.index')->with('success', 'Sekolah created successfully.');
}
    

    public function edit($sekolah_id)
    {
        $sekolah = Sekolah::findOrFail($sekolah_id);

        return view('sekolah.edit', compact('sekolah'));
    }

    public function update(Request $request, $sekolah_id)
{
    $validatedData = $request->validate([
        'npsn' => 'required|string|max:255',
        'nama' => 'required|string|max:255',
        'kabupaten' => 'required|string|max:255',
        'kecamatan' => 'required|string|max:255',
        'bentuk_pendidikan' => 'required|string|max:255',
    ]);

    $sekolah = Sekolah::findOrFail($sekolah_id);
    $sekolah->update($validatedData);

    return redirect()->route('sekolah.index')->with('success', 'Sekolah updated successfully.');
}


    public function destroy($sekolah_id)
    {
        $sekolah = Sekolah::findOrFail($sekolah_id);
        $sekolah->delete();

        return redirect()->route('sekolah.index');
    }

    
}