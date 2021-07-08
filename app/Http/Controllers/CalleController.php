<?php

namespace App\Http\Controllers;
use App\Models\Calle;
use Illuminate\Http\Request;

class CalleController extends Controller
{
    public function index()
    {
       return Calle::all();
    }
}
