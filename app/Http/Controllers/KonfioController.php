<?php

namespace App\Http\Controllers;

use App\Http\Requests\KonfioRequest;
use App\Konfio;
use Illuminate\Http\Request;

class KonfioController extends Controller
{
    public function index()
    {
        return view('konfio.index');
    }

    public function store(KonfioRequest $request)
    {
        Konfio::create([
            'saludo' => $request->get('saludo')
        ]);

    }
}
