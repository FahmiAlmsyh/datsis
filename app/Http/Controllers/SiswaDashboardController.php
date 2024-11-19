<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SiswaDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view('list.siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelas = Kelas::get();
        return view('list.siswa.create', compact('kelas'));
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
                'umur' => 'required|string'
            ]);

            Siswa::create([
                'nama' => $request->input('nama'),
                'kelas_id' => $request->input('kelas_id'),
                'umur' => $request->input('umur')
            ]);

            return redirect()->route('siswa')->with('success', 'Siswa berhasil ditambahkan!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $siswa = Siswa::findOrFail($id);
        $kelas = Kelas::get();
        return view('list.siswa.edit', compact('siswa', 'kelas'));
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
                    'umur' => 'required|string'
                ]
            );

            $siswa = Siswa::findOrFail($id);

            $siswa->nama = $request->input('nama');
            $siswa->kelas_id = $request->input('kelas_id');
            $siswa->umur = $request->input('umur');
            $siswa->save();

            return redirect()->route('siswa')->with('success', 'Siswa berhasil diperbarui!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $siswa = Siswa::findOrFail($id);

        $siswa->delete();

        return redirect()->back()->with('success', 'Siswa berhasil dihapus!');
    }
}
