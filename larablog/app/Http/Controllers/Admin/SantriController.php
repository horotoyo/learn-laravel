<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\SantriModel;
use App\Model\ProvinsiModel;

class SantriController extends Controller
{
	public $folder	= '.admin.santri';
    public function index()
    {
    	$data['santri'] = SantriModel::orderby('id', 'desc')->get();
    	return view($this->folder.'.index', $data);
    }

    //untuk tampilan input/create
    public function create()
    {
        $provinsis          = ProvinsiModel::all();
    	return view($this->folder.'.create', compact('provinsis'));
    }

    //proses input
    public function store(Request $request)
    {
        $messages = [
            'required'      => ':attribute wajib diisi!',
            'min'           => ':attribute harus diisi minimal :min karakter!',
            'max'           => ':attribute harus diisi maksimal :max karakter!',
            'unique'        => ':attribute yang anda isi telah digunakan',
        ];
    	
        $this->validate($request,[
               'nama'       => 'required',
               'email'      => 'required|email|unique:santri,email',
               'gender'     => 'required',
               'password'   => 'required|min:5'
        ], $messages);

        $santri = SantriModel::create($request->all());

    	return redirect('admin/santri')->with('success', 'Data berhasil di Diinput!');
    }

    //untuk di tampilan edit
    public function edit($id)
    {
        $santri             = SantriModel::find($id);
        $provinsis          = ProvinsiModel::all();
        return view($this->folder.'.edit', compact('santri', 'provinsis'));
    }

    //proses edit
    public function update(Request $request)
    {
        $id                 = $request->id;
        $santri             = SantriModel::find($id);
        $santri->update($request->all());

        $messages = [
            'required'      => ':attribute wajib diisi!',
            'min'           => ':attribute harus diisi minimal :min karakter!',
            'max'           => ':attribute harus diisi maksimal :max karakter!',
            'unique'        => ':attribute yang anda isi telah digunakan',
        ];
        
        $this->validate($request,[
               'nama'           => 'required',
               'provinsi_id'    => 'required',
               'email'          => 'required|email|unique:santri,email,'.$id,
               'gender'         => 'required',
               'password'       => 'required|min:5'
        ], $messages);

        return redirect('admin/santri')->with('success', 'Data berhasil di edit!');
    }

    //untuk menghapus data
    public function delete(Request $request, $id)
    {
        $santri             = SantriModel::find($id)->delete();
        return redirect('admin/santri')->with('success', 'Data berhasil di hapus');
    }
}
