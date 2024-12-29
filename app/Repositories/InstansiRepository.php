<?php

namespace App\Repositories;

use App\Models\Instansi;
use App\Repositories\Contracts\InstansiRepositoryInterface;

class InstansiRepository implements InstansiRepositoryInterface
{
    public function getAll()
    {
        return Instansi::all();
    }

    public function findById($id)
    {
        return Instansi::findOrFail($id);
    }

    public function create(array $data)
    {
        return Instansi::create($data);
    }

    public function update($id, array $data)
    {
        $instansi = Instansi::findOrFail($id);
        $instansi->update($data);
        return $instansi;
    }

    public function delete($id)
    {
        $instansi = Instansi::findOrFail($id);
        return $instansi->delete();
    }
}
