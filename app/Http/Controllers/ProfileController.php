<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function index($id)
    {
        // Declare variables and assign values as stated
        $name = "Donal Trump";
        $age = "75";

        // Create an associative array with the required data
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        // Set the cookie parameters
        $cookie_name = 'access_token';
        $cookie_value = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        // Create the cookie
        $cookie = cookie($cookie_name, $cookie_value, $minutes, $path, $domain, $secure, $httpOnly);

        // Return the response with the cookie
        return response()->json($data, 200)->cookie($cookie);
    }
}
