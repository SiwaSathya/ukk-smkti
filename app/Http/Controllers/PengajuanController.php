<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengajuanController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index(){
    // Mengambil data dari data tabel siswa
    $pengajuan = DB::table('pengajuan')->paginate(5);

    // Mengirim data siswa ke view index
    return view('pengajuan/index',['pengajuan' => $pengajuan]);

  }

    public function cari(Request $request){
      // menangkap data pencarian
      $cari = $request->cari;

      // Query Database Untuk Mengambil Data
      $pengajuan = DB::table('pengajuan')
      ->where('nama','like',"%".$cari."%")
      ->paginate(10);

      // mengirim data siswa ke view index
      return view('pengajuan/index',['pengajuan'=>$pengajuan]);
    }

public function tambah() {
   return view('pengajuan/tambah');
    }
    // Function untuk tambah data ke tabel siswa
    public function store(Request $request){
      DB::table('pengajuan')->insert([
        'nama' => $request->nama,
        'tujuan_keberangkatan' => $request->tujuan_keberangkatan,
        'tanggal_keberangkatan' => $request->tanggal_keberangkatan,
        'tanggal_kembali' => $request->tanggal_kembali,   
        'tujuan' => $request->tujuan
        ]);
   // Mengalihkan halaman ke siswa
      return redirect('pengajuan');   
    }

    // Function untuk hapus data siswa
    public function hapus($id){
      DB::table('pengajuan')->where('id',$id)->delete();

      // Mengalihkan halaman ke siswa
         return redirect('pengajuan');
    }

    // function untuk edit data siswa
    public function edit($id){
      //Syntax untuk mengambil data siswa berdasarkan id
      $pengajuan = DB::table('pengajuan')->where('id',$id)->
      get();

      // passing data ke return view edit siswa
      return view('pengajuan/edit',['pengajuan' => $pengajuan]);
    }
      // Function untuk update data siswa
    public function update(Request $request){
      // update data siswa
      DB::table('pengajuan')->where('id',$request->id)->update([
        'nama' => $request->nama,
        'tujuan_keberangkatan' => $request->tujuan_keberangkatan,
        'tanggal_keberangkatan' => $request->tanggal_keberangkatan,
        'tanggal_kembali' => $request->tanggal_kembali,   
        'tujuan' => $request->tujuan
      ]);
      // mengalihkan ke return siswa
      return redirect('pengajuan');

    }
}




 