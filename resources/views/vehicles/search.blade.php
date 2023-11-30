
@extends('layout') 

@section('content')
    <h1>Search Results</h1>

    @foreach($results as $result)
   
        <p>{{ $result->brand }}</p>
   
    @endforeach
@endsection
