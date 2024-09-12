<?php
namespace App\Imports;

use App\Models\Sekolah;
use Maatwebsite\Excel\Concerns\ToModel;


class SekolahImport implements ToModel
{
    public function model(array $row)
    {
        return new Sekolah([
            'nama' => $row[1],
            'npsn' => $row[2],
            'bentuk_pendidikan' => $row[3],
            'provinsi' => $row[4],
            'kabupaten' => $row[5],
            'kecamatan' => $row[6],
            'akreditasi' => $row[7],
            // 'rt' => $row[8],
            // 'rw' => $row[9],
            // 'nss' => $row[10],
            // 'alamat_jalan' => $row[11],
            // 'nama_dusun' => $row[12],
            // 'kode_wilayah' => $row[13],
            // 'kode_desa_kelurahan' => $row[14],
            // 'desa_kelurahan' => $row[15],
            // 'kode_kecamatan' => $row[16],
            // 'kode_kabupaten' => $row[17],
            // 'kode_provinsi' => $row[18],
            // 'kode_pos' => $row[19],
            // 'lintang' => $row[20],
            // 'bujur' => $row[21],
            // 'nomor_telepon' => $row[22],
            // 'nomor_fax' => $row[23],
            // 'email' => $row[24],
            // 'website' => $row[25],
            // 'kebutuhan_khusus' => $row[26],
            // 'sk_pendirian_sekolah' => $row[27],
            // 'tanggal_sk_pendirian' => $row[28],
            // 'status_kepemilikan' => $row[29],
            // 'yayasan' => $row[30],
            // 'sk_izin_operasional' => $row[31],
            // 'tanggal_sk_izin_operasional' => $row[32],
            // 'no_rekening' => $row[33],
            // 'nama_bank' => $row[34],
            // 'cabang_kcp_unit' => $row[35],
            // 'rekening_atas_nama' => $row[36],
            // 'mbs' => $row[37],
            // 'npwp' => $row[38],
            // 'nm_wp' => $row[39],
            // 'keaktifan' => $row[40],
            // 'flag' => $row[41],
            // 'wilayah_terpencil' => $row[42],
            // 'wilayah_perbatasan' => $row[43],
            // 'wilayah_transmigrasi' => $row[44],
            // 'wilayah_bencana_alam' => $row[45],
            // 'wilayah_bencana_sosial' => $row[46],
            // 'partisipasi_bos' => $row[47],
            // 'waktu_penyelenggaraan' => $row[48],
            // 'sumber_listrik' => $row[49],
            // 'sertifikasi_iso' => $row[50],
            // 'akses_internet' => $row[51],
            // 'akses_internet_2' => $row[52],
            // 'luas_tanah_milik' => $row[53],
            // 'luas_tanah_bukan_milik' => $row[54],
            // 'kode_registrasi' => $row[55],
            // 'daya_listrik' => $row[56],
            // 'kontinuitas_listrik' => $row[57],
            // 'jarak_listrik' => $row[58],
        ]);
    }
}