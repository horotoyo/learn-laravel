<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\SantriModel;

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
    	return view($this->folder.'.create');
    }

    //proses input
    public function store(Request $request)
    {
        $santri             = new SantriModel;
        $messages = [
            'required'      => ':attribute wajib diisi!',
            'min'           => ':attribute harus diisi minimal :min karakter!',
            'max'           => ':attribute harus diisi maksimal :max karakter!',
        ];
    	
        $this->validate($request,[
               'nama'       => 'required',
               'email'      => 'required|email',
               'gender'     => 'required',
               'password'   => 'required|min:5'
        ], $messages);

        $santri->nama       = $request->nama;
        $santri->email      = $request->email;
        $santri->gender     = $request->gender;
        $santri->password   = bcrypt($request->password);
        $santri->save();

    	return redirect('admin/santri')->with('success', 'Data berhasil di Diinput!');
    }

    //untuk di tampilan edit
    public function edit($id)
    {
        $santri             = SantriModel::find($id);
        return view($this->folder.'.edit', compact('santri'));
    }

    //proses edit
    public function update(Request $request)
    {
        $id                 = $request->id;
        $santri             = SantriModel::find($id);

        $messages = [
            'required'      => ':attribute wajib diisi!',
            'min'           => ':attribute harus diisi minimal :min karakter!',
            'max'           => ':attribute harus diisi maksimal :max karakter!',
        ];
        
        $this->validate($request,[
               'nama'       => 'required',
               'email'      => 'required|email',
               'gender'     => 'required',
               'password'   => 'required|min:5'
        ], $messages);

        $santri->nama       = $request->nama;
        $santri->email      = $request->email;
        $santri->gender     = $request->gender;
        $santri->password   = bcrypt($request->password);
        $santri->save();

        return redirect('admin/santri')->with('success', 'Data berhasil di edit!');
    }

    //untuk menghapus data
    public function delete(Request $request, $id)
    {
        $santri             = SantriModel::find($id)->delete();
        return redirect('admin/santri')->with('success', 'Data berhasil di hapus');
    }
}
