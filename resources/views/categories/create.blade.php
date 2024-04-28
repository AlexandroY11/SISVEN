@extends('layouts.app')

@section('title', 'Add Category')

@section('content')

<h1>Add Category</h1>

<form action="{{ route('categories.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="id" class="form-label">Id</label>
        <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled>
        <div id="idHelp" class="form-text">Category Code</div>
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" aria-describedby="nameHelp" name="name" placeholder="Category Name" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" id="description" aria-describedby="descriptionHelp" name="description" placeholder="Category description" required>
    </div>
    
    <div class="mt-3">
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('categories.index')}}" class="btn btn-danger">Cancel</a>
    </div>
</form>
@endsection