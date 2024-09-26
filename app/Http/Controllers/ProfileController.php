<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $name = "Donal Trump";
        $age = "75";

        $data = [
            'name' => $name,
            'age' => $age,
            'id' => $request->id
        ];

        $cookieName = "access_token";
        $cookieValue = "123-XYZ";
        $cookieMinutes = 1;
        $cookiePath = "/";
        $cookieDomain =  $_SERVER["SERVER_NAME"];
        $cookieSecure = false;
        $cookieHttpOnly = true;

        $statusCode = 200;

        return response()->json($data,$statusCode)->cookie($cookieName,$cookieValue,$cookieMinutes,
            $cookiePath,$cookieDomain,$cookieSecure,$cookieHttpOnly);
    }
}
