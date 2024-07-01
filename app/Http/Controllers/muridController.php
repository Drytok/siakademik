<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Murid;
use PDF;

class muridController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('murid',[
            "murid" => Murid::all(),
        ]);

    }

    public function downloadpdf()
    {
        $data=Murid::limit(20)->get();
        return view('cetakmurid.downloadmurid',compact('data'));
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
        $data['NIS'] = $request->NIS;
        $data['nama'] = $request->nama;
        $data['alamat'] = $request->alamat;
        $data['no_hp'] = $request->no_hp;
        $data['jenis_kelamin'] = $request->jenis_kelamin;
        $data['tempat_lahir'] = $request->tempat_lahir;
        $data['tanggal_lahir'] = $request->tanggal_lahir;
        Murid::create($data);
        return redirect('/murid')->with('status', 'Data Berhasil Di Tambahkan!!!');
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
        $data = Murid::find($id);
        $data->NIS = $request->NIS;
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->no_hp;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->save();

        return redirect('/murid')->with('status', 'Data Berhasil Di Update!!!');
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Murid::destroy($id);
        return redirect('/murid')->with('status', 'Data Berhasil Di Hapus!!!');
    }
}
