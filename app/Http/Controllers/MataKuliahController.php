<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;

class MataKuliahController extends Controller
{
    // Menampilkan semua data mata kuliah
    public function index()
    {
        $data = [
            'title' => 'List Mata Kuliah',
            'mks'   => MataKuliah::all(),
        ];
        return view('list_mk', $data);
    }

    // Menampilkan form create data baru
    public function create()
    {
        return view('create_mk', ['title' => 'Create Mata Kuliah']);
    }

    // Menyimpan data baru ke database
    public function store(Request $request)
    {
        MataKuliah::create([
            'nama_mk' => $request->input('nama_mk'),
            'sks'     => $request->input('sks'),
        ]);

        return redirect()->to('/mata-kuliah')->with('success', 'Data mata kuliah berhasil ditambahkan!');
    }

    // Menampilkan form edit untuk data tertentu
    public function edit($uuid)
    {
        $mk = MataKuliah::findOrFail($uuid);

        return view('edit_mk', [
            'title' => 'Edit Mata Kuliah',
            'mk'    => $mk
        ]);
    }

    // Menyimpan hasil perubahan (update)
    public function update(Request $request, $uuid)
    {
        $request->validate([
            'nama_mk' => 'required',
            'sks'     => 'required|integer|min:1|max:6'
        ]);

        $mk = Matakuliah::findOrFail($uuid);
        $mk->update([
            'nama_mk' => $request->input('nama_mk'),
            'sks'     => $request->input('sks'),
        ]);

        return redirect()->to('/mata-kuliah')->with('success', 'Data mata kuliah berhasil diperbarui!');
    }

    // Menghapus data berdasarkan ID
    public function destroy($id)
    {
        $mk = MataKuliah::findOrFail($id);
        $mk->delete();

        return redirect()->to('/mata-kuliah')->with('success', 'Data mata kuliah berhasil dihapus!');
    }
}
