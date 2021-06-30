<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Materi;

class SopansantunController extends Controller
{
    public function sopansantun()
    {
    	// mengambil data dari table pesanan
        $materi = DB::table('materi')->paginate(10);

    	// mengirim data pendapatan ke view index
        return view('rbpl.sopansantun', ['materi' => $materi]);
    }

    public function tambahsopansantun()
    {
   // memanggil view tambah
       $materi = Materi::get();
       return view('rbpl.tambahsopansantun',['materi' => $materi]);
   }

   public function upload_sopansantun(Request $request)
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
        return view('rbpl.readsopansantun',['materi' => $materi]);
    }
}
