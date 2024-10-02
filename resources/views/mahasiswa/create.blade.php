@extends('layouts.app')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <ol class="breadcrumb fs-sm mb-1">
                <li class="breadcrumb-item">Mahasiswa</li>
                <li class="breadcrumb-item"><a href="{{ route('Add mahasiswa') }}">Tambah Mahasiswa</a></li>
            </ol>
            <h4 class="main-title mb-0">Tambah Mahasiswa</h4>
        </div>
        <div>
            <a href="{{ route('Daftar mahasiswa') }}" class="btn btn-secondary">Lihat Daftar Mahasiswa</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="mb-3">
                <!-- Form action diubah sesuai dengan route yang benar -->
                <form action="{{ route('Tambah mahasiswa') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="{{ old('nama') }}">
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" name="nim" class="form-control" id="nim" value="{{ old('nim') }}">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <input type="text" name="jurusan" class="form-control" id="jurusan" value="{{ old('jurusan') }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}">
                    </div>

                    <input type="submit" value="Simpan" class="btn btn-primary">
                    <a href="{{ route('Daftar mahasiswa') }}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        function updateStatusSileg() {
            var checkbox = document.getElementById('status-sileg');
            var hiddenInput = document.getElementById('status-sileg-hidden');

            hiddenInput.value = checkbox.checked ? 1 : 0;
        }
    </script>
@endpush
