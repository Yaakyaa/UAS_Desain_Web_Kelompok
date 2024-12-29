<?php

namespace App\Services;

use App\Repositories\Contracts\LogKegiatanRepositoryInterface;

class LogKegiatanService
{
    protected $logKegiatanRepository;

    public function __construct(LogKegiatanRepositoryInterface $logKegiatanRepository)
    {
        $this->logKegiatanRepository = $logKegiatanRepository;
    }

    public function getAllLogKegiatan()
    {
        return $this->logKegiatanRepository->getAll();
    }

    public function getLogKegiatanById($id)
    {
        return $this->logKegiatanRepository->getById($id);
    }

    public function createLogKegiatan(array $data)
    {
        return $this->logKegiatanRepository->create($data);
    }

    public function updateLogKegiatan($id, array $data)
    {
        return $this->logKegiatanRepository->update($id, $data);
    }

    public function deleteLogKegiatan($id)
    {
        return $this->logKegiatanRepository->delete($id);
    }
}
