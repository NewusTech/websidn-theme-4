@extends('admin.layouts.base')
@section('title', 'Index')
@section('content')
    <div class="container">
        <h1>Tambah Blog Kategori Baru</h1>
        <form action="{{ route('blogkategori.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" name="kategori" id="kategori" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
