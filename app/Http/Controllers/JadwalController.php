<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalPelajaran;
use PDF;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('jadwal_pelajaran',[
            "jadwal_pelajaran" => JadwalPelajaran::all(),
        ]);
    }

    public function downloadpdf()
    {
        $data=JadwalPelajaran::limit(20)->get();
        return view('cetakjadwal.downloadpdf',compact('data'));
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
        $data['jam_masuk'] = $request->jam_masuk;
        $data['hari_masuk'] = $request->hari_masuk;
        JadwalPelajaran::create($data);
        return redirect('/jadwal_pelajaran')->with('status', 'Data Berhasil Di Tambahkan!!!');
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
        $data = JadwalPelajaran::find($id);
        $data->jam_masuk = $request->jam_masuk;
        $data->hari_masuk = $request->hari_masuk;
        $data->save();

        return redirect('/jadwal_pelajaran')->with('status', 'Data Berhasil Di Update!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        JadwalPelajaran::destroy($id);
        return redirect('/jadwal_pelajaran')->with('status', 'Data Berhasil Di Hapus!!!');
    }
}
