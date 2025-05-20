<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ibadah;
use Illuminate\Http\Request;

class IbadahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(ibadah::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_ibadah' => 'required|string|max:255',
            'jenis_ibadah' => 'required|string|max:255',
            'waktu' => 'required|date',
        ]);

        $ibadah = ibadah::create( $request->all());
        return response()->json([
            'message' => 'Ibadah created successfully',
            'data' => $ibadah,
        ], 201);
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
        $ibadah = ibadah::findOrFail($id);

        if(!$ibadah){
            return response()->json([
                'message' => 'Ibadah not found',
            ], 404);
        }

        $request->validate([
            'nama_ibadah' => 'required|string|max:255',
            'jenis_ibadah' => 'required|string|max:255',
            'waktu' => 'required|date',
        ]);

        $ibadah->update($request->all());
        return response()->json([
            'message' => 'Ibadah updated successfully',
            'data' => $ibadah,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ibadah = ibadah::findOrFail($id);

        if(!$ibadah){
            return response()->json([
                'message' => 'Ibadah not found',
            ], 404);
        }

        $ibadah->delete();
        return response()->json([
            'message' => 'Ibadah deleted successfully',
        ], 200);
    }
}
