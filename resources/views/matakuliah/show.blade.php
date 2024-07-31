@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Mata Kuliah</h1>
    <div class="mb-3">
        <label class="form-label">Nama Mata Kuliah:</label>
        <p>{{ $mataKuliah->nama }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Kode Mata Kuliah:</label>
        <p>{{ $mataKuliah->kode }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">SKS:</label>
        <p>{{ $mataKuliah->sks }}</p>
    </div>
    <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
