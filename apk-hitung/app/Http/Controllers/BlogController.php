<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index($nama)
    {
    	return view('blog.index', ['nama'=>$nama]);
    }

    public function proses(Request $request)
    {
    	$panjang	= $request->panjang;
    	$lebar		= $request->lebar;
    	$luas 		= $panjang*$lebar;
    	return view('blog.result', compact('panjang', 'lebar', 'luas'));
    }
}
