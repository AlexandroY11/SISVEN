@extends('layouts.app')

@section('title', 'Añadir Paymode')

@section('content')

<h1>Añadir Paymode</h1>

<form action="{{ route('paymodes.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="id" class="form-label">Id</label>
        <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled>
        <div id="idHelp" class="form-text">Código del Paymode *Se crea automáticamente</div>
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
        <label for="motivo" class="form-label">Name</label>
        <input type="text" class="form-control" id="motivo" aria-describedby="motivoHelp" name="motivo" placeholder="Motivo de la Visita">
    </div>
    <div class="mb-3">
        <label for="observation" class="form-label">Observation</label>
        <input type="text" class="form-control" id="observation" aria-describedby="observationHelp" name="observation" placeholder="Observation">
    </div>
    
    <div class="mt-3">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('visitas.index')}}" class="btn btn-danger">Cancelar</a>
    </div>
</form>
@endsection