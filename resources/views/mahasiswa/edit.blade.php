@extends('layouts.app')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <ol class="breadcrumb fs-sm mb-1">
                <li class="breadcrumb-item">Menu</li>
                <li class="breadcrumb-item active" aria-current="page">Edit Mahasiswa</li>
            </ol>
            <h4 class="main-title mb-0">Edit Mahasiswa</h4>
        </div>
        <div>
            <a href="{{ route('Daftar mahasiswa') }}" class="btn btn-primary">
                <i class="ri-arrow-left-line"></i> Kembali ke Daftar Mahasiswa
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success" id="success-alert">
                    {{ session('success') }}
                </div>
                <script>
                    setTimeout(function() {
                        document.getElementById('success-alert').remove();
                    }, 3000);
                </script>
            @endif

            <form action="{{ route('Update mahasiswa', $mahasiswa->id) }}" method="POST">
                @csrf
                @method('POST ') <!-- Ganti dengan PUT jika Anda menggunakan route PUT -->
                
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="{{ old('nama', $mahasiswa->nama) }}" required>
                    @error('nama')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" name="nim" class="form-control" id="nim" value="{{ old('nim', $mahasiswa->nim) }}" required>
                    @error('nim')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" id="jurusan" value="{{ old('jurusan', $mahasiswa->jurusan) }}" required>
                    @error('jurusan')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{ old('email', $mahasiswa->email) }}" required>
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Update Mahasiswa</button>
            </form>
        </div>
    </div>
@endsection
