<?php

namespace App\Http\Controllers;
use App\Models\Provincia;
use Illuminate\Http\Request;

class ProvinciaController extends Controller
{
    public function index()
    {
       return Provincia::all();
    }
}
