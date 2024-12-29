<?php

namespace App\Repositories;

use App\Models\LogKegiatan;
use App\Repositories\Contracts\LogKegiatanRepositoryInterface;

class LogKegiatanRepository implements LogKegiatanRepositoryInterface
{
    public function getAll()
    {
        return LogKegiatan::all();
    }

    public function getById($id)
    {
        return LogKegiatan::findOrFail($id);
    }

    public function create(array $data)
    {
        return LogKegiatan::create($data);
    }

    public function update($id, array $data)
    {
        $logKegiatan = LogKegiatan::findOrFail($id);
        $logKegiatan->update($data);
        return $logKegiatan;
    }

    public function delete($id)
    {
        $logKegiatan = LogKegiatan::findOrFail($id);
        $logKegiatan->delete();
        return true;
    }
}
