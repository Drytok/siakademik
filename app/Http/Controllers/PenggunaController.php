<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use PDF;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pengguna',[
            "pengguna" => Pengguna::all(),
        ]);
    }

    public function downloadpdf()
    {
        $data=Pengguna::limit(20)->get();
        return view('cetakpengguna.downloadpdf',compact('data'));
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
        $data['username'] = $request->username;
        $data['Email'] = $request->email;
        Pengguna::create($data);
        return redirect('/pengguna')->with('status', 'Data Berhasil Di Tambahkan!!!');
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
        $data = Pengguna::find($id);
        $data->username = $request->username;
        $data->Email = $request->email;
        $data->save();

        return redirect('/pengguna')->with('status', 'Data Berhasil Di Update!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pengguna::destroy($id);
        return redirect('/pengguna')->with('status', 'Data Berhasil Di Hapus!!!');
    }
}
