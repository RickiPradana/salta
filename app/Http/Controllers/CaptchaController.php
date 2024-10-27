<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DecodeIP;
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
        $cek1 = $request->input('from');  // Offset
        $cek2 = $request->input('to'); // Limit
        $visits = Visit::offset($cek1)
            ->limit($cek2)
            ->get();
        // dd($visits);
        $data = [];
        $client = new Client();

        foreach ($visits as $visit) {
            $id_ip = $visit->id;
            $ip = $visit->ip;
            $createdAt = $visit->created_at;

            // Make the API request
            $response = $client->get("http://ip-api.com/json/{$ip}");
            $apiData = json_decode($response->getBody(), true);

            // Ensure API response is valid
            if (isset($apiData['status']) && $apiData['status'] === 'success') {
                $apiData['created_at'] = $createdAt;

                // Update or create the record in the database
                // DecodeIP::updateOrCreate(
                //     ['id_ip' => $id_ip], // Condition to find the record
                //     [
                //         'country' => $apiData['country'] ?? null,
                //         'countryCode' => $apiData['countryCode'] ?? null,
                //         'region' => $apiData['region'] ?? null,
                //         'regionName' => $apiData['regionName'] ?? null,
                //         'city' => $apiData['city'] ?? null,
                //         'zip' => $apiData['zip'] ?? null,
                //         'lat' => $apiData['lat'] ?? null,
                //         'lon' => $apiData['lon'] ?? null,
                //         'timezone' => $apiData['timezone'] ?? null,
                //         'isp' => $apiData['isp'] ?? null,
                //         'org' => $apiData['org'] ?? null,
                //         'as' => $apiData['as'] ?? null,
                //         'query' => $apiData['query'] ?? null,
                //     ] // Data to be updated or created
                // );
                // dd($cek);
                // Add to data array for view
                $data[] = $apiData;
                // return $data;
            } else {
                // Handle API error if needed
                $data[] = [
                    'error' => 'Unable to fetch data for IP: ' . $ip,
                    'created_at' => $createdAt,
                ];
            }
        }

        // Return the view with the data
        return view('ip', ['data' => $data]);
    }
    public function cek_ip_decode(Request $request)
    {
        $decode_ip = DecodeIP::all();
        // dd($decode_ip);
        // Return the view with the data
        return view('ip', ['data' => $decode_ip]);
    }
}
