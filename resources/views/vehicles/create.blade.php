@extends('layout')

@section('content')
<link rel="stylesheet" href="">
 <h1>Crear un nuevo vehículo</h1>
 <form method="post" action="/vehicles">
        @csrf
        <label for="brand" class="form-label">Brand:</label>
        <input type="text" name="brand" id="brand" required class="form-control">
        <br>
        <label for="status" class="form-label">Status:</label>
        <select name="status" class="form-select" aria-label="Default select example">
            <option value="new">New</option>
            <option value="used">Used</option>
        </select>
        <br>
        <label for="year" class="form-label">Year:</label>
        <input type="text" name="year" id="year" required class="form-control">
        <br>
        <button type="submit"  class="btn btn-primary">Save</button>
 </form>
@endsection
