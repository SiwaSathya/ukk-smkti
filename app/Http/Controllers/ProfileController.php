<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()  {
        
        $profile = Profile::where('user_id', Auth::user()->id)->get(); 
        
       
        $check = $profile -> count();
        // dd($check);


if ($check === 0) {
    
    $empty = true;
    return view('profile/index', compact('profile'), ['empty' => $empty]);
} else {
    
    $empty = false;
    return view('profile/index', compact('profile'), ['empty' => $empty]);
    
}
        
        

    }

    public function edit($id){
        
        $profile = Profile::all()->where('user_id', Auth::user()->id)->first();
        return view('profile/edit', compact('profile'));
    }

    public function update(Request $request){

        $profile = Profile::where('user_id', Auth::user()->id)->first();
        $profile->nama = $request->nama;
        $profile->tempat_lahir = $request->tempat_lahir;
        $profile->tanggal_lahir = $request->tanggal_lahir;
        $profile->no_hp = $request->no_hp;
        $profile->alamat = $request->alamat;
        $profile->instansi = $request->instansi;

        $profile->update();

        return redirect('profile');
    }

    public function tambah(){
		$profile = Profile::all()->where('user_id', Auth::user()->id)->first();
        return view('profile/tambah', compact('profile'));
	}

    public function store(Request $request){
		// dd($id);
		$this->validate($request, [
			'nama' => 'required',
			'tempat_lahir' => 'required',
			'tanggal_lahir' => 'required',
			'no_hp' => 'required',
            'alamat' => 'required',
            'instansi' => 'required',

		]);
// dd(Auth::user()->id);
        Profile::create([
			'user_id' => Auth::user()->id,
			'nama' => $request->nama,
			'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'instansi' => $request->instansi,
			
		]);

		return redirect('profile');
    }

}
