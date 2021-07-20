<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Materi;

class MenggambarController extends Controller
{

    public function menggambar()
    {
    	$materi = DB::table('materi')->where('mapel',3)->paginate(10);

    	return view('guru.menggambar',['materi' => $materi]);

    }

    public function upMenggambar()
    {
		$materi = Materi::get();
		return view('guru.upMenggambar',['materi' => $materi]);
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
            'judul' => $request->judul,
            'mapel' => 3
		]);

		return redirect()->back();
	}

    public function read($id)
    {
        $materi = DB::table('materi')-> where('id',$id)->get();
        return view('guru.read',['materi' => $materi]);
    }

    public function hapus($id)
    {
	DB::table('materi')->where('id',$id)->delete();
	return redirect('/menggambar');
    }
}
