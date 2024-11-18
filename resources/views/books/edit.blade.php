@extends('layouts.app')

@section('title')
    Perpustakaan - Edit Book
@endsection

@section('content')
    <h1>Edit Buku</h1>
    <a href="{{ route('books.index') }}">Kembali</a>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Judul:</label>
        <input type="text" name="title" value="{{ $book->title }}" required>
        <label>Pengarang:</label>
        <input type="text" name="author" value="{{ $book->author }}" required>
        <label>Penerbit:</label>
        <input type="text" name="publisher" value="{{ $book->publisher }}" required>
        <label>Tahun:</label>
        <input type="number" name="year" value="{{ $book->year }}" required>
        <label>ISBN:</label>
        <input type="text" name="ISBN" value="{{ $book->ISBN }}" required>
        <button type="submit">Update</button>
    </form>
@endsection
