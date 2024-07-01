<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use PDF;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('guru',[
            "guru" => Guru::all(),
        ]);
    }

    public function downloadpdf()
    {
        $data=Guru::limit(20)->get();
        return view('cetakguru.downloadpdf',compact('data'));
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
        $data['agama'] = $request->agama;
        $data['jenis_kelamin'] = $request->jenis_kelamin;
        $data['no_hp'] = $request->no_hp;
        $data['email'] = $request->email;
        $data['alamat'] = $request->alamat;
        $data['pendidikan'] = $request->pendidikan;
        Guru::create($data);
        return redirect('/guru')->with('status', 'Data Berhasil Di Tambahkan!!!');
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
        $data = Guru::find($id);
        $data->nama = $request->nama;
        $data->agama = $request->agama;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->no_hp = $request->no_hp;
        $data->email = $request->email;
        $data->alamat = $request->alamat;
        $data->pendidikan = $request->pendidikan;
        $data->save();

        return redirect('/guru')->with('status', 'Data Berhasil Di Update!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Guru::destroy($id);
        return redirect('/guru')->with('status', 'Data Berhasil Di Hapus!!!');
    }
}
