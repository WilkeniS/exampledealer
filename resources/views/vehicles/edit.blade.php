@extends('layout')

@section('content')
    <h1>Editar vehículo</h1>
    <div class="container">
        <form method="post" action="/vehicles/{{ $vehicle->id }}" class="form">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="brand" class="form-label">Brand:</label>
                <input type="text" name="brand" id="brand" value="{{ $vehicle->brand }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="status" class="form-label">Status:</label>
                <select name="status" class="form-select" aria-label="Default select example">
                    <option value="new" @if ($vehicle->status === 'New') selected @endif>New</option>
                    <option value="used" @if ($vehicle->status === 'Used') selected @endif>Used</option>
                </select>
            </div>
            <div class="form-group">
                <label for="year" class="form-label">Year:</label>
                <input type="text" name="year" id="year" value="{{ $vehicle->year }}" class="form-control" required>
            </div>
            <div class="button-group">
                <button type="submit" class="btn btn-success">Actualizar</button>
                <button type="button" onclick="confirmDelete()" class="btn btn-danger">Eliminar</button>
            </div>
        </form>

        <form method="post" action="/vehicles/{{ $vehicle->id }}" id="delete-form">
            @csrf
            @method('DELETE')
        </form>
    </div>

    <script>
        function confirmDelete() {
            if (confirm('¿Estás seguro de que deseas eliminar este vehículo?')) {
                document.getElementById('delete-form').submit();
            }
        }
    </script>
@endsection
