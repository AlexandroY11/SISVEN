@extends("layouts.app")

@section("title", "Categories")
@section("content")
    <h1>Categories list</h1>
    <a href="{{ route('categories.create')}}" class="btn btn-success mb-3">Add Category</a>

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
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($categories as $category )
            
            <tr>
                <th scope="row">{{ $category->id }}</th>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td> 
                    <a href="{{ route('categories.edit', ['category' => $category->id])}}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('categories.destroy', ['category' => $category->id])}}" method="POST" style="display: inline-block">
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
    



