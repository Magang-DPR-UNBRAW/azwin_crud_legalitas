@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Detail Mahasiswa</h4>
        <ul class="list-group">
            <li class="list-group-item"><strong>Nama:</strong> {{ $mahasiswa->nama }}</li>
            <li class="list-group-item"><strong>NIM:</strong> {{ $mahasiswa->nim }}</li>
            <li class="list-group-item"><strong>Jurusan:</strong> {{ $mahasiswa->jurusan }}</li>
            <li class="list-group-item"><strong>Email:</strong> {{ $mahasiswa->email }}</li>
            <!-- Tambahkan informasi lain sesuai kebutuhan -->
        </ul>
        <a href="{{ route('Edit mahasiswa', $mahasiswa->id) }}" class="btn btn-primary mt-3">Edit Mahasiswa</a>
        <a href="{{ route('Hapus mahasiswa', $mahasiswa->id) }}" class="btn btn-danger mt-3"
           onclick="return confirm('Apakah Anda yakin ingin menghapus mahasiswa ini?')">Hapus Mahasiswa</a>
    </div>
</div>
@endsection