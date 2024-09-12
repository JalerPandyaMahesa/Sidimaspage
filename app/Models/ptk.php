<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ptk extends Model
{
    protected $table = 'ptk'; // Explicitly set the table name

    protected $primaryKey = 'ptk_id'; // Explicitly set the primary key
    public $incrementing = false; // Disable auto-incrementing
    protected $keyType = 'string'; // Set the primary key type to string

    // Define the fillable fields
    protected $fillable = [
        'sekolah_id', 'nama', 'nuptk', 'jk', 'tempat_lahir', 'tanggal_lahir', 
        'nip', 'status_kepegawaian', 'jenis_ptk', 'agama', 'alamat_jalan', 
        'rt', 'rw', 'nama_dusun', 'desa_kelurahan', 'kecamatan', 'kode_pos', 
        'telepon', 'hp', 'email', 'tugas_tambahan', 'sk_cpns', 'tanggal_cpns', 
        'sk_pengangkatan', 'tmt_pengangkatan', 'lembaga_pengangkatan', 
        'pangkat_golongan', 'sumber_gaji', 'nama_ibu_kandung', 'status_perkawinan', 
        'nama_suami_istri', 'nip_suami_istri', 'pekerjaan_suami_istri', 'tmt_pns', 
        'sudah_lisensi_kepala_sekolah', 'pernah_diklat_kepengawasan', 'keahlian_braille', 
        'keahlian_bahasa_isyarat', 'npwp', 'nama_wajib_pajak', 'kewarganegaraan', 
        'bank', 'nomor_rekening_bank', 'rekening_atas_nama', 'nik', 'no_kk', 
        'karpeg', 'karis_karsu', 'lintang', 'bujur', 'nuks' // Include sekolah_id as fillable
    ];

    // Disable timestamps if you don't have created_at and updated_at columns
    public $timestamps = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }

    // Define the relationship to Sekolah
    public function sekolah()
    {
        return $this->belongsTo(Sekolah::class, 'sekolah_id', 'sekolah_id');
    }
}
