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
        'tanggal_lahir' => $tanggal_lahir,
        'jenis_kelamin' => $row['jenis_kelamin'],
        'agama' => $row['agama'],
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

}
