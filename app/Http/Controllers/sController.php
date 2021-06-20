<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Materi;


class sController extends Controller
{

    public function index()
    {
    	$materi = DB::table('materi')->paginate(10);

    	return view('rbpl.materi',['materi' => $materi]);

    }

    public function upMateri()
    {
		$materi = Materi::get();
		return view('rbpl.upMateri',['materi' => $materi]);
	}

    public function upload_materi(Request $request)
    {
		$this->validate($request, [
			'file' => 'required|file|image|mimes:png,jpg,jpeg|max:2048',
            'judul' => 'required',
			'deskripsi' => 'required',
		]);

		// menyimpan data file yang diupload ke variabel $file

        $file = $request->file('file');

		$nama_file = time()."_".$file->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);

		Materi::create([
			'file' => $nama_file,
			'deskripsi' => $request->deskripsi,
            'judul' => $request->judul
		]);

		return redirect()->back();
	}

    public function read($id)
    {
        $materi = DB::table('materi')-> where('id',$id)->get();
        return view('rbpl.read',['materi' => $materi]);
    }

}
