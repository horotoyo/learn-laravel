<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Orangtua;
use App\Model\Santri;

class OrangtuaController extends Controller
{    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Orangtua::orderBy('created_at', 'desc')->paginate(5);
        $nomor  = 1;
        return view('orangtua.index', compact('data', 'nomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Santri::all();
        return view('orangtua.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Orangtua::create($request->all());
        return redirect('/orangtua');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orangtua   = Orangtua::find($id);
        $santri     = Santri::all();
        return view('orangtua.edit', compact('orangtua', 'santri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Orangtua::find($id)->update($request->all());
        return redirect('/orangtua');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Orangtua::find($id)->delete();
        return redirect('/orangtua');
    }}
