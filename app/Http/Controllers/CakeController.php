<?php

namespace App\Http\Controllers;

use App\Models\Cake;

class CakeController extends Controller
{
    public  function index()
    {
        return view('cakes', [
            'cakes' => Cake::all()
        ]);
    }
}
