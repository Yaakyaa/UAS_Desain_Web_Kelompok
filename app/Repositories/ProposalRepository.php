<?php

namespace App\Repositories;

use App\Models\Proposal;
use App\Repositories\Contracts\ProposalRepositoryInterface;

class ProposalRepository implements ProposalRepositoryInterface
{
    public function getAll()
    {
        return Proposal::all();
    }

    public function getById($id)
    {
        return Proposal::findOrFail($id);
    }

    public function create(array $data)
    {
        return Proposal::create($data);
    }

    public function update($id, array $data)
    {
        $proposal = Proposal::findOrFail($id);
        $proposal->update($data);
        return $proposal;
    }

    public function delete($id)
    {
        $proposal = Proposal::findOrFail($id);
        $proposal->delete();
        return true;
    }
}
