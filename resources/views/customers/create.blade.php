@extends('layouts.app')

@section('title', 'Añadir Customer')

@section('content')

<h1>Añadir Customer</h1>

<form action="{{ route('customers.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="id" class="form-label">Id</label>
        <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled>
        <div id="idHelp" class="form-text">Código del Customer *Se crea automáticamente</div>
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <select class="form-select" name="paymode_id" id="paymode" required>
            <option selected disabled value="">Elegir...</option>
            {{-- @foreach ($mascotas as $mascota) 
                <option value="{{ $mascota->id }}">{{ $mascota->id }} - {{ $mascota->nombre }}</option>
            @endforeach --}}
        </select>
    </div>

    <div class="mb-3">
        <label for="id" class="form-label">Id</label>
        <input type="id" class="form-control" id="id" aria-describedby="idHelp" name="id" placeholder="Id del Paymode">
    </div>
    <div class="mb-3">
        <label for="document_number" class="form-label">Document Number</label>
        <input type="text" class="form-control" id="document number" aria-describedby="document_numberHelp" name="document_number" placeholder="Document_number">
    </div>
    <div class="mb-3">
        <label for="first_name" class="form-label">First Name</label>
        <input type="text" class="form-control" id="first_name" aria-describedby="firts_nameHelp" name="first_name" placeholder="First_name">
    </div>

    <div class="mb-3">
        <label for="last_name" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="last_name" aria-describedby="last_nameHelp" name="last_name" placeholder="Last_name">
    </div>

    <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control" id="address" aria-describedby="addressHelp" name="address" placeholder="Address">
    </div>

    <div class="mb-3">
        <label for="birthday" class="form-label">Birthday</label>
        <input type="text" class="form-control" id="birthday" aria-describedby="birthdayHelp" name="birthday" placeholder="Birthday">
    </div>

    <div class="mb-3">
        <label for="phone_number" class="form-label">Phone Number</label>
        <input type="text" class="form-control" id="phone_number" aria-describedby="phone_numberHelp" name="phone_number" placeholder="Phone_number">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Email">
    </div>
    
    <div class="mt-3">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('visitas.index')}}" class="btn btn-danger">Cancelar</a>
    </div>
</form>
@endsection