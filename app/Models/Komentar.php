<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;

    protected $fillable = [
        'laporan_id',
        'log_kegiatan_id',
        'komentar',
    ];

    public function laporan()
    {
        return $this->belongsTo(Laporan::class);
    }

    public function logKegiatan()
    {
        return $this->belongsTo(LogKegiatan::class);
    }
}
