@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Mata Kuliah</h1>
    <a href="{{ route('matakuliah.create') }}" class="btn btn-primary mb-3">Tambah Mata Kuliah</a>
    @if ($mataKuliahs->count())
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Kode</th>
                    <th>SKS</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mataKuliahs as $mataKuliah)
                    <tr>
                        <td>{{ $mataKuliah->id }}</td>
                        <td>{{ $mataKuliah->nama }}</td>
                        <td>{{ $mataKuliah->kode }}</td>
                        <td>{{ $mataKuliah->sks }}</td>
                        <td>
                            <a href="{{ route('matakuliah.show', $mataKuliah->id) }}" class="btn btn-info btn-sm">Lihat</a>
                            <a href="{{ route('matakuliah.edit', $mataKuliah->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('matakuliah.destroy', $mataKuliah->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Tidak ada mata kuliah yang tersedia.</p>
    @endif
</div>
@endsection
