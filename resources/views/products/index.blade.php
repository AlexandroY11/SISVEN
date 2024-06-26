@extends("layouts.app")

@section("title", "Products")
@section("content")
    <h1>Products list</h1>
    <a href="{{ route('products.create')}}" class="btn btn-success mb-3">Add Product</a>

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Stock</th>
                <th scope="col">Category</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($products as $product )
            
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td>{{ $product->name }}</td>
                <td>${{ $product->price }}</td>
                <td>{{ $product->stock }} und</td>
                <td>{{ $product->category_name }}</td>
                <td> 
                    <a href="{{ route('products.edit', ['product' => $product->id])}}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('products.destroy', ['product' => $product->id])}}" method="POST" style="display: inline-block">
                        @method('delete')
                        @csrf
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach  
        </tbody>
    </table>
    </div>  

@endsection
    



