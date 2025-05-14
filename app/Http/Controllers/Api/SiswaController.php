<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\dataSiswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'data' => [
                [
                    'id' => 1,
                    'name' => 'Alex',
                    'age' => 42
                ]
            ]
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1|max:120',
            'grade' => 'required|string|max:10',
            'nisn' => 'required|string|max:20|unique:data_siswas',
            'address' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
        ]);

        $dataSiswa = dataSiswa::create($request->all());
        return response()->json($dataSiswa, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
