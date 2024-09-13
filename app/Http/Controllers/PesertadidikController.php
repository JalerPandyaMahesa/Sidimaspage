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
            'nisn' => 'required|string|max:10',
            'nik' => 'required|string|max:16',
            'no_kk' => 'required|string|max:16',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'date',
            'jenis_kelamin' => 'required|string|max:1',
            'agama' => 'required|string|max:50',
            'nama_ayah' => 'required|string|max:255',
            'nik_ayah' => 'required|string|max:16',
            'tahun_lahir_ayah' => '',
            'jenjang_pendidikan_ayah_keterangan' => 'nullable|string|max:255',
            'pekerjaan_ayah' => 'nullable|string|max:255',
            'nama_ibu_kandung' => 'required|string|max:255',
            'nik_ibu' => 'required|string|max:16',
            'tahun_lahir_ibu' => '',
            'jenjang_pendidikan_ibu_keterangan' => 'nullable|string|max:255',
            'pekerjaan_ibu' => 'nullable|string|max:255',
            'semester_id' => 'required|integer',
            'rombongan_belajar_id' => 'required|integer',
            'anggota_rombel_id' => 'required|integer',
            'agama_id' => 'required|integer',
            'alamat_jalan' => 'required|string|max:255',
            'rt' => 'required|string|max:5',
            'rw' => 'required|string|max:5',
            'nama_dusun' => 'nullable|string|max:255',
            'desa_kelurahan' => 'nullable|string|max:255',
            'kode_wilayah' => 'required|string|max:10',
            'kode_kecamatan' => 'required|string|max:10',
            'kecamatan' => 'required|string|max:255',
            'kode_kabupaten' => 'required|string|max:10',
            'kabupaten' => 'required|string|max:255',
            'kode_provinsi' => 'required|string|max:10',
            'provinsi' => 'required|string|max:255',
            'kode_pos' => 'nullable|string|max:5',
            'lintang' => '',
            'bujur' => '',
            'nama_wali' => 'nullable|string|max:255',
            'tahun_lahir_wali' => '' ,
            'nipd' => 'nullable|string|max:20',
            'tanggal_masuk_sekolah' => 'required|date',
            'kebutuhan_khusus_id' => 'nullable|integer',
            'jenis_tinggal_id' => 'nullable|integer',
            'alat_transportasi_id' => 'nullable|integer',
            'anak_keberapa' => 'nullable|integer',
            'nik_wali' => 'nullable|string|max:16',
            'nomor_telepon_rumah' => 'nullable|string|max:15',
            'nomor_telepon_seluler' => 'nullable|string|max:15',
            'email' => 'nullable|string|email|max:255',
            'reg_akta_lahir' => 'nullable|string|max:50',
            'jenjang_pendidikan_ayah' => 'nullable|string|max:50',
            'pekerjaan_id_ayah' => 'nullable|integer',
            'penghasilan_id_ayah' => 'nullable|integer',
            'penghasilan_ayah' => 'nullable|string|max:50',
            'kebutuhan_khusus_id_ayah' => 'nullable|integer',
            'jenjang_pendidikan_ibu' => 'nullable|string|max:50',
            'pekerjaan_id_ibu' => 'nullable|integer',
            'penghasilan_id_ibu' => 'nullable|integer',
            'penghasilan_ibu' => 'nullable|string|max:50',
            'kebutuhan_khusus_id_ibu' => 'nullable|integer',
            'jenjang_pendidikan_wali' => 'nullable|string|max:50',
            'pekerjaan_id_wali' => 'nullable|integer',
            'penghasilan_id_wali' => 'nullable|integer',
            'id_bank' => 'nullable|integer',
            'bank' => 'nullable|string|max:50',
            'nama_kcp' => 'nullable|string|max:255',
            'rekening_bank' => 'nullable|string|max:50',
            'rekening_atas_nama' => 'nullable|string|max:255',
            'jenis_keluar_id' => 'nullable|integer',
            'jenis_keluar' => 'nullable|string|max:50',
            'tanggal_keluar' => 'nullable|date',
            'keterangan_registrasi' => 'nullable|string|max:255',
            'no_peserta_ujian' => 'nullable|string|max:25',
            'no_seri_ijazah' => 'nullable|string|max:25',
            'a_pernah_paud' => '',
            'a_pernah_tk' => '',
            'sekolah_asal' => 'nullable|string|max:255',
            'jenis_pendaftaran_rombel' => 'nullable|string|max:50',
            'jenis_pendaftaran_rombel_keterangan' => 'nullable|string|max:255',
            'tingkat_pendidikan_id' => 'nullable|integer',
            'jurusan_sp_id' => 'nullable|integer',
            'nama_jurusan' => 'nullable|string|max:255',
            'jenis_rombel' => 'nullable|string|max:50',
            'jenis_rombel_keterangan' => 'nullable|string|max:255',
            'nama_rombel' => 'nullable|string|max:255',
            'moving_class' => '',
            'sks' => 'nullable|integer',
            'registrasi_id' => 'nullable|integer',
            'id_hobby' => 'nullable|integer',
            'id_cita' => 'nullable|integer',
            'tinggi_badan' => '',
            'berat_badan' => '',
            'lingkar_kepala' => '',
            'jarak_rumah_ke_sekolah' => '',
            'waktu_tempuh_ke_sekolah' => '',
            'jumlah_saudara_kandung' => 'nullable|integer',

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

    public function import(Request $request, $sekolah_id)
    {
        // Validasi file yang diunggah
        $request->validate([
            'file' => 'required|mimes:xlsx,xls',
        ]);

        // Lakukan proses import
        Excel::import(new PesertaDidikImport($sekolah_id), $request->file('file'));

        // Redirect atau berikan response setelah import
        return redirect()->route('admin.dashboard', $sekolah_id)->with('success', 'Data Peserta Didik berhasil diimpor.');
    }


}
