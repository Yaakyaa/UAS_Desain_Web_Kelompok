<?php

namespace App\Services;

use App\Repositories\Contracts\KomentarRepositoryInterface;

class KomentarService
{
    protected $komentarRepository;

    public function __construct(KomentarRepositoryInterface $komentarRepository)
    {
        $this->komentarRepository = $komentarRepository;
    }

    public function getAllKomentar()
    {
        return $this->komentarRepository->getAll();
    }

    public function getKomentarById($id)
    {
        return $this->komentarRepository->getById($id);
    }

    public function createKomentar(array $data)
    {
        return $this->komentarRepository->create($data);
    }

    public function updateKomentar($id, array $data)
    {
        return $this->komentarRepository->update($id, $data);
    }

    public function deleteKomentar($id)
    {
        return $this->komentarRepository->delete($id);
    }
}
