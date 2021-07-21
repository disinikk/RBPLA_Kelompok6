<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Materi;
use App\Tugas;
use App\HasilTugas;

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

    public function tugasHasil()
    {
    	$tugas = DB::table('hasil_tugas')->paginate(10);

    	return view('guru.hasilTugas',['tugas' => $tugas]);

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
    public function readTugasHasil($id)
    {
        $tugas = DB::table('hasil_tugas')-> where('id',$id)->get();
        return view('guru.readHasilTugas',['tugas' => $tugas]);
    }

    public function hapusTugas($id)
    {
	DB::table('tugas')->where('id',$id)->delete();
	return redirect('/tugas');
    }
    public function hapusTugasHasil($id)
    {
	DB::table('hasil_tugas')->where('id',$id)->delete();
	return redirect('/tugas/hasil');
    }


    //Controller murid

    public function indexMurid()
    {
    	$materi = DB::table('materi')->where('mapel',1)->paginate(10);

    	return view('murid.materi',['materi' => $materi]);

    }

    public function readMurid($id)
    {
        $materi = DB::table('materi')-> where('id',$id)->get();
        return view('murid.read',['materi' => $materi]);
    }


    public function tugasMurid()
    {
    	$tugas = DB::table('tugas')->paginate(10);

    	return view('murid.tugas',['tugas' => $tugas]);

    }

    public function upTugasMurid($id)
    {
		$tugas = Tugas::get();
		return view('murid.upTugas',['tugas' => $tugas, 'id' => $id]);
	}

    public function upload_tugasMurid(Request $request, $id)
    {
		$this->validate($request, [
            'nama' => 'required',
			'file' => 'required|file|image|mimes:png,jpg,jpeg|max:2048',
			'deskripsi' => 'required'
		]);


        $file = $request->file('file');
        $result = DB::table('tugas')->select('judul')->where('id',$id)->value('judul');
		$nama_file = time()."_".$file->getClientOriginalName();
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);

		HasilTugas::create([
            'nama' => $request->nama,
			'file' => $nama_file,
			'deskripsi' => $request->deskripsi,
            'judul' => $result
		]);

		return redirect()->back();
	}

    public function readTugasMurid($id)
    {
        $tugas = DB::table('tugas')-> where('id',$id)->get();
        return view('murid.readTugas',['tugas' => $tugas]);
    }

}
