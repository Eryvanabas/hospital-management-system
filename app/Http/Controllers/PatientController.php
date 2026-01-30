<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function create()
    {
        return view('patients.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'age'   => 'required|integer',
            'phone' => 'required|string|max:20',
        ]);

        Patient::create([
            'name'  => $request->name,
            'age'   => $request->age,
            'phone' => $request->phone,
        ]);

        return redirect()->back()->with('success', 'Patient added successfully');
    }
}
