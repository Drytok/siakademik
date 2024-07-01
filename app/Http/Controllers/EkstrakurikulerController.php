<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ekstrakurikuler;

class EkstrakurikulerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ekstrakurikuler',[
            "ekstrakurikuler" => Ekstrakurikuler::all(),
        ]);
    }

    public function downloadpdf()
    {
        $data=Ekstrakurikuler::limit(20)->get();
        return view('cetakekstra.downloadpdf',compact('data'));
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
        $data['ekstrakurikuler'] = $request->ekstrakurikuler;
        $data['hari_masuk'] = $request->hari_masuk;
        $data['jam_masuk'] = $request->jam_masuk;
        Ekstrakurikuler::create($data);
        return redirect('/ekstrakurikuler')->with('status', 'Data Berhasil Di Tambahkan!!!');
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
        $data = Ekstrakurikuler::find($id);
        $data->ekstrakurikuler = $request->ekstrakurikuler;
        $data->hari_masuk = $request->hari_masuk;
        $data->jam_masuk = $request->jam_masuk;
        $data->save();

        return redirect('/ekstrakurikuler')->with('status', 'Data Berhasil Di Update!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Ekstrakurikuler::destroy($id);
        return redirect('/ekstrakurikuler')->with('status', 'Data Berhasil Di Hapus!!!');
    }
}
