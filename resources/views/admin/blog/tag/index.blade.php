@extends('admin.layouts.base')
@section('title', 'Index')
@section('content')
    <div class="container">
        <h1>Daftar Blog Tags</h1>
        <a href="{{ route('blogtag.create') }}" class="btn btn-primary mb-3">Tambah Blog Tag Baru</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tags</th>
                    <th>Slug</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogtags as $blogtag)
                    <tr>
                        <td>{{ $blogtag->id }}</td>
                        <td>{{ $blogtag->tags }}</td>
                        <td>{{ $blogtag->slug }}</td>
                        <td>
                            <a href="{{ route('blogtag.edit', ['id' => $blogtag->id]) }}"
                                class="btn btn-sm btn-primary">Edit</a>
                            <a href="{{ route('blogtag.show', ['id' => $blogtag->id]) }}" class="btn btn-sm btn-info">Show</a>
                            <form action="{{ route('blogtag.destroy', ['id' => $blogtag->id]) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus blog tag ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
