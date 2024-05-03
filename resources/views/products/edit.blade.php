@extends('layouts.app')

@section('title', 'Edit Products')

@section('content')

<h1>Edit {{$product->name}}</h1>

<form action="{{ route('products.update', ['product' => $product->id]) }}" method="POST">
    @method('put')
    @csrf
    <div class="mb-3">
        <label for="id" class="form-label">Id</label>
        <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled value="{{$product->id}}">
        <div id="idHelp" class="form-text">Product Code</div>
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" aria-describedby="nameHelp" name="name" placeholder="Product Name" required value="{{$product->name}}">
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" id="price" aria-describedby="priceHelp" name="price" placeholder="Product Price" required value="{{$product->price}}">
    </div>
    <div class="mb-3">
        <label for="stock" class="form-label">Stock</label>
        <input type="text" class="form-control" id="stock" aria-describedby="stockHelp" name="stock" placeholder="Product Stock" required value="{{$product->stock}}">
    </div>

    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-select" name="category_id" id="category" required>
            <option selected disabled value="">Choose...</option>
            @foreach ($categories as $category) 
                <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>
                    {{$category->id}} - {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>
    
    <div class="mt-3">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('products.index')}}" class="btn btn-warning">Cancel</a>
    </div>
</form>
@endsection