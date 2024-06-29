@extends('admin.layouts.base')
@section('title', 'BuatBlog')
@section('content')
    <div class="container">
        <h1>Daftar Blog Consoles</h1>
        <a href="{{ route('blogconsole.create') }}" class="btn btn-primary mb-3">Tambah Blog Console Baru</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Code</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogconsoles as $blogconsole)
                    <tr>
                        <td>{{ $blogconsole->id }}</td>
                        <td>{{ $blogconsole->judul }}</td>
                        <td>{{ Str::limit($blogconsole->code, 50) }}</td>
                        <td>
                            <a href="{{ route('blogconsole.edit', ['id' => $blogconsole->id]) }}"
                                class="btn btn-sm btn-primary">Edit</a>
                            <a href="{{ route('blogconsole.show', ['id' => $blogconsole->id]) }}"
                                class="btn btn-sm btn-info">Show</a>
                            <form action="{{ route('blogconsole.destroy', ['id' => $blogconsole->id]) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus blog console ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
