<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProposalController extends Controller
{
    public function create()
    {
        return view('proposal');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:255',
            'prodi' => 'required|string|max:255',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'file' => 'required|file|mimes:pdf,doc,docx|max:2048', // Validasi file
        ]);

        DB::transaction(function () use ($request) {
            // Simpan data mahasiswa
            $mahasiswa = Mahasiswa::create([
                'nama' => $request->nama,
                'nim' => $request->nim,
                'prodi' => $request->prodi,
            ]);

            // Simpan file
            if ($request->hasFile('file')) {
                $filePath = $request->file('file')->store('proposals', 'public');
            }

            // Simpan data proposal
            Proposal::create([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'mahasiswa_id' => $mahasiswa->id,
                'file' => $filePath ?? null,
            ]);
        });

        return redirect()->route('proposals.create')->with('success', 'Proposal berhasil ditambahkan');
    }
}
