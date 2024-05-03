@extends('layouts.app')

@section('title', 'Add Product')

@section('content')

<h1>Add Product</h1>

<form action="{{ route('products.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="id" class="form-label">Id</label>
        <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled>
        <div id="idHelp" class="form-text">Product Code</div>
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" aria-describedby="nameHelp" name="name" placeholder="Product Name" required>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" id="price" aria-describedby="priceHelp" name="price" placeholder="Product Price" required>
    </div>
    <div class="mb-3">
        <label for="stock" class="form-label">Stock</label>
        <input type="text" class="form-control" id="stock" aria-describedby="stockHelp" name="stock" placeholder="Product Stock" required>
    </div>

    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-select" name="category_id" id="category" required>
            <option selected disabled value="">Choose...</option>
            @foreach ($categories as $category) 
                <option value="{{ $category->id }}">{{ $category->id }} - {{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    
    <div class="mt-3">
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('products.index')}}" class="btn btn-danger">Cancel</a>
    </div>
</form>
@endsection