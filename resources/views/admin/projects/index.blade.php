@extends('layouts.admin')

@section('content')
<h1>Daftar Project</h1>

<a href="{{ route('admin.dashboard') }}" class="btn btn-secondary mb-3">Back to Dashboard</a>

<a href="{{ route('projects.create') }}" class="btn btn-primary mb-3">Tambah Project</a>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered mt-3">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nama Project</th>
            <th>Deskripsi</th>
            <th>Image</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($projects as $index => $project)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $project->nama }}</td>
            <td>{{ $project->nama_project }}</td>
            <td>{{ $project->description ?? '-' }}</td>
            <td>
                @if($project->image)
                    <img src="{{ asset($project->image) }}" alt="Gambar Project" width="100">
                @else
                    Tidak ada gambar
                @endif
            </td>
            <td>
                <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Yakin ingin hapus?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $projects->links() }}
@endsection
