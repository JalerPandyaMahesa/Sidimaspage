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
            'tanggal_lahir' => $tanggal_lahir,
            'nip' => $row['nip'],
            'status_kepegawaian' => $row['status_kepegawaian'],
            'jenis_ptk' => $row['jenis_ptk'],
            'agama' => $row['agama'],
            'alamat_jalan' => $row['alamat_jalan'],
            'rt' => $row['rt'],
            'rw' => $row['rw'],
            'nama_dusun' => $row['nama_dusun'],
            'desa_kelurahan' => isset($row['desa_kelurahan']) ? $row['desa_kelurahan'] : null,
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
            'nama_suami_istri' => isset($row['nama_suami_istri']) ? $row['nama_suami_istri'] : null,
            'nip_suami_istri' => isset($row['nip_suami_istri']) ? $row['nip_suami_istri'] : null,
            'pekerjaan_suami_istri' => isset($row['pekerjaan_suami_istri']) ? $row['pekerjaan_suami_istri'] : null,
            'tmt_pns' => isset($row['tmt_pns']) ? $this->formatDate($row['tmt_pns']) : null,
            'sudah_lisensi_kepala_sekolah' => isset($row['sudah_lisensi_kepala_sekolah']) ? $row['sudah_lisensi_kepala_sekolah'] : null,
            'pernah_diklat_kepengawasan' => isset($row['pernah_diklat_kepengawasan']) ? $row['pernah_diklat_kepengawasan'] : null,
            'keahlian_braille' => isset($row['keahlian_braille']) ? $row['keahlian_braille'] : null,
            'keahlian_bahasa_isyarat' => isset($row['keahlian_bahasa_isyarat']) ? $row['keahlian_bahasa_isyarat'] : null,
            'npwp' => isset($row['npwp']) ? $row['npwp'] : null,
            'nama_wajib_pajak' => isset($row['nama_wajib_pajak']) ? $row['nama_wajib_pajak'] : null,
            'kewarganegaraan' => isset($row['kewarganegaraan']) ? $row['kewarganegaraan'] : null,
            'bank' => isset($row['bank']) ? $row['bank'] : null,
            'nomor_rekening_bank' => isset($row['nomor_rekening_bank']) ? $row['nomor_rekening_bank'] : null,
            'rekening_atas_nama' => isset($row['rekening_atas_nama']) ? $row['rekening_atas_nama'] : null,
            'nik' => isset($row['nik']) ? $row['nik'] : null,
            'no_kk' => isset($row['no_kk']) ? $row['no_kk'] : null,
            'karpeg' => isset($row['karpeg']) ? $row['karpeg'] : null,
            'karis_karsu' => isset($row['karis_karsu']) ? $row['karis_karsu'] : null,
            'lintang' => isset($row['lintang']) ? $row['lintang'] : null,
            'bujur' => isset($row['bujur']) ? $row['bujur'] : null,
            'nuks' => isset($row['nuks']) ? $row['nuks'] : null,

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
