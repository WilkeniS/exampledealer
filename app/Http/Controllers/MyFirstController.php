<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Vehicle;

class MyFirstController extends Controller
{
    //

public function index()
{
    $vehicles = Vehicle::paginate(10);
    return view('vehicles.index', ['vehicles' => $vehicles]);
}

public function create()
{
    return view('vehicles.create');
}

public function store(Request $request)
{
    $vehicle = new Vehicle;
    $vehicle->brand  = $request->input('brand');
    $vehicle->status = $request->input('status');
    $vehicle->year = $request->input('year');
    
    // dd($request->all());
    $vehicle->save();
    // dd($vehicle);

    return redirect('vehicles');
}

public function edit($id)
{
    $vehicle = Vehicle::find($id);
    return view('vehicles.edit', ['vehicle' => $vehicle]);
}

public function update(Request $request, $id)
{
    $vehicle = Vehicle::find($id);
    $vehicle->brand  = $request->input('brand');
    $vehicle->status = $request->input('status');
    $vehicle->year = $request->input('year');
    $vehicle->save();

    return redirect('/vehicles');
}

public function destroy($id)
{
    $vehicle = Vehicle::find($id);
    $vehicle->delete();

    return redirect('/vehicles')->with('success', 'Vehículo eliminado correctamente');
}



public function search(Request $request) {
        $searchTerm = $request-> input ('search');
        $results = Vehicle :: where('brand', 'LIKE', "%$searchTerm%")->get();

        return view('vehicles.search', ['results' => $results]);
            }


    
}



