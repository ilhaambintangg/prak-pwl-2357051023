@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Tambah Pengguna</h1>

    <form action="{{ route('user.store') }}" method="POST">
        @csrf

        {{-- Input Nama --}}
        <div class="mb-3">
            <label for="nama" class="form-label">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>

        {{-- Input NPM --}}
        <div class="mb-3">
            <label for="npm" class="form-label">NPM:</label>
            <input type="text" class="form-control" id="npm" name="npm" required>
        </div>

        {{-- Dropdown Kelas --}}
        <div class="mb-3">
            <label for="kelas_id" class="form-label">Kelas:</label>
            <select name="kelas_id" id="kelas_id" class="form-select" required>
                <option value="" disabled selected>-- Pilih Kelas --</option>

                {{-- Data kelas dari database --}}
                @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                @endforeach

                {{-- Tambahan manual kelas A-D --}}
                <option value="A">Kelas A</option>
                <option value="B">Kelas B</option>
                <option value="C">Kelas C</option>
                <option value="D">Kelas D</option>
            </select>
        </div>

        {{-- Tombol Submit --}}
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
