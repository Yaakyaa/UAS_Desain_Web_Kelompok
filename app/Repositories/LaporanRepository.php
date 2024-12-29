<?php

namespace App\Repositories;

use App\Models\Laporan;
use App\Repositories\Contracts\LaporanRepositoryInterface;

class LaporanRepository implements LaporanRepositoryInterface
{
    public function getAll()
    {
        return Laporan::all();
    }

    public function getById($id)
    {
        return Laporan::findOrFail($id);
    }

    public function create(array $data)
    {
        return Laporan::create($data);
    }

    public function update($id, array $data)
    {
        $laporan = Laporan::findOrFail($id);
        $laporan->update($data);
        return $laporan;
    }

    public function delete($id)
    {
        $laporan = Laporan::findOrFail($id);
        $laporan->delete();
    }
}
