<?php

namespace App\Imports;

use App\Models\PesertaDidik;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class PesertaDidikImport implements ToModel, WithHeadingRow
{
    protected $sekolah_id;

    public function __construct($sekolah_id)
    {
        $this->sekolah_id = $sekolah_id;
    }

    public function model(array $row)
{
    $tanggal_lahir = $this->formatDate($row['tanggal_lahir']);
    // Buat instance model Pesertadidik dan return untuk menyimpannya
    return new Pesertadidik([
        'sekolah_id' => $this->sekolah_id,
        'nama' => $row['nama'],
        'nisn' => $row['nisn'],
        'nik' => $row['nik'],
        'no_kk' => $row['no_kk'],
        'tempat_lahir' => $row['tempat_lahir'],
         'tanggal_lahir' => $this->formatDate($row['tanggal_lahir']),
        'jenis_kelamin' => $row['jenis_kelamin'],
        'agama' => $row['agama'],
        'nama_ayah' => $row['nama_ayah'],
        'nik_ayah' => $row['nik_ayah'],
        'tahun_lahir_ayah' => $row['tahun_lahir_ayah'],
        'jenjang_pendidikan_ayah_keterangan' => $row['jenjang_pendidikan_ayah_keterangan'],
        'pekerjaan_ayah' => $row['pekerjaan_ayah'],
        'nama_ibu_kandung' => $row['nama_ibu_kandung'],
        'nik_ibu' => $row['nik_ibu'],
        'tahun_lahir_ibu' => $row['tahun_lahir_ibu'],
        'jenjang_pendidikan_ibu_keterangan' => $row['jenjang_pendidikan_ibu_keterangan'],
        'pekerjaan_ibu' => $row['pekerjaan_ibu'],
        // 'semester_id' => $row['semester_id'],
        // 'rombongan_belajar_id' => $row['rombongan_belajar_id'],
        // 'anggota_rombel_id' => $row['anggota_rombel_id'],
        // 'agama_id' => $row['agama_id'],
        // 'alamat_jalan' => $row['alamat_jalan'],
        'rt' => $row['rt'],
        'rw' => $row['rw'],
        'nama_dusun' => $row['nama_dusun'],
        'desa_kelurahan' => $row['desa_kelurahan'],
        'kode_wilayah' => $row['kode_wilayah'],
        'kode_kecamatan' => $row['kode_kecamatan'],
        'kecamatan' => $row['kecamatan'],
        'kode_kabupaten' => $row['kode_kabupaten'],
        'kabupaten' => $row['kabupaten'],
        'kode_provinsi' => $row['kode_provinsi'],
        'provinsi' => $row['provinsi'],
        'kode_pos' => $row['kode_pos'],
        'lintang' => $row['lintang'],
        'bujur' => $row['bujur'],
        'nama_wali' => $row['nama_wali'],
        'tahun_lahir_wali' => is_numeric($row['tahun_lahir_wali']) ? $row['tahun_lahir_wali'] : null,
        // 'nipd' => $row['nipd'],
        'tanggal_masuk_sekolah' => $this->formatDate($row['tanggal_lahir']),  // Date handling
        // // 'kebutuhan_khusus_id' => $row['kebutuhan_khusus_id'],
        'kebutuhan_khusus' => $row['kebutuhan_khusus'],
        // // 'jenis_tinggal_id' => $row['jenis_tinggal_id'],
        'jenis_tinggal' => $row['jenis_tinggal'],
        // // 'alat_transportasi_id' => $row['alat_transportasi_id'],
        'alat_transportasi' => $row['alat_transportasi'],
        'anak_keberapa' => is_numeric($row['anak_keberapa']) ? $row['anak_keberapa'] : null,
        'nik_wali' => $row['nik_wali'],
        'nomor_telepon_rumah' => $row['nomor_telepon_rumah'],
        'nomor_telepon_seluler' => $row['nomor_telepon_seluler'],
        'email' => $row['email'],
        'reg_akta_lahir' => $row['reg_akta_lahir'],
        'jenjang_pendidikan_ayah' => is_numeric($row['jenjang_pendidikan_ayah']) ? $row['jenjang_pendidikan_ayah'] : null,
        // // 'pekerjaan_id_ayah' => $row['pekerjaan_id_ayah'],
        // // 'penghasilan_id_ayah' => $row['penghasilan_id_ayah'],
        'penghasilan_ayah' => $row['penghasilan_ayah'],
        // // 'kebutuhan_khusus_id_ayah' => $row['kebutuhan_khusus_id_ayah'],
        'kebutuhan_khusus_ayah' => $row['kebutuhan_khusus_ayah'],
        'jenjang_pendidikan_ibu' => is_numeric($row['jenjang_pendidikan_ibu']) ? $row['jenjang_pendidikan_ibu'] : null,
        // 'pekerjaan_id_ibu' => $row['pekerjaan_id_ibu'],
        // // 'penghasilan_id_ibu' => $row['penghasilan_id_ibu'],
        'penghasilan_ibu' => $row['penghasilan_ibu'],
        // // 'kebutuhan_khusus_id_ibu' => $row['kebutuhan_khusus_id_ibu'],
        'kebutuhan_khusus_ibu' => $row['kebutuhan_khusus_ibu'],
        'jenjang_pendidikan_wali' => is_numeric($row['jenjang_pendidikan_wali']) ? $row['jenjang_pendidikan_wali'] : null,
        'jenjang_pendidikan_wali_keterangan' => $row['jenjang_pendidikan_wali_keterangan'],
        // 'pekerjaan_id_wali' => $row['pekerjaan_id_wali'],
        'pekerjaan_wali' => $row['pekerjaan_wali'],
        // // 'penghasilan_id_wali' => $row['penghasilan_id_wali'],
        'penghasilan_wali' => $row['penghasilan_wali'],
        // 'id_bank' => $row['id_bank'],
        'bank' => $row['bank'],
        'nama_kcp' => $row['nama_kcp'],
        'rekening_bank' => $row['rekening_bank'],
        'rekening_atas_nama' => $row['rekening_atas_nama'],
        // 'jenis_keluar_id' => $row['jenis_keluar_id'],
        'jenis_keluar' => $row['jenis_keluar'],
        'tanggal_keluar' =>$this->formatDate($row['tanggal_keluar']),  // Date handling
        'keterangan_registrasi' => $row['keterangan_registrasi'],
        'no_peserta_ujian' => $row['no_peserta_ujian'],
        'no_seri_ijazah' => $row['no_seri_ijazah'],
        'a_pernah_paud' => is_numeric($row['a_pernah_paud']) ? $row['a_pernah_paud'] : null,
        'a_pernah_tk' => is_numeric($row['a_pernah_tk']) ? $row['a_pernah_tk'] : null,
        'sekolah_asal' => $row['sekolah_asal'],
        'jenis_pendaftaran_rombel' => is_numeric($row['jenis_pendaftaran_rombel']) ? $row['jenis_pendaftaran_rombel'] : null,
        'jenis_pendaftaran_rombel_keterangan' => $row['jenis_pendaftaran_rombel_keterangan'],
        // 'tingkat_pendidikan_id' => $row['tingkat_pendidikan_id'],
        'tingkat_pendidikan' => $row['tingkat_pendidikan'],
        // // 'jurusan_sp_id' => $row['jurusan_sp_id'],
        'nama_jurusan' => $row['nama_jurusan'],
        'jenis_rombel' => $row['jenis_rombel'],
        'jenis_rombel_keterangan' => $row['jenis_rombel_keterangan'],
        'nama_rombel' => $row['nama_rombel'],
        'moving_class' => is_numeric($row['moving_class']) ? $row['moving_class'] : null,
        'sks' => $row['sks'],
        // 'registrasi_id' => $row['registrasi_id'],
        // // 'id_hobby' => $row['id_hobby'],
        'hobby' => $row['hobby'],
        // // 'id_cita' => $row['id_cita'],
        'cita' => $row['cita'],
        'tinggi_badan' => is_numeric($row['tinggi_badan']) ? $row['tinggi_badan'] : null,
        'berat_badan' => is_numeric($row['berat_badan']) ? $row['berat_badan'] : null,
        'lingkar_kepala' => is_numeric($row['lingkar_kepala']) ? $row['lingkar_kepala'] : null,
        'jarak_rumah_ke_sekolah' => is_numeric($row['jarak_rumah_ke_sekolah']) ? $row['jarak_rumah_ke_sekolah'] : null,
        'jarak_rumah_ke_sekolah_km' => is_numeric($row['jarak_rumah_ke_sekolah_km']) ? $row['jarak_rumah_ke_sekolah_km'] : null,
        'waktu_tempuh_ke_sekolah' => is_numeric($row['waktu_tempuh_ke_sekolah']) ? $row['waktu_tempuh_ke_sekolah'] : null,
        'menit_tempuh_ke_sekolah' => is_numeric($row['menit_tempuh_ke_sekolah']) ? $row['menit_tempuh_ke_sekolah'] : null,
        'jumlah_saudara_kandung' => is_numeric($row['jumlah_saudara_kandung']) ? $row['jumlah_saudara_kandung'] : null,
    ]);
}

    private function formatDate($date)
    {

        
        try {
            if (is_numeric($date)) {
                return Date::excelToDateTimeObject($date)->format('Y-m-d');
            }
            if (Carbon::hasFormat($date, 'Y-m-d')) {
                return $date;
            }
            return Carbon::createFromFormat('d/m/Y', $date)->format('Y-m-d');
        } catch (\Exception $e) {
            return null;
        }
    }
    public function transformDate($value)
{
    try {
        // Pastikan value tidak NULL atau kosong
        if (is_null($value) || $value == '') {
            return null; // atau kamu bisa kembalikan tanggal default, misalnya: return '1970-01-01';
        }

        // Parsing tanggal jika value valid
        return Carbon::parse($value)->format('Y-m-d');
    } catch (\Exception $e) {
        return null;
    }
}


 

}
