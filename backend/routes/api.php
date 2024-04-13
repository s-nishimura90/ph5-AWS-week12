<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Log;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/dummy-data', function () {
    $data = [
        [
            'name' => 'oo',
            'email' => 'Michael Andrew Fox@example.com',
            'age' => 30,
        ],
        [
            'name' => 'Jane Smith',
            'email' => 'jane.smith@example.com',
            'age' => 25,
        ],
        [
            'name' => 'Bob Johnson',
            'email' => 'bob.johnson@example.com',
            'age' => 35,
        ],
    ];
    return response()->json($data);
});

Route::get('/users', function () {
    Log::info('ログ出力テスト');  // ここを追加
    return User::all();
});
