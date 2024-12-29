<?php

namespace App\Repositories;

use App\Models\Jadwal;
use App\Repositories\Contracts\JadwalRepositoryInterface;

class JadwalRepository implements JadwalRepositoryInterface
{
    public function getAll()
    {
        return Jadwal::all();
    }

    public function getById($id)
    {
        return Jadwal::findOrFail($id);
    }

    public function create(array $data)
    {
        return Jadwal::create($data);
    }

    public function update($id, array $data)
    {
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->update($data);
        return $jadwal;
    }

    public function delete($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->delete();
    }
}
