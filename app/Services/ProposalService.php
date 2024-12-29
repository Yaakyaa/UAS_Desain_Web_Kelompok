<?php

namespace App\Services;

use App\Repositories\Contracts\ProposalRepositoryInterface;

class ProposalService
{
    protected $proposalRepository;

    public function __construct(ProposalRepositoryInterface $proposalRepository)
    {
        $this->proposalRepository = $proposalRepository;
    }

    public function getAllProposals()
    {
        return $this->proposalRepository->getAll();
    }

    public function getProposalById($id)
    {
        return $this->proposalRepository->getById($id);
    }

    public function createProposal(array $data)
    {
        return $this->proposalRepository->create($data);
    }

    public function updateProposal($id, array $data)
    {
        return $this->proposalRepository->update($id, $data);
    }

    public function deleteProposal($id)
    {
        return $this->proposalRepository->delete($id);
    }
}
