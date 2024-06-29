@extends('admin.layouts.base')
@section('title', 'BuatBlog')
@section('content')
    <div class="container">
        <h1>Detail Blog</h1>
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ $blog->judul }}" disabled>
        </div>
        <div class="form-group">
            <label for="meta">Meta</label>
            <input type="text" name="meta" class="form-control" value="{{ $blog->meta }}" disabled>
        </div>
        <div class="form-group">
            <label for="tag">Tag</label>
            <input type="text" name="tag" class="form-control" value="{{ $blog->tag }}" disabled>
        </div>
        <div class="form-group">
            <label for="keyword">Keyword</label>
            <input type="text" name="keyword" class="form-control" value="{{ $blog->keyword }}" disabled>
        </div>
        <div class="form-group">
            <label for="caption">Caption</label>
            <input type="text" name="caption" class="form-control" value="{{ $blog->caption }}" disabled>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="10" disabled>{!! $blog->deskripsi !!}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Gambar</label>
            <input type="text" name="image" class="form-control" value="{{ $blog->image }}" disabled>
        </div>
        <a href="{{ route('blog.index') }}" class="btn btn-primary">Kembali</a>
    </div>
@endsection
