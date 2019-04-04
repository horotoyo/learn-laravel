<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\GuruModel;


class GuruController extends Controller
{
    public $folder	= '.admin.guru';
    public function index()
    {
    	$data['guru'] = GuruModel::orderby('id', 'desc')->paginate(5);
    	return view($this->folder.'.index', $data);
    }

    //untuk tampilan input/create
    public function create()
    {
    	return view($this->folder.'.create');
    }

    //proses input
    public function store(Request $request)
    {
        $guru             = new GuruModel;
        $messages = [
            'required'      => ':attribute wajib diisi!',
            'min'           => ':attribute harus diisi minimal :min karakter!',
            'max'           => ':attribute harus diisi maksimal :max karakter!',
        ];
    	
        $this->validate($request,[
               'nama'       => 'required',
               'nip'        => 'required',
               'hp'         => 'required|numeric',
               'email'      => 'required|email',
               'gender'     => 'required',
        ], $messages);

        $guru->nama       = $request->nama;
        $guru->nip        = $request->nip;
        $guru->hp         = $request->hp;
        $guru->email      = $request->email;
        $guru->gender     = $request->gender;
        $guru->save();

    	return redirect('admin/guru')->with('success', 'Data berhasil di Diinput!');
    }

    //untuk di tampilan edit
    public function edit($id)
    {
        $guru             = GuruModel::find($id);
        return view($this->folder.'.edit', compact('guru'));
    }

    //proses edit
    public function update(Request $request)
    {
        $id                 = $request->id;
        $guru             = GuruModel::find($id);

        $messages = [
            'required'      => ':attribute wajib diisi!',
            'min'           => ':attribute harus diisi minimal :min karakter!',
            'max'           => ':attribute harus diisi maksimal :max karakter!',
        ];
        
        $this->validate($request,[
               'nama'       => 'required',
               'nip'        => 'required',
               'hp'         => 'required|numeric',
               'email'      => 'required|email',
               'gender'     => 'required',
        ], $messages);

        $guru->nama       = $request->nama;
        $guru->nip        = $request->nip;
        $guru->hp         = $request->hp;
        $guru->email      = $request->email;
        $guru->gender     = $request->gender;
        $guru->save();

        return redirect('admin/guru')->with('success', ' Data berhasil di edit!');
    }

    //untuk menghapus data
    public function delete(Request $request, $id)
    {
        $guru             = GuruModel::find($id)->delete();
        return redirect('admin/guru')->with('success', ' Data berhasil di hapus');
    }
}
