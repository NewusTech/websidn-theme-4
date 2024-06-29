@extends('admin.layouts.base')
@section('title', 'Index')
@section('content')
    <div class="container">
        <h1>Edit Blog Kategori</h1>
        <form action="{{ route('blogkategori.update', ['id' => $blogkategori->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" name="kategori" id="kategori" class="form-control" value="{{ $blogkategori->kategori }}"
                    required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection
