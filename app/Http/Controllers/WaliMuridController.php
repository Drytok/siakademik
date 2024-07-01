<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WaliMurid;
use PDF;

class WaliMuridController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('wali_murid',[
            "wali_murid" => WaliMurid::all(),
        ]);
    }

    public function downloadpdf()
    {
        $data=WaliMurid::limit(20)->get();
        return view('cetakwali.downloadpdf',compact('data'));
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
        $data['nama_wali'] = $request->nama_wali;
        $data['alamat'] = $request->alamat;
        WaliMurid::create($data);
        return redirect('/wali_murid')->with('status', 'Data Berhasil Di Tambahkan!!!');
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
        $data = WaliMurid::find($id);
        $data->nama_wali = $request->nama_wali;
        $data->alamat = $request->alamat;
        $data->save();

        return redirect('/wali_murid')->with('status', 'Data Berhasil Di Update!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        WaliMurid::destroy($id);
        return redirect('/wali_murid')->with('status', 'Data Berhasil Di Hapus!!!');
    }
}
