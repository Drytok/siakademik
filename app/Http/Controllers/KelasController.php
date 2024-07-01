<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kelas',[
            "kelas" => Kelas::all(),
        ]);
    }

    public function downloadpdf()
    {
        $data=Kelas::limit(20)->get();
        return view('cetakkelas.downloadpdf',compact('data'));
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
        $data['kelas'] = $request->kelas;
        $data['kapasitas'] = $request->kapasitas;
        Kelas::create($data);
        return redirect('/kelas')->with('status', 'Data Berhasil Di Tambahkan!!!');
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
        $data = Kelas::find($id);
        $data->kelas = $request->kelas;
        $data->kapasitas = $request->kapasitas;
        $data->save();

        return redirect('/kelas')->with('status', 'Data Berhasil Di Update!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kelas::destroy($id);
        return redirect('/kelas')->with('status', 'Data Berhasil Di Hapus!!!');
    }
}
