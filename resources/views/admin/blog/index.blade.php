@extends('admin.layouts.base')
@section('title', 'Blog')
@section('content')
    <div class="container">
        <h1>Daftar Blogs</h1>
        <a href="{{ route('blog.create') }}" class="btn btn-primary mb-3">Tambah Blog Baru</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Meta</th>
                    <th>Tag</th>
                    <th>Keyword</th>
                    <th>Caption</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $blog)
                    <tr>
                        <td>{{ $blog->id }}</td>
                        <td>{{ $blog->judul }}</td>
                        <td>{{ $blog->meta }}</td>
                        <td>{{ $blog->tag }}</td>
                        <td>{{ $blog->keyword }}</td>
                        <td>{{ $blog->caption }}</td>
                        <td>{!! Str::limit($blog->deskripsi, 50) !!}</td>
                        <td>{{ $blog->image }}</td>
                        <td>
                            <a href="{{ route('blog.edit', ['id' => $blog->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="{{ route('blog.show', ['id' => $blog->id]) }}" class="btn btn-sm btn-info">View</a>
                            <form action="{{ route('blog.destroy', ['id' => $blog->id]) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus blog ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
