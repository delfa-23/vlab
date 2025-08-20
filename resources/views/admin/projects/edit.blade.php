@extends('layouts.admin')

@section('content')
<h1>Edit Project</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" value="{{ old('nama', $project->nama) }}" required>
    </div>
    <div class="mb-3">
        <label>Nama Project</label>
        <input type="text" name="nama_project" class="form-control" value="{{ old('nama_project', $project->nama_project) }}" required>
    </div>
    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="description" class="form-control">{{ old('description', $project->description) }}</textarea>
    </div>
    <div class="mb-3">
        <label>Image</label><br>
        @if($project->image)
            <img src="{{ asset($project->image) }}" alt="Gambar Project" width="100"><br><br>
        @endif
        <input type="file" name="image" class="form-control" accept="image/*">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('projects.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection
