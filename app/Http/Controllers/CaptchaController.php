<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CaptchaController extends Controller
{
    public function cek_ip(Request $request)
    {
        // Validate the reCAPTCHA response
        $validator = Validator::make($request->all(), [
            'captcha' => 'required|integer|in:' . $request->input('captcha_result'),
        ]);

        if ($validator->fails()) {
            // Flash an error message to the session
            Session::flash('error', 'Invalid CAPTCHA. Please try again.');

            // Return an error response (could be a redirect or a JSON response)
            return redirect()->back()->withInput();
            // If you want to return just a message instead of redirecting, use:
            // return response()->json(['error' => Session::get('error')]);
        }

        // Continue with your existing logic
        $visits = Visit::select('ip', 'created_at')->get();
        $data = [];
        $client = new Client();

        foreach ($visits as $visit) {
            $ip = $visit->ip;
            $createdAt = $visit->created_at;

            // Make the API request
            $response = $client->get("http://ip-api.com/json/{$ip}");
            $apiData = json_decode($response->getBody(), true);
            $apiData['created_at'] = $createdAt;

            $data[] = $apiData;
        }

        return view('ip', ['data' => $data]);
    }
}
