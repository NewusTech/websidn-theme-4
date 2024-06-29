@extends('admin.layouts.base')
@section('title', 'Index')
@section('content')
    <div class="container">
        <h1>Edit Blog Tag</h1>
        <form action="{{ route('blogtag.update', ['id' => $blogtag->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="tags">Tags</label>
                <input type="text" name="tags" id="tags" class="form-control" value="{{ $blogtag->tags }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection
