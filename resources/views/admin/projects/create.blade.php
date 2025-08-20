@extends('layouts.admin')

@section('content')
<h1>Tambah Project</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required>
    </div>
    <div class="mb-3">
        <label>Nama Project</label>
        <input type="text" name="nama_project" class="form-control" value="{{ old('nama_project') }}" required>
    </div>
    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="description" class="form-control">{{ old('description') }}</textarea>
    </div>
    <div class="mb-3">
        <label>Image</label>
        <input type="file" name="image" class="form-control" accept="image/*">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('projects.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection
