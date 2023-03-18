<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use Illuminate\Http\Request;

class kelasController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kelas.index', [
            'kelas' => kelas::latest()->get(),
            'title' => 'Daftar Kelas',
            'header' => 'Data Kelas'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelas.create', [
            'title' => 'Daftar Kelas',
            'header' => 'Data Kelas'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'id_kelas_15483' => 'required|max:10',
            'nama_kelas_15483' => 'required|max:200',
        ]);
        kelas::create($validateData);
        toast('Data baru ditambahkan', 'success');

        return redirect()->route('kelas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('kelas.edit', [
            'title' => 'Daftar Kelas',
            'header' => 'Data Kelas',
            'kelas' => kelas::where('id_kelas_15483', $id)->firstOrFail()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'id_kelas_15483' => 'required|max:10',
            'nama_kelas_15483' => 'required|max:200',
        ];
        $validateData = $request->validate($rules);
        kelas::where('id_kelas_15483', $id)->update($validateData);
        toast('Data berhasil diperbarui', 'success');

        return redirect()->route('kelas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kelas::where('id_kelas_15483', $id)->delete();
        toast('Data berhasil dihapus', 'success');

        return redirect()->route('kelas.index');
    }
}
