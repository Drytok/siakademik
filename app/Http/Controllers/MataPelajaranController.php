<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataPelajaran;
use PDF;

class MataPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mata_pelajaran',[
            "mata_pelajaran" => MataPelajaran::all(),
        ]);
    }

    public function downloadpdf()
    {
        $data=MataPelajaran::limit(20)->get();
        return view('cetakmapel.downloadpdf',compact('data'));
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
        $data['nama_pelajaran'] = $request->nama_pelajaran;
        $data['kkm'] = $request->kkm;
        MataPelajaran::create($data);
        return redirect('/mata_pelajaran')->with('status', 'Data Berhasil Di Tambahkan!!!');
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
        $data = MataPelajaran::find($id);
        $data->nama_pelajaran = $request->nama_pelajaran;
        $data->kkm = $request->kkm;
        $data->save();

        return redirect('/mata_pelajaran')->with('status', 'Data Berhasil Di Update!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        MataPelajaran::destroy($id);
        return redirect('/mata_pelajaran')->with('status', 'Data Berhasil Di Hapus!!!');
    }
}
