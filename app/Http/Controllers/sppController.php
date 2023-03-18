<?php

namespace App\Http\Controllers;

use App\Models\spp;
use Illuminate\Http\Request;

class sppController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('spp.index', [
            'spp' => spp::latest()->get(),
            'title' => 'Daftar spp',
            'header' => 'Data spp,'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spp.create', [
            'title' => 'Daftar spp',
            'header' => 'Data spp',
            'spp' => spp::latest()->get()
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
            'tahun_15483' => 'required|min:4|max:4',
            'nominal_15483' => 'required|integer',
        ]);

        spp::create($validateData);
        toast('Data telah ditambahkan', 'success');
        return redirect()->route('spp.index');
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
        return view('spp.edit', [
            'title' => 'Edit spp',
            'header' => 'Edit spp',
            'spp' => spp::where('id_spp_15483', $id)->firstOrFail()
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
            'tahun_15483' => 'required|min:4|max:4',
            'nominal_15483' => 'required|integer',

        ];

        $validatedData = $request->validate($rules);

        spp::where('id_spp_15483', $id)->update($validatedData);
        toast('Data Telah Diperbarui', 'success');

        return redirect()->route('spp.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        spp::where('id_spp_15483', $id)->delete();
        toast('Data Berhasil Dihapus', 'success');

        return redirect()->route('spp.index');
    }
}
