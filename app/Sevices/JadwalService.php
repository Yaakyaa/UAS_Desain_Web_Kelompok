<?php

namespace App\Services;

use App\Repositories\Contracts\JadwalRepositoryInterface;

class JadwalService
{
    protected $jadwalRepository;

    public function __construct(JadwalRepositoryInterface $jadwalRepository)
    {
        $this->jadwalRepository = $jadwalRepository;
    }

    public function getAllJadwal()
    {
        return $this->jadwalRepository->getAll();
    }

    public function getJadwalById($id)
    {
        return $this->jadwalRepository->getById($id);
    }

    public function createJadwal(array $data)
    {
        return $this->jadwalRepository->create($data);
    }

    public function updateJadwal($id, array $data)
    {
        return $this->jadwalRepository->update($id, $data);
    }

    public function deleteJadwal($id)
    {
        return $this->jadwalRepository->delete($id);
    }
}
