<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Response;
use App\Http\Controllers\SSOController;
use App\Pengumuman;
use Session;
use App\users;
use App\Http\Controllers\Carbon\Carbon;

class PengumumanController extends Controller
{
    public function index()
    {
		//CHECK IF USER IS LOGGED IN OR NOT
        $SSOController = new SSOController(); //INISIALISASI CLASS SSOCONTROLLER
        $check = $SSOController->loggedIn(); //SIMPAN NILAI FUNCTION LOGGEDIN();
        $a = $SSOController->getId(); // ngambil id dari sso, liat methodnya di pesan model
        $users = new users;
        $users = users::where('spesifik_role','divisi riset')->get(); //dapetin semua user yg spesifik role nya divisi riset
        // get semua pengumuman berdasarkan staf risetnya 
        $allPengumuman = Pengumuman::all();
        if($check) {
            return view('pengumuman', compact('users', 'allPengumuman'));
        }
        else {
            return view('login');
        }
    }

    public function kelola()
    {
		//CHECK IF USER IS LOGGED IN OR NOT
        $SSOController = new SSOController(); //INISIALISASI CLASS SSOCONTROLLER
        $check = $SSOController->loggedIn(); //SIMPAN NILAI FUNCTION LOGGEDIN();
        if($check) {
            return view('kelolapengumuman');
        }
        else {
            return view('login');
        }
    }

    public function edit($id){
        //CHECK IF USER IS LOGGED IN OR NOT
        $SSOController = new SSOController(); //INISIALISASI CLASS SSOCONTROLLER
        $check = $SSOController->loggedIn(); //SIMPAN NILAI FUNCTION LOGGEDIN();
        if($check) {  
            $pengumuman = Pengumuman::find($id);
            //dd($pengumuman);
            if(!$pengumuman){
                abort(404);
            } else {
                return view('kelolapengumumansingle',compact('pengumuman'));    
            }
        }
        else {
            return view('login');
        }
    }

    //METHOD STORE PENGUMUMAN KE DATABASE
    public function store(Request $request){
        //VALIDASI INPUT
        $this->validate($request, [
            'judul' => 'required|max:50',
            'nomor' => 'max:50',
            'kategori' => 'required',
            'konten' => 'required'
            ]);
        //BIKIN PENGUMUMAN BARU
        
        if($request->file('file')->isValid()){
            $msg = \App\Pengumuman::create($request->all());
            //untuk upload file, request file dengan segala extensi
            $filename = $request->file('file')->getClientOriginalName();
            //memindahkan file yg dilampirkan tadi ke path /public/upload
            $request->file('file')->move(base_path().'/public/upload/', $filename);
            $msg->file = $filename;
            //SAVE FILEnya
            $msg->save();
            // $pengumuman = Pengumuman::create($request->all());
            // //untuk upload file, request file dengan segala extensi
            // $filename = $request->file('file')->getClientOriginalExtension();
            // //memindahkan file yg dilampirkan tadi ke path /public/upload
            // $request->file('file')->move(base_path().'/public/upload/', $filename);
            // $pengumuman->file = $filename;
            // //SAVE FILEnya
            // $pengumuman->save();
        } else {
            $pengumuman = Pengumuman::create($request->all());
            $pengumuman->file = null;
            $pengumuman->save();
        }
        // Session untuk Success Notif
        Session::flash('flash_message','Pengumuman berhasil dibuat');
        // then rederict back to pesan
        return redirect('pengumuman');
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'judul' => 'required|max:50',
            'nomor' => 'max:50',
            'kategori' => 'required',
            'konten' => 'required'
            ]);
        //UPDATE PENGUMUMAN BARU
        $pengumuman = Pengumuman::find($id);
        if($request->file('file')->isValid()){
            $pengumuman->judul = $request->judul;
            $pengumuman->nomor = $request->nomor;
            $pengumuman->status = $request->status;
            $pengumuman->kategori = $request->kategori;
            $pengumuman->konten = $request->konten;
            $pengumuman->save();
        } else {
            $pengumuman->judul = $request->judul;
            $pengumuman->nomor = $request->nomor;
            $pengumuman->status = $request->status;
            $pengumuman->kategori = $request->kategori;
            $pengumuman->konten = $request->konten;
            $pengumuman->file = $request->file;
            //untuk upload file, request file dengan segala extensi
            $filename = $request->file('file')->getClientOriginalName();
            //memindahkan file yg dilampirkan tadi ke path /public/upload
            $request->file('file')->move(base_path().'/public/upload/', $filename);
            $pengumuman->file = $filename;
            //SAVE FILEnya
            $pengumuman->save();
        }
        // Session untuk Success Notif
        Session::flash('flash_message','Pengumuman berhasil diperbarui');
        // then rederict back to pesan
        return redirect('pengumuman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pengumuman = Pengumuman::find($id);
        $pengumuman->delete();
        Session::flash('flash_message', 'Pengumuman berhasil dihapus!');
        return redirect('pengumuman');
        // //Post::destroy($id);
        //return redirect('pengumuman');
    }

    public function publikasi($id){
        $pengumuman = Pengumuman::find($id);
        $pengumuman->status = 1;
        //$pengumuman->updated_at = \Carbon\Carbon::now();
        $pengumuman->save();
        Session::flash('flash_message', 'Pengumuman berhasil dipublish!');
        return redirect('pengumuman');
    }

}
