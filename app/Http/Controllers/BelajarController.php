<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    //index
    public function index()
    {
        return '<h1>Belajar Laravel FROM Controller</h1>';
    }
    //buatlah function jumlah
    //$a = 10 $b = 10
    public function jumlah()
    {

    }
    public function product()
    {
        $data = ["baju", "celana", "sepatu"];
        $category = ["pria", "wanita", "anak"];
        return view('product', compact('data'));
        // return view('product', ['data' => $data]);
        // return view('product', $d);
    }
}
