<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pesertadidik extends Model
{
    protected $table = 'peserta_didik'; // Explicitly set the table name

    protected $primaryKey = 'peserta_didik_id'; // Explicitly set the primary key
    public $incrementing = false; // Disable auto-incrementing
    protected $keyType = 'string'; // Set the primary key type to string

    // Define the fillable fields
    protected $fillable = [
        'peserta_didik_id',
        'nama',
        'nisn',
        'nik',
        'no_kk',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'nama_ayah',
        'nik_ayah',
        'tahun_lahir_ayah',
        'jenjang_pendidikan_ayah_keterangan',
        'pekerjaan_ayah',
        'nama_ibu_kandung',
        'nik_ibu',
        'tahun_lahir_ibu',
        'jenjang_pendidikan_ibu_keterangan',
        'pekerjaan_ibu',
        'semester_id',
        'rombongan_belajar_id',
        'anggota_rombel_id',
        'agama_id',
        'alamat_jalan',
        'rt',
        'rw',
        'nama_dusun',
        'desa_kelurahan',
        'kode_wilayah',
        'kode_kecamatan',
        'kecamatan',
        'kode_kabupaten',
        'kabupaten',
        'kode_provinsi',
        'provinsi',
        'kode_pos',
        'lintang',
        'bujur',
        'nama_wali',
        'tahun_lahir_wali',
        'nipd',
        'tanggal_masuk_sekolah',
        'kebutuhan_khusus_id',
        'kebutuhan_khusus',
        'jenis_tinggal_id',
        'jenis_tinggal',
        'alat_transportasi_id',
        'alat_transportasi',
        'anak_keberapa',
        'nik_wali',
        'nomor_telepon_rumah',
        'nomor_telepon_seluler',
        'email',
        'reg_akta_lahir',
        'jenjang_pendidikan_ayah',
        'pekerjaan_id_ayah',
        'penghasilan_id_ayah',
        'penghasilan_ayah',
        'kebutuhan_khusus_id_ayah',
        'kebutuhan_khusus_ayah',
        'jenjang_pendidikan_ibu',
        'pekerjaan_id_ibu',
        'penghasilan_id_ibu',
        'penghasilan_ibu',
        'kebutuhan_khusus_id_ibu',
        'kebutuhan_khusus_ibu',
        'jenjang_pendidikan_wali',
        'jenjang_pendidikan_wali_keterangan',
        'pekerjaan_id_wali',
        'pekerjaan_wali',
        'penghasilan_id_wali',
        'penghasilan_wali',
        'id_bank',
        'bank',
        'nama_kcp',
        'rekening_bank',
        'rekening_atas_nama',
        'jenis_keluar_id',
        'jenis_keluar',
        'tanggal_keluar',
        'keterangan_registrasi',
        'no_peserta_ujian',
        'no_seri_ijazah',
        'a_pernah_paud',
        'a_pernah_tk',
        'sekolah_asal',
        'jenis_pendaftaran_rombel',
        'jenis_pendaftaran_rombel_keterangan',
        'tingkat_pendidikan_id',
        'tingkat_pendidikan',
        'jurusan_sp_id',
        'nama_jurusan',
        'jenis_rombel',
        'jenis_rombel_keterangan',
        'nama_rombel',
        'moving_class',
        'sks',
        'registrasi_id',
        'id_hobby',
        'hobby',
        'id_cita',
        'cita',
        'tinggi_badan',
        'berat_badan',
        'lingkar_kepala',
        'jarak_rumah_ke_sekolah',
        'jarak_rumah_ke_sekolah_km',
        'waktu_tempuh_ke_sekolah',
        'menit_tempuh_ke_sekolah',
        'jumlah_saudara_kandung',
        'sekolah_id' // Include sekolah_id as fillable
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
        // 'tanggal_masuk_sekolah' => 'date',
        // 'tanggal_keluar' => 'date',
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
        return $this->belongsTo(Sekolah::class, 'sekolah_id');
    }
}
