@extends('layouts.app')

@section('title')
    Perpustakaan - Create Book
@endsection

@section('content')
    <h1>Tambah Buku</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <label>Judul:</label>
        <input type="text" name="title" required>
        <label>Pengarang:</label>
        <input type="text" name="author" required>
        <label>Penerbit:</label>
        <input type="text" name="publisher" required>
        <label>Tahun:</label>
        <input type="number" name="year" required>
        <label>ISBN:</label>
        <input type="text" name="ISBN" required>
        <button type="submit">Simpan</button>
    </form>
@endsection
