@extends('layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-header bg-primary text-white">
        <h3 class="mb-0">📋 Daftar Pengguna</h3>
    </div>
    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-hover table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->nama }}</td>
                        <td>{{ $user->nim }}</td>
                        <td>{{ $user->nama_kelas }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted">Tidak ada data pengguna</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
