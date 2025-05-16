<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\dataGuru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return response() -> json(dataGuru::all());
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1|max:120',
            'employee_id' => 'required|string|max:20|unique:data_gurus',
            'subject' => 'required|string|max:50',
        ]);

        $dataGuru = dataGuru::create($request->all());
        return response()->json($dataGuru, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dataGuru = dataGuru::find($id);
        if (!$dataGuru) {
            return response()->json(['message' => 'Data not found'], 404);
        }
        return response()->json($dataGuru);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
