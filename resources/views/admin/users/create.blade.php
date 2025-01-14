<!-- resources/views/departments/create.blade.php -->
@extends('admin.app')

@section('content')
<div class="container">
    <h1>Add New Departement</h1>
    <form action="{{ route('departments.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Departement Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Departement Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('depart.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection