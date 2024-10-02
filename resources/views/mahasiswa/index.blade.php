@extends('layouts.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div>
        <ol class="breadcrumb fs-sm mb-1">
            <li class="breadcrumb-item">Menu</li>
            <li class="breadcrumb-item active" aria-current="page">Daftar Mahasiswa</li>
        </ol>
        <h4 class="main-title mb-0">Daftar Mahasiswa</h4>
    </div>
    <div>
        <a href="{{ route('Add mahasiswa') }}" class="btn btn-success">
            <i class="ri-pencil-line"></i> Tambah Mahasiswa
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
                setTimeout(function () {
                    document.getElementById('success-alert').remove();
                }, 3000);
            </script>
        @endif

        <div class="table-responsive">
            <table id="tableGrid3">
                <thead>
                    <tr>
                        <th scope="col" class="p-1 text-center" style="width: 5%;">ID</th>
                        <th scope="col" class="p-1 text-center" style="width: 15%;">Nama</th>
                        <th scope="col" class="p-1 text-center" style="width: 20%;">NIM</th>
                        <th scope="col" class="p-1 text-center" style="width: 25%;">Jurusan</th>
                        <th scope="col" class="p-1 text-center" style="width: 30%;">Email</th>
                        <th scope="col" class="p-1 text-center" style="width: 35%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswa as $key => $mahasiswa)
                        <tr>
                            <td class="text-center">{{ $key + 1 }}</td> 
                            <td class="text-center">{{ $mahasiswa->nama }}</td>
                            <td class="text-center">{{ $mahasiswa->nim }}</td>
                            <td class="text-center">{{ $mahasiswa->jurusan }}</td>
                            <td class="text-center">{{ $mahasiswa->email }}</td>
                            <td class="text-center">
                                <div class="d-inline-flex"> 
                                <a href="{{ route('Detail mahasiswa', $mahasiswa->id) }}" 
                                        class="btn btn-info p-1 me-1">
                                        <i class="ri-information-line"></i> Detail
                                    </a>
                                    <a href="{{ route('Edit mahasiswa', $mahasiswa->id) }}"
                                        class="btn btn-primary p-1 me-1"> 
                                        <i class="ri-edit-2-line"></i> Edit
                                    </a>
                                    <form action="{{ route('Hapus mahasiswa', $mahasiswa->id) }}" method="POST"
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger p-1"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus mahasiswa ini?')">
                                            <i class="ri-delete-bin-line"></i> Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection