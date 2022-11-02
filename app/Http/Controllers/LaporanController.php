<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use Response;

class LaporanController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	$laporan = laporan::get();

    	return view('laporan/index', ['laporan'=>$laporan]); 

    }

    public function hapus($id){
    	$laporan = Laporan::find($id);
    	$laporan ->delete();
    	return redirect('laporan');

        Laporan::where('id',$id)->delete();
		return redirect()->back();
    }

	public function tambah($id){
		$laporan = Laporan::get();
		return view('laporan/tambah', ['laporan' => $laporan, 'id' => $id]);
	}

	public function store(Request $request, $id){
		// dd($id);
		$request->file('file');
		$this->validate($request, [
			'pengajuan_id' => 'unique:laporan',
			'kendala' => 'required',
			'kesimpulan' => 'required',
			'file' => 'required|file|mimes:pdf|max:2048'

		]);

		// menyimpan data file yang diupload ke variabel $file
		$laporan = $request->file('file');

		$nama_file = time()."_".$laporan->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$laporan->move($tujuan_upload,$nama_file);

		Laporan::create([
			'pengajuan_id' => $id,
			'kendala' => $request->kendala,
			'kesimpulan' => $request->kesimpulan,
			'file' => $nama_file
		]);

		return redirect('laporan');
	}
	// MENAMPILKAN PDF
	public function show($id){
		$laporan = Laporan::firstWhere('file', $id)->file;
		$path = public_path('data_file/'.$laporan);

		return Response::make(file_get_contents($path), 200, [
			'Content-Type' => 'application/pdf',
			'Content-Disposition' => 'inline; laporan=" '.$laporan.'"'
		]);


	}

}
