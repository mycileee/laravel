<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;

class DatakabelController extends Controller
{
    public function index()
    {
        return view('index');
    }

     public function stock()
    {
        $datas=Stock::all();
        return view('stock',compact('datas'));
    }
}
