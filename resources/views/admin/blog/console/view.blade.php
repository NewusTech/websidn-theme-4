@extends('admin.layouts.base')
@section('title', 'BuatBlog')
@section('content')
    <div class="container">
        <h1>Detail Blog Console</h1>
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" id="judul" class="form-control" value="{{ $blogconsole->judul }}" readonly>
        </div>
        <div class="form-group">
            <label for="code">Code</label>
            <textarea id="code" class="form-control" rows="5" readonly>{{ $blogconsole->code }}</textarea>
        </div>
        <a href="{{ route('blogconsole.index') }}" class="btn btn-secondary">Kembali ke Daftar Blog Consoles</a>
    </div>
@endsection
