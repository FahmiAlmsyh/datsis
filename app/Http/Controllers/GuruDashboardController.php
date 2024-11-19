<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GuruDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guru = Guru::with('kelas')->get();
        return view('list.guru.index', compact('guru'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelas = Kelas::get();
        return view('list.guru.create', compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {
            $request->validate([
                'nama' => 'required|string',
                'kelas_id' => 'required|numeric',
                'mapel' => 'required|string'
            ]);

            Guru::create([
                'nama' => $request->input('nama'),
                'kelas_id' => $request->input('kelas_id'),
                'mapel' => $request->input('mapel')
            ]);

            return redirect()->route('guru')->with('success', 'Guru berhasil ditambahkan!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $guru = Guru::findOrFail($id);
        $kelas = Kelas::get();
        return view('list.guru.edit', compact('guru', 'kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                    'nama' => 'required|string',
                    'kelas_id' => 'required|numeric',
                    'mapel' => 'required|string'
                ]
            );

            $guru = Guru::findOrFail($id);

            $guru->nama = $request->input('nama');
            $guru->kelas_id = $request->input('kelas_id');
            $guru->mapel = $request->input('mapel');
            $guru->save();

            return redirect()->route('guru')->with('success', 'Guru berhasil diperbarui!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $guru = Guru::findOrFail($id);

        $guru->delete();

        return redirect()->back()->with('success', 'Guru berhasil dihapus!');
    }
}
