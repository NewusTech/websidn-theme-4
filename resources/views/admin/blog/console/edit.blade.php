@extends('admin.layouts.base')
@section('title', 'BuatBlog')
@section('content')
    <div class="container">
        <h1>Edit Blog Console</h1>
        <form action="{{ route('blogconsole.update', ['id' => $blogconsole->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control" value="{{ $blogconsole->judul }}"
                    required>
            </div>
            <div class="form-group">
                <label for="code">Code</label>
                <textarea name="code" id="code" class="form-control" rows="5" required>{{ $blogconsole->code }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection
