<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AdminController extends Controller
{
    public function index()
{
    $animals = Animal::all(); // Fetch all animals from the database

    return view('admin', ['animals' => $animals]);
}
}
