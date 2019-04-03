<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\ProvinsiModel;

class ProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $folder  = '.admin.provinsi';
    public function index()
    {
        $data['provinsi'] = ProvinsiModel::orderby('id', 'desc')->get();
        return view($this->folder.'.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->folder.'.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $provinsi = new ProvinsiModel;
        $provinsi = ProvinsiModel::create($request->all());
        return redirect('admin/provinsi')->with('success', 'Data berhasil di Diinput!');
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
        $provinsi             = ProvinsiModel::find($id);
        return view($this->folder.'.edit', compact('provinsi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id                 = $request->id;
        $provinsi           = ProvinsiModel::find($id);
        $provinsi->update($request->all());

        $messages = [
            'required'      => ':attribute wajib diisi!',
        ];
        
        $this->validate($request,[
               'nama'       => 'required',
        ], $messages);

        return redirect('admin/provinsi')->with('success', 'Data berhasil di edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $provinsi             = ProvinsiModel::find($id)->delete();
        return redirect('admin/provinsi')->with('success', 'Data berhasil di hapus');
    }
}
