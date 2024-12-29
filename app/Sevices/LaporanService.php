<?php

namespace App\Services;

use App\Repositories\Contracts\LaporanRepositoryInterface;

class LaporanService
{
    protected $laporanRepository;

    public function __construct(LaporanRepositoryInterface $laporanRepository)
    {
        $this->laporanRepository = $laporanRepository;
    }

    public function getAllLaporan()
    {
        return $this->laporanRepository->getAll();
    }

    public function getLaporanById($id)
    {
        return $this->laporanRepository->getById($id);
    }

    public function createLaporan(array $data)
    {
        return $this->laporanRepository->create($data);
    }

    public function updateLaporan($id, array $data)
    {
        return $this->laporanRepository->update($id, $data);
    }

    public function deleteLaporan($id)
    {
        return $this->laporanRepository->delete($id);
    }
}
