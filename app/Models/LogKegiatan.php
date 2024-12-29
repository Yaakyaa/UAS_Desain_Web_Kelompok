<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogKegiatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'kegiatan',
        'mahasiswa_id',
    ];

    // Relasi dengan Mahasiswa
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }

    // Relasi dengan Komentar
    public function komentars()
    {
        return $this->hasMany(Komentar::class);
    }
}
