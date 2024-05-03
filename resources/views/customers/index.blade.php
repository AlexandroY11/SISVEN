@extends("layouts.app")

@section("title", "Paymodes")
@section("content")
        <h1>Customers</h1>

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('customers.create')}}" class="btn btn-success mb-3">Añadir Customer</a>
        <table class="table">
            <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Document Number</th>
                  <th scope="col">First Name</th>
                  <th scope="col">Last Name</th>
                  <th scope="col">Address</th>
                  <th scope="col">Birthday</th>
                  <th scope="col">Phone Number</th>
                  <th scope="col">Email</th>
                  <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($customers as $customer )
                
                <tr>
                    <th scope="row">{{ $customer->id }}</th>
                    <td>{{ $customer->document_number }}</td>
                    <td>{{ $customer->first_name }}</td>
                    <td>{{ $customer->last_name }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>{{ $customer->birthday }}</td>
                    <td>{{ $customer->phone_number }}</td>
                    <td>{{ $customer->email }}</td>
                                       
                    <td> 
                      <a href="{{ route('customers.edit', ['customer' => $customer->id])}}" class="btn btn-warning">Editar</a>
                      <form action="{{ route('customers.destroy', ['customer' => $customer->id])}}" method="POST" style="display: inline-block">
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