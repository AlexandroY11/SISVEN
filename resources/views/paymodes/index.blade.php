@extends("layouts.app")

@section("title", "Paymodes")
@section("content")
        <h1>Paymodes</h1>

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('paymodes.create')}}" class="btn btn-success mb-3">Añadir Paymode</a>
        <table class="table">
            <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Name</th>
                  <th scope="col">Observation</th>
                  <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($paymodes as $paymode )
                
                <tr>
                    <th scope="row">{{ $paymode->id }}</th>
                    <td>{{ $paymode->name }}</td>
                    <td>{{ $paymode->observation }}</td>
                    
                    <td> 
                      <a href="{{ route('paymodes.edit', ['paymode' => $paymode->id])}}" class="btn btn-warning">Editar</a>
                      <form action="{{ route('paymodes.destroy', ['paymode' => $paymode->id])}}" method="POST" style="display: inline-block">
                        @method('delete')
                        @csrf
                        <input type="submit" class="btn btn-danger" value="Eliminar">
                    </form>
                    </td>
                </tr>
              @endforeach  
            </tbody>
        </table>
      </div>  

      @endsection