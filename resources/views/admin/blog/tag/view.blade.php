@extends('admin.layouts.base')
@section('title', 'Index')
@section('content')
    <div class="container">
        <h1>Detail Blog Tag</h1>
        <div class="form-group">
            <label for="tags">Tags</label>
            <input type="text" id="tags" class="form-control" value="{{ $blogtag->tags }}" readonly>
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" id="slug" class="form-control" value="{{ $blogtag->slug }}" readonly>
        </div>
        <a href="{{ route('blogtag.index') }}" class="btn btn-secondary">Kembali ke Daftar Blog Tags</a>
    </div>
@endsection
