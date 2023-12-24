<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Log;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $animals = Animal::paginate(5); // Fetch 5 animals per page

    return view('user', ['animals' => $animals]);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $animal = new Animal;
        $animal->species = $request->species;
        $animal->age = $request->age;
        $animal->color = $request->color;
        $animal->description = $request->description;
        $animal->save();
        session()->flash('success', 'Animal added successfully.');
        return redirect('/user');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $animal = Animal::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Animal not found'], 404);
        }
    
        Log::info('Request data:', $request->all());
        Log::info('Animal instance:', $animal->toArray());
    
        $animal->species = $request->species;
        $animal->age = $request->age;
        $animal->color = $request->color;
        $animal->description = $request->description;
        $animal->save();
        session()->flash('success', 'Animal updated successfully.');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $animal = Animal::find($id);
    $animal->delete();
    session()->flash('success', 'Animal deleted successfully.');
    return back();
}

public function accept($id)
{
    $animal = Animal::find($id);
    $animal->status = 'accepted';
    $animal->save();
    session()->flash('success', 'Animal accepted successfully.');
    return redirect('/admin');
}

public function reject($id)
{
    $animal = Animal::find($id);
    $animal->delete(); // Delete the animal
    session()->flash('success', 'Animal rejected successfully.');
    return redirect('/admin');
}
}
