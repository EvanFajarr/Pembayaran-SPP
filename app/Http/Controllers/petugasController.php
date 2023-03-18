<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class petugasController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('petugas.index', [
            'petugas' => User::latest()->get(),
            'title' => 'Daftar Petugas',
            'header' => 'Data Petugas',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('petugas.create', [
            'title' => 'Tambah Petugas',
            'header' => 'Tambah Petugas',
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
            'username_15483' => 'required|unique:users',
            'nama_petugas_15483' => 'required|max:255',
            'level_15483' => 'required'
        ]);
        $validateData['password_15483'] = Hash::make('password');
        User::create($validateData);
        toast('Data berhasil ditambahkan', 'success');

        return redirect()->route('petugas.index');
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
        return view('petugas.edit', [
            'title' => 'Edit petugas',
            'header' => 'Edit petugas',
            'petugas' => User::where('id_petugas_15483', $id)->firstOrFail()
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
            'username_15483' => 'required',
            'nama_petugas_15483' => 'required|max:255',
            'level_15483' => 'required',
        ];

        if ($request->username_15483 !== $request->old_username_15483) {
            $rules['username_15483'] = 'required|unique:users';
        }

        $validatedData = $request->validate($rules);
        $validatedData['password_15483'] = $request->old_password_15483;

        User::where('id_petugas_15483', $id)->update($validatedData);
        toast('Data Telah Diperbarui', 'success');

        return redirect()->route('petugas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id_petugas_15483', $id)->delete();
        toast('Data Berhasil Dihapus', 'success');

        return redirect()->route('petugas.index');
    }
}
