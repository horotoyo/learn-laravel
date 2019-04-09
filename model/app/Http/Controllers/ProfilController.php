<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Profil;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avas = Profil::all();
        return view('listprofil', compact('avas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profil');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'file'  => 'require|image|max:2000'
        ]);

        $profil             = new Profil;
        $profil->depan      = $request->depan;
        $profil->belakang   = $request->belakang;
        $profil->alamat     = $request->alamat;

        $nama_file          = $request->file('file');
        $path               = $nama_file->store('public/files');
        $profil->file       = $path;
        $profil->save();
        
        // mengambil nama asli file
        $request->file('file')->getClientOriginalName();
        // format file
        $request->file('file')->getClientOriginalExtension();
        // ukuran file
        $request->file('file')->getClientSize();


        return redirect('/profil');
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
        return view('profil');
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
        Profil::update($request->all());
        return redirect('/listprofil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profil   = Profil::find($id);
        $profil->delete();
        return redirect('/listprofil');
    }
}
