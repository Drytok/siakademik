<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pegawai',[
            "pegawai" => Pegawai::all(),
        ]);
    }

    public function downloadpdf()
    {
        $data=Pegawai::limit(20)->get();
        return view('cetakpegawai.downloadpdf',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // field database = name di blade
        $data['nama_pegawai'] = $request->nama_pegawai;
        $data['alamat'] = $request->alamat;
        $data['jabatan'] = $request->jabatan;
        Pegawai::create($data);
        return redirect('/pegawai')->with('status', 'Data Berhasil Di Tambahkan!!!');
        // return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Pegawai::find($id);
        $data->nama_pegawai = $request->nama_pegawai;
        $data->alamat = $request->alamat;
        $data->jabatan = $request->jabatan;
        $data->save();

        return redirect('/pegawai')->with('status', 'Data Berhasil Di Update!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pegawai::destroy($id);
        return redirect('/pegawai')->with('status', 'Data Berhasil Di Hapus!!!');
    }
}
