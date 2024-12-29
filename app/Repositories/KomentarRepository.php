<?php

namespace App\Repositories;

use App\Models\Komentar;
use App\Repositories\Contracts\KomentarRepositoryInterface;

class KomentarRepository implements KomentarRepositoryInterface
{
    public function getAll()
    {
        return Komentar::all();
    }

    public function getById($id)
    {
        return Komentar::findOrFail($id);
    }

    public function create(array $data)
    {
        return Komentar::create($data);
    }

    public function update($id, array $data)
    {
        $komentar = Komentar::findOrFail($id);
        $komentar->update($data);
        return $komentar;
    }

    public function delete($id)
    {
        $komentar = Komentar::findOrFail($id);
        $komentar->delete();
    }
}
