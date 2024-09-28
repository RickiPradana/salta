<?php

use App\Http\Controllers\CaptchaController;
use GuzzleHttp\Client;
use App\Http\Middleware\CustomAuth;
use App\Models\Visit;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/ip', function () {
    $num1 = rand(1, 10);
    $num2 = rand(1, 10);

    // Store the answer in the session
    // Session::put('captcha_answer', $num1 + $num2);

    return view('captcha', ['num1' => $num1, 'num2' => $num2]);
});
Route::post('/cek_ip', [CaptchaController::class, 'cek_ip'])->name('cek_ip');
// Route::get('/cek_ip', function () {
//     $visits = Visit::select('ip', 'created_at')->get(); // Retrieve both fields
//     $data = [];
//     // dd($visits);

//     $client = new Client();

//     foreach ($visits as $visit) {
//         $ip = $visit->ip; // Get the IP address
//         $createdAt = $visit->created_at; // Get the created_at timestamp

//         // Make the API request
//         $response = $client->get("http://ip-api.com/json/{$ip}");
//         $apiData = json_decode($response->getBody(), true); // Collect the API response

//         // Add the created_at field to the API data
//         $apiData['created_at'] = $createdAt;

//         $data[] = $apiData; // Collect the modified response
//         // dd($data);
//     }

//     // Pass the data to the view
//     return view('ip', ['data' => $data]);
// });

Route::get('/', function () {
    visitor()->visit();
    return view('index');
});

Route::get('/login', function () {
    return 'login';
})->name('login');

Route::middleware([CustomAuth::class])->group(function () {
    Route::get('/admin', function () {
        return 'admin';
    });

    Route::get('/profile', function () {
        return 'profile';
    })->withoutMiddleware([CustomAuth::class]);
});
