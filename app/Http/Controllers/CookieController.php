<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CookieController extends Controller
{
    public function clearCookies(Request $request)
    {
        $response = new Response('Clearing cookies...');
        
        // Clear all cookies
        $response->withCookie(Cookie::forget('cookieName1'));
        $response->withCookie(Cookie::forget('cookieName2'));
        // Add more cookie names as needed
        
        return $response;
    }
}
