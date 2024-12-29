<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nim',
        'prodi',
    ];

    // Relasi dengan Proposal
    public function proposals()
    {
        return $this->hasMany(Proposal::class);
    }

    // Relasi dengan LogKegiatan
    public function logKegiatans()
    {
        return $this->hasMany(LogKegiatan::class);
    }

    // Relasi dengan Jadwal
    public function jadwals()
    {
        return $this->hasMany(Jadwal::class);
    }

    // Relasi dengan Laporan
    public function laporans()
    {
        return $this->hasMany(Laporan::class);
    }
}
