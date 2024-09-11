<?php

namespace App\Imports;

use App\Models\Ptk;
use Maatwebsite\Excel\Concerns\ToModel;

class PtkImport implements ToModel
{
    protected $sekolah_id;

    // Konstruktor untuk menerima sekolah_id
    public function __construct($sekolah_id)
    {
        $this->sekolah_id = $sekolah_id;
    }

    public function model(array $row)
    {
        return new Ptk([
            'sekolah_id' => $this->sekolah_id, // Foreign key diisi otomatis
            'nama' => $row[0],                 // Kolom nama guru
            'nip' => $row[1],                  // Kolom NIP
            'jabatan' => $row[2],              // Kolom jabatan
            // Tambahkan kolom lain sesuai dengan struktur tabel PTK
        ]);
    }
}