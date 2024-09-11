<?php

namespace App\Imports;

use App\Models\PesertaDidik;
use Maatwebsite\Excel\Concerns\ToModel;

class PesertaDidikImport implements ToModel
{
    protected $sekolah_id;

    // Terima sekolah_id dari controller
    public function __construct($sekolah_id)
    {
        $this->sekolah_id = $sekolah_id;
    }

    // Map data dari setiap baris Excel ke model PesertaDidik
    public function model(array $row)
    {
        return new PesertaDidik([
            'nama' => $row[0], // Pastikan sesuai dengan urutan kolom di file Excel
            'nisn' => $row[1],
            'nik' => $row[2],
            'no_kk' => $row[3],
            'tempat_lahir' => $row[4],
            'sekolah_id' => $this->sekolah_id, // Otomatis menggunakan sekolah yang sedang dilihat
        ]);
    }
}