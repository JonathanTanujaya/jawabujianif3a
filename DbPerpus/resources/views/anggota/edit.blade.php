@extends('layouts.app')

@section('content')
<h1>Edit Anggota</h1>
<form action="{{ route('anggota.update', $anggota->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="namaAnggota" class="form-label">Nama Anggota</label>
        <input type="text" name="namaAnggota" id="namaAnggota" value="{{ $anggota->namaAnggota }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" name="alamat" id="alamat" value="{{ $anggota->alamat }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="jurusan" class="form-label">Jurusan</label>
        <input type="text" name="jurusan" id="jurusan" value="{{ $anggota->jurusan }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="tglDaftar" class="form-label">Tanggal Daftar</label>
        <input type="date" name="tglDaftar" id="tglDaftar" value="{{ $anggota->tglDaftar }}" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Simpan Perubahan</button>
    <a href="{{ route('anggota.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection
