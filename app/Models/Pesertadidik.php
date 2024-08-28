<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Pesertadidik extends Model
{
    protected $table = 'peserta_didik'; // Explicitly set the table name

    protected $primaryKey = 'peserta_didik_id'; // Explicitly set the primary key
    public $incrementing = false; // Disable auto-incrementing
    protected $keyType = 'string'; // Set the primary key type to string

    // Define the fillable fields
    protected $fillable = [
        'peserta_didik_id', // Ensure that the UUID is fillable if set manually
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

    // Define the relationship to Sekolah
    public function sekolah()
    {
        return $this->belongsTo(Sekolah::class, 'sekolah_id', 'sekolah_id');
    }
}
