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
    	$data['santri'] = SantriModel::orderby('id', 'desc')->paginate(6);
    	return view($this->folder.'.index', $data);
    }

    public function create()
    {
    	return view($this->folder.'.create');
    }

    public function store(Request $request)
    {
    	$santri  			= new SantriModel;
    	$santri->nama 		= $request->nama;
    	$santri->email 		= $request->email;
    	$santri->gender 	= $request->gender;
    	$santri->password 	= bcrypt($request->password);
    	$santri->save();

    	return redirect('admin/santri')->with('success', 'Data berhasil di input');
    }

    public function delete($id)
    {
        $data['santri'] = SantriModel::where('id', $id)->delete();
        return redirect('admin/santri', $data)->with('success', 'Data berhasil di hapus');
    }
}
