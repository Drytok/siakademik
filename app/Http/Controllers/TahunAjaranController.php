<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TahunAjaran;
use PDF;

class TahunAjaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tahun_ajaran',[
            "tahun_ajaran" => TahunAjaran::all(),
        ]);
    }

    public function downloadpdf()
    {
        $data=TahunAjaran::limit(20)->get();
        return view('cetakta.downloadpdf',compact('data'));
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
        $data['tahun_ajaran'] = $request->tahun_ajaran;
        $data['semester'] = $request->semester;
        TahunAjaran::create($data);
        return redirect('/tahun_ajaran')->with('status', 'Data Berhasil Di Tambahkan!!!');
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
        $data = TahunAjaran::find($id);
        $data->tahun_ajaran = $request->tahun_ajaran;
        $data->semester = $request->semester;
        $data->save();

        return redirect('/tahun_ajaran')->with('status', 'Data Berhasil Di Update!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        TahunAjaran::destroy($id);
        return redirect('/tahun_ajaran')->with('status', 'Data Berhasil Di Hapus!!!');
    }
}
