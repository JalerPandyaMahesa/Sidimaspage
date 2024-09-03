<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Alat extends Model
{
    protected $table = 'alat'; // Explicitly set the table name

    protected $primaryKey = 'Id_alat'; // Explicitly set the primary key
    public $incrementing = false; // Disable auto-incrementing
    protected $keyType = 'string'; // Set the primary key type to string

    // Define the fillable fields
    protected $fillable = [
        'Id_alat', // Ensure that the UUID is fillable if set manually
        'nama',
        'sekolah_id' // Include sekolah_id as fillable
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

    public function sekolah()
    {
        return $this->belongsTo(Sekolah::class, 'sekolah_id', 'sekolah_id');
    }

    public function ruang()
    {
        return $this->belongsTo(Ruang::class, 'Id_ruang', 'Id_Ruang');
    }

}
