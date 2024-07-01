<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisNilai;

class JenisNilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('jenis_nilai',[
            "jenis_nilai" => JenisNilai::all(),
        ]);
    }

    public function downloadpdf()
    {
        $data=JenisNilai::limit(20)->get();
        return view('cetakjenisnilai.downloadpdf',compact('data'));
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
        $data['nilai_uts'] = $request->nilai_uts;
        $data['nilai_uas'] = $request->nilai_uas;
        $data['nilai_tugas'] = $request->nilai_tugas;
        JenisNilai::create($data);
        return redirect('/jenis_nilai')->with('status', 'Data Berhasil Di Tambahkan!!!');
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
        $data = JenisNilai::find($id);
        $data->nilai_uts = $request->nilai_uts;
        $data->nilai_uas = $request->nilai_uas;
        $data->nilai_tugas = $request->nilai_tugas;
        $data->save();

        return redirect('/jenis_nilai')->with('status', 'Data Berhasil Di Update!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        JenisNilai::destroy($id);
        return redirect('/jenis_nilai')->with('status', 'Data Berhasil Di Hapus!!!');
    }
}
