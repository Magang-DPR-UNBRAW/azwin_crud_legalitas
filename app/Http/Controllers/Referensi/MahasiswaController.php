<?php

namespace App\Http\Controllers\Referensi;

use App\Http\Controllers\Controller;
use App\Models\Referensi\Mahasiswa;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('Mahasiswa.index', compact('mahasiswa'));
    }

    
    public function create()
    {
        return view('Mahasiswa.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|unique:mahasiswa',
            'jurusan' => 'required',
            'email' => 'required|email|unique:mahasiswa',
        ]);

        Mahasiswa::create($request->all());

        return redirect()->route('Daftar mahasiswa')
            ->with('success', 'Mahasiswa berhasil ditambahkan.');
    }
public function show($id)
{
    $mahasiswa = Mahasiswa::findOrFail($id);
    return view('mahasiswa.detail', compact('mahasiswa'));
}
     
    public function showDetails(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('Mahasiswa.edit', compact('mahasiswa'));
    }

public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required',
        'nim' => 'required|unique:mahasiswa,nim,'.$id, 
        'jurusan' => 'required',
        'email' => 'required|email|unique:mahasiswa,email,'.$id, 
    ]);


    $mahasiswa = Mahasiswa::findOrFail($id);

    $mahasiswa->update($request->all());

    return redirect()->route('Daftar mahasiswa')
        ->with('success', 'Mahasiswa berhasil diperbarui.');
}



    public function destroy($id)
    {
    
        $mahasiswa = Mahasiswa::findOrFail($id);

      
        $mahasiswa->delete();

    
        return redirect()->route('Daftar mahasiswa')->with('success', 'Mahasiswa berhasil dihapus!');
    }
}
