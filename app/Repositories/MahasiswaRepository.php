<?php

namespace App\Repositories;

use App\Models\Mahasiswa; // Gunakan model Mahasiswa
use App\Repositories\Contracts\MahasiswaRepositoryInterface; // Gunakan interface MahasiswaRepositoryInterface

class MahasiswaRepository implements MahasiswaRepositoryInterface // Sesuaikan nama kelas dengan model Mahasiswa
{
    public function getAll()
    {
        return Mahasiswa::all(); // Menggunakan model Mahasiswa
    }

    public function findById($id)
    {
        return Mahasiswa::findOrFail($id); // Menggunakan model Mahasiswa
    }

    public function create(array $data)
    {
        return Mahasiswa::create($data); // Menggunakan model Mahasiswa
    }

    public function update($id, array $data)
    {
        // Temukan Mahasiswa berdasarkan ID
        $mahasiswa = Mahasiswa::findOrFail($id); 
        // Perbarui Mahasiswa dengan data baru
        $mahasiswa->update($data);
        return $mahasiswa; // Mengembalikan Mahasiswa yang sudah diperbarui
    }

    public function delete($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id); // Menggunakan model Mahasiswa
        return $mahasiswa->delete(); // Menghapus Mahasiswa
    }
}
