@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-3">Daftar Mata Kuliah</h1>

    {{-- Tombol Tambah Data --}}
    <a href="{{ route('matakuliah.create') }}" class="btn btn-primary mb-4">
        + Tambah Mata Kuliah Baru
    </a>

    {{-- Notifikasi sukses/error --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- Tabel daftar mata kuliah --}}
    <table class="table table-bordered table-striped align-middle text-center">
        <thead class="table-dark">
            <tr>
                <th>UUID</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($mks as $mk)
            <tr>
                <td>{{ $mk->uuid }}</td>
                <td>{{ $mk->nama_mk }}</td>
                <td>{{ $mk->sks }}</td>
                <td>
                    {{-- Tombol Edit --}}
                    <a href="{{ route('matakuliah.edit', $mk->uuid) }}" class="btn btn-warning btn-sm">
                        ✏️ Edit
                    </a>

                    {{-- Tombol Hapus --}}
                    <form action="{{ route('matakuliah.destroy', $mk->uuid) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin ingin menghapus data ini?')">🗑️ Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4">Belum ada data mata kuliah.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
