<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function index($nama)
    {
    	return view('kamar.index', ['nama'=>$nama]);
    }

    public function proses(Request $request)
    {
    	$panjang	= $request->panjang;
    	$lebar		= $request->lebar;
    	$luas 		= $panjang*$lebar;
    	return view('kamar.result', compact('panjang', 'lebar', 'luas'));
    }
}
