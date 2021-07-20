<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Materi;
use App\Tugas;

class sController extends Controller
{

    public function index()
    {
    	$materi = DB::table('materi')->where('mapel',1)->paginate(10);

    	return view('guru.materi',['materi' => $materi]);

    }

    public function upMateri()
    {
		$materi = Materi::get();
		return view('guru.upMateri',['materi' => $materi]);
	}

    public function upload_materi(Request $request)
    {
		$this->validate($request, [
			'file' => 'required|file|image|mimes:png,jpg,jpeg|max:2048',
            'judul' => 'required',
			'deskripsi' => 'required'
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
            'mapel' => 1
		]);

		return redirect()->back();
	}

    public function read($id)
    {
        $materi = DB::table('materi')-> where('id',$id)->get();
        return view('guru.read',['materi' => $materi]);
    }

    public function hapusMateri($id)
    {
	DB::table('materi')->where('id',$id)->delete();
	return redirect('/materi');
    }


    public function tugas()
    {
    	$tugas = DB::table('tugas')->paginate(10);

    	return view('guru.tugas',['tugas' => $tugas]);

    }

    public function upTugas()
    {
		$tugas = Tugas::get();
		return view('guru.upTugas',['tugas' => $tugas]);
	}

    public function upload_tugas(Request $request)
    {
		$this->validate($request, [
			'file' => 'required|file|image|mimes:png,jpg,jpeg|max:2048',
            'judul' => 'required',
			'deskripsi' => 'required',
            'deadline' => 'required'
		]);

		// menyimpan data file yang diupload ke variabel $file

        $file = $request->file('file');

		$nama_file = time()."_".$file->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);

		Tugas::create([
			'file' => $nama_file,
			'deskripsi' => $request->deskripsi,
            'judul' => $request->judul,
            'deadline' => $request -> deadline
		]);

		return redirect()->back();
	}

    public function readTugas($id)
    {
        $tugas = DB::table('tugas')-> where('id',$id)->get();
        return view('guru.readTugas',['tugas' => $tugas]);
    }

    public function hapusTugas($id)
    {
	DB::table('tugas')->where('id',$id)->delete();
	return redirect('/tugas');
    }
}
