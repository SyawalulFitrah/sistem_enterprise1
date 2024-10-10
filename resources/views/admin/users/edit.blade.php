<!-- resources/views/departments/edit.blade.php -->
@extends('admin.app')

@section('content')
<div class="container">
    <h1>Edit Departement</h1>
    <form action="{{ route('departement.update', $departement->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Departement Name</label>
            <input type="text" name="name" class="form-control" value="{{ $departement->name }}" required>
        </div>

        <div class="form-group">
            <label for="description">Departement Description</label>
            <textarea name="description" class="form-control">{{ $departement->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('departement.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection