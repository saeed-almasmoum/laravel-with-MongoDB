<?php

use App\Models\CustomerCdur;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/info', function () {
//     phpinfo();
// });

Route::get('/test-mongo', function () {
    try {
        $db = DB::connection('mongodb')->getDatabaseName();
        return "Connected to database: $db";
    } catch (\Exception $e) {
        return 'Connection error: ' . $e->getMessage();
    }
});

Route::get('/create_eloquent_mongo', function () {
    return CustomerCdur::create([
        'first_name' => 'saeed',
        'family_name' => 'almasmous',
        'address' => 'free syria',

    ]);
});

Route::get('/get_eloquent_mongo', function () {

    return CustomerCdur::paginate(10);
});
