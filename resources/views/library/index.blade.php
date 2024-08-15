@extends('layouts.app')

@section('title', 'Library Management')

@section('content')
<div class="container">
    <h1>Kategori</h1>
    <form action="{{ route('kategori.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_kategori" class="form-label">Nama Kategori</label>
            <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Kategori</button>
    </form>

    <h2 class="mt-5">Daftar Kategori</h2>
    <ul>
        @foreach ($kategoris as $kategori)
            <li>{{ $kategori->nama_kategori }}</li>
        @endforeach
    </ul>

    <h1 class="mt-5">Buku</h1>
    <form action="{{ route('buku.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="kode" class="form-label">Kode</label>
            <input type="text" class="form-control" id="kode" name="kode" required>
        </div>
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" required>
        </div>
        <div class="mb-3">
            <label for="pengarang" class="form-label">Pengarang</label>
            <input type="text" class="form-control" id="pengarang" name="pengarang" required>
        </div>
        <div class="mb-3">
            <label for="idkategori" class="form-label">Kategori</label>
            <select class="form-control" id="idkategori" name="idkategori" required>
                @foreach ($kategoris as $kategori)
                    <option value="{{ $kategori->idkategori }}">{{ $kategori->nama_kategori }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add Buku</button>
    </form>

    <h2 class="mt-5">Daftar Buku</h2>
    <ul>
        @foreach ($bukus as $buku)
            <li>
                <strong>{{ $buku->judul }}</strong> ({{ $buku->kode }}) - {{ $buku->pengarang }} - Kategori: {{ $buku->kategori->nama_kategori }}
            </li>
        @endforeach
    </ul>
</div>
@endsection
