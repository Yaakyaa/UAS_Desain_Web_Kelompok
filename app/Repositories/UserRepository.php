<?php

namespace App\Repositories\Services;

use App\Models\User; // Gunakan model User
use App\Repositories\Contracts\UserRepositoryInterface; // Gunakan interface UserRepositoryInterface

class UserRepository implements UserRepositoryInterface // Sesuaikan nama kelas dengan model User
{
    public function getAll()
    {
        return User::all(); // Menggunakan model User
    }

    public function findById($id)
    {
        return User::findOrFail($id); // Menggunakan model User
    }

    public function create(array $data)
    {
        return User::create($data); // Menggunakan model User
    }

    public function update($id, array $data)
    {
        // Temukan User berdasarkan ID
        $user = User::findOrFail($id); 
        // Perbarui User dengan data baru
        $user->update($data);
        return $user; // Mengembalikan User yang sudah diperbarui
    }

    public function delete($id)
    {
        $user = User::findOrFail($id); // Menggunakan model User
        return $user->delete(); // Menghapus User
    }
}
