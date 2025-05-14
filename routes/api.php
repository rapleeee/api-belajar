<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SiswaController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('siswa', SiswaController::class);


// Route::get('/hello', function () {
//     return response()->json(['message' => 'Hello, World!']);
// });

// Route::get('/siswa', function (){
//     return response()->json([
//         'data' => [
//             'id' => 1,
//             'name' => 'Alex',
//             'age' => 42
//         ],
//         [
//             'id' => 2,
//             'name' => 'Budi',
//             'age' => 23
//         ],
//         [
//             'id' => 3,
//             'name' => 'Cindy',
//             'age' => 19
//         ],
//         [
//             'id' => 4,
//             'name' => 'Diana',
//             'age' => 25
//         ],
//         [
//             'id' => 5,
//             'name' => 'Eko',
//             'age' => 30
//         ]
//     ]);
// });
