<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Sekolah extends Model
{
    protected $table = 'sekolah'; // Explicitly set the table name

    protected $primaryKey = 'sekolah_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }

    protected $fillable = [
        'npsn','nama', 'kabupaten', 'kecamatan', 'provinsi', 'bentuk_pendidikan', 'status_sekolah', 'akreditasi', 'rt', 'rw', 'nss', 'alamat_jalan'
        , 'nama_dusun', 'kode_wilayah', 'kode_desa_kelurahan', 'desa_kelurahan', 'kode_kecamatan', 'kode_kabupaten', 'kode_provinsi', 'kode_pos', 'lintang', 'bujur',
         'nomor_telepon', 'nomor_fax', 'email', 'website', 'kebutuhan_khusus', 'sk_pendirian_sekolah', 'tanggal_sk_pendirian', 'status_kepemilikan', 'yayasan',
         'sk_izin_operasional', 'tanggal_sk_izin_operasional', 'no_rekening', 'nama_bank', 'cabang_kcp_unit', 'rekening_atas_nama', 'mbs', 'npwp', 'nm_wp', 'keaktifan',
         'flag', 'wilayah_terpencil', 'wilayah_perbatasan', 'wilayah_transmigrasi', 'wilayah_bencana_alam', 'wilayah_bencana_sosial', 'partisipasi_bos',
         'waktu_penyelenggaraan', 'sumber_listrik', 'sertifikasi_iso', 'akses_internet', 'akses_internet_2', 'luas_tanah_milik', 'luas_tanah_bukan_milik', 'kode_registrasi',
         'daya_listrik', 'kontinuitas_listrik', 'jarak_listrik'
    ];

    public $timestamps = false; // Disable timestamps if you don't have created_at and updated_at columns

    public function pesertadidik()
    {
        return $this->hasMany(pesertadidik::class, 'sekolah_id');
    }

    public function ptk()
    {
        return $this->hasMany(ptk::class, 'sekolah_id');
    }
}
