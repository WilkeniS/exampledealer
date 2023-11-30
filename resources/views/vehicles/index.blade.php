@extends('layout')
@section('content')
    <h1>Vehículos</h1>
    <form action="{{ route('vehicles.search') }}" method="GET">
  <div class="input-group mb-3">
    <input type="text" name="search" class="form-control" placeholder="Buscar vehículo">
    <div class="input-group-append">
      <button class="btn btn-outline-secondary" type="submit">Buscar</button>
    </div>
  </div>
</form>
    <ul>
        @foreach ($vehicles as $vehicle)
           <ul class="list-group">
             <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $vehicle->brand }} - {{ $vehicle->status }} - {{ $vehicle->year }}
                <a href="/vehicles/{{ $vehicle->id }}/edit" class="btn btn-primary float-right">Editar</a>
             </li>
            </ul>  
    
        @endforeach
    </ul>
    <div class="d-flex justify-content-center">
    {{ $vehicles->links('pagination::bootstrap-4') }}
    </div>
    <button type="button" class="btn btn-success"><a href="vehicles/create" style="text-decoration:none" color="white"><font color="white">Crear</font></a></button>
@endsection