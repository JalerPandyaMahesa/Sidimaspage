<?php

namespace App\Imports;

use App\Models\Ptk;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Carbon\Carbon;

class PtkImport implements ToModel, WithHeadingRow
{
    protected $sekolah_id;

    public function __construct($sekolah_id)
    {
        $this->sekolah_id = $sekolah_id;
    }

    public function model(array $row)
    {
        // Use the column name as the array key (based on Excel headings)
        $tanggal_lahir = $this->formatDate($row['tanggal_lahir']);

        return new Ptk([
            'sekolah_id' => $this->sekolah_id,
            'nama' => $row['nama'],
            'nuptk' => $row['nuptk'],
            'jk' => $row['jk'],
            'tempat_lahir' => $row['tempat_lahir'],
            'tanggal_lahir' => $this->formatDate($row['tanggal_lahir']),
            'nip' => $row['nip'],
            'status_kepegawaian' => $row['status_kepegawaian'],
            'jenis_ptk' => $row['jenis_ptk'],
            'agama' => $row['agama'],
            'alamat_jalan' => $row['alamat_jalan'],
            'rt' => is_numeric($row['rt']) ? $row['rt'] : null,
            'rw' => is_numeric($row['rw']) ? $row['rw'] : null,
            'nama_dusun' => $row['nama_dusun'],
            // 'desa_kelurahan' => $this->getValue['desa_kelurahan'],
            'kecamatan' => $row['kecamatan'],
            'kode_pos' => $row['kode_pos'],
            'telepon' => $row['telepon'],
            'hp' => $row['hp'],
            'email' => $row['email'],
            'tugas_tambahan' => $row['tugas_tambahan'],
            'sk_cpns' => $row['sk_cpns'],
            'tanggal_cpns' => $this->formatDate($row['tanggal_cpns']),
            'sk_pengangkatan' => $row['sk_pengangkatan'],
            'tmt_pengangkatan' => $this->formatDate($row['tmt_pengangkatan']),
            'lembaga_pengangkatan' => $row['lembaga_pengangkatan'],
            'pangkat_golongan' => $row['pangkat_golongan'],
            'sumber_gaji' => $row['sumber_gaji'],
            'nama_ibu_kandung' => $row['nama_ibu_kandung'],
            'status_perkawinan' => $row['status_perkawinan'],
        //     'nama_suami_istri' => $row['nama_suami_istri'],
        //     'nip_suami_istri' => $row['nip_suami_istri'],
        // 'pekerjaan_suami_istri' => $row['pekerjaan_suami_istri'],
        'tmt_pns' => $this->formatDate($row['tmt_pns']),
        'sudah_lisensi_kepala_sekolah' => $row['sudah_lisensi_kepala_sekolah'],
        'pernah_diklat_kepengawasan' => $row['pernah_diklat_kepengawasan'],
        'keahlian_braille' => $row['keahlian_braille'],
        'keahlian_bahasa_isyarat' => $row['keahlian_bahasa_isyarat'],
        'npwp' => $row['npwp'],
        'nama_wajib_pajak' => $row['nama_wajib_pajak'],
        'kewarganegaraan' => $row['kewarganegaraan'],
        'bank' => $row['bank'],
        'nomor_rekening_bank' => $row['nomor_rekening_bank'],
        'rekening_atas_nama' => $row['rekening_atas_nama'],
        'nik' => $row['nik'],
        'no_kk' => $row['no_kk'],
        'karpeg' => $row['karpeg'],
        // 'karis_karsu' => $row['karis_karsu'],
        'lintang' => $row['lintang'],
        'bujur' => $row['bujur'],
        'nuks' => $row['nuks'],

        ]);
    }

    private function formatDate($date)
    {
        try {
            if (Carbon::hasFormat($date, 'Y-m-d')) {
                return $date;
            }
            return Carbon::createFromFormat('d/m/Y', $date)->format('Y-m-d');
        } catch (\Exception $e) {
            return null;
        }
    }
}
