@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Mata Kuliah</h1>

    <form action="{{ route('matakuliah.update', $mk->uuid) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nama Mata Kuliah</label>
            <input type="text" name="nama_mk" class="form-control" value="{{ $mk->nama_mk }}">
        </div>
        <div class="mb-3">
            <label>SKS</label>
            <input type="number" name="sks" class="form-control" value="{{ $mk->sks }}">
        </div>
        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
    </form>

</div>
@endsection
