@extends('admin.layouts.base')
@section('title', 'Index')
@section('content')
    <div class="container">
        <h1>Daftar Blog Kategori</h1>
        <a href="{{ route('blogkategori.create') }}" class="btn btn-primary mb-3">Tambah Blog Kategori Baru</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kategori</th>
                    <th>Slug</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogkategoris as $blogkategori)
                    <tr>
                        <td>{{ $blogkategori->id }}</td>
                        <td>{{ $blogkategori->kategori }}</td>
                        <td>{{ $blogkategori->slug }}</td>
                        <td>
                            <a href="{{ route('blogkategori.edit', ['id' => $blogkategori->id]) }}"
                                class="btn btn-sm btn-primary">Edit</a>
                            <a href="{{ route('blogkategori.show', ['id' => $blogkategori->id]) }}"
                                class="btn btn-sm btn-info">Show</a>
                            <form action="{{ route('blogkategori.destroy', ['id' => $blogkategori->id]) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus blog kategori ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
