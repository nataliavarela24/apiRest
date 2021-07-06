<?php

namespace App\Http\Controllers;
use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    
    //GET listar registro
    public function index()
    {
       return Region::all();
    }
}
