@extends('layouts.app')

@section('title', 'Example Page')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/example.css') }}">
@endsection

@section('content')
<h1>Daftar Kategori</h1>
    <a href="{{ route('kategori.create') }}" class="btn btn-primary">Tambah Kategori</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kategori as $kat)
                <tr>
                    <td>{{ $kat->idkategori }}</td>
                    <td>{{ $kat->nama_kategori }}</td>
                    <td>
                        <!-- Add actions if needed -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/example.js') }}"></script>
@endsection
