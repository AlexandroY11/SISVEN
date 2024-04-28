@extends('layouts.app')

@section('title', 'Edit Categories')

@section('content')

<h1>Edit {{$category->name}}</h1>

<form action="{{ route('categories.update', ['category' => $category->id]) }}" method="POST">
    @method('put')
    @csrf
    <div class="mb-3">
        <label for="id" class="form-label">Id</label>
        <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled value="{{$category->id}}">
        <div id="idHelp" class="form-text">Category Code</div>
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" aria-describedby="nameHelp" name="name" placeholder="Category Name" required value="{{$category->name}}">
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" id="description" aria-describedby="descriptionHelp" name="description" placeholder="Category Description" required value="{{$category->description}}">
    </div>
    
    <div class="mt-3">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('categories.index')}}" class="btn btn-warning">Cancel</a>
    </div>
</form>
@endsection