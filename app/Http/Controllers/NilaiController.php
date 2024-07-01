<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilai;
use App\Models\Murid;
use App\Models\Kelas;
use App\Models\JenisNilai;
use PDF;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('nilai',[
            "nilai" => Nilai::all(),
            "murid" => Murid::all(),
            "kelas" => Kelas::all(),
            "nilai_uts" => JenisNilai::all(),
            "nilai_uas" => JenisNilai::all(),
            "nilai_tugas" => JenisNilai::all(),
        ]);
        
    }

    public function downloadpdf()
    {
        $data=Nilai::limit(20)->get();
        return view('cetaknilai.downloadpdf',compact('data'));
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
        $data['nama'] = $request->nama;
        $data['kelas'] = $request->kelas;
        $data['semester'] = $request->semester;
        $data['nilai_uts'] = $request->nilai_uts;
        $data['nilai_uas'] = $request->nilai_uas;
        $data['nilai_tugas'] = $request->nilai_tugas;
        Nilai::create($data);
        return redirect('/nilai')->with('status', 'Data Berhasil Di Tambahkan!!!');
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
        $data = Nilai::find($id);
        $data->nama = $request->nama;
        $data->kelas = $request->kelas;
        $data->semester = $request->semester;
        $data->nilai_uts = $request->nilai_uts;
        $data->nilai_uas = $request->nilai_uas;
        $data->nilai_tugas = $request->nilai_tugas;
        $data->save();
        
        return redirect('/nilai')->with('status', 'Data Berhasil Di Update!!!');
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Nilai::destroy($id);
        return redirect('/nilai')->with('status', 'Data Berhasil Di Hapus!!!');
    }
}
