<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request)
    {
        $response = Http::get('http://127.0.0.1:8000/api/oefeningen'); 
        
        return Http::get('http://127.0.0.1:8000/api/oefeningen');
    }
}
