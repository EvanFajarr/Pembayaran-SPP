<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use App\Models\siswa;
use App\Models\spp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class siswaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('siswa.index', [
            'siswa' => siswa::latest()->with('kelas', 'spp')->get(),

            'title' => 'Daftar Siswa',
            'header' => 'Data Siswa'
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create', [
            'title' => 'Daftar Siswa',
            'header' => 'Data Siswa',
            'kelas' => kelas::latest()->get(),
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
            'nisn_15483' => 'required|max:10',
            'nis_15483' => 'required|max:10',
            'nama_15483' => 'required|max:255',
            'password' => 'required|max:255',
            'id_kelas_15483' => 'required|max:10',
            'alamat_15483' => 'required|max:200',
            'no_telp_15483' => 'required|max:20',
            'id_spp_15483' => 'required|max:5',

        ]);

        $validateData['password'] = Hash::make($request->password);
        
        siswa::create($validateData);
        toast('Data Baru Ditambahkan', 'success');

        return redirect()->route('siswa.index');
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
        return view('siswa.edit', [
            'title' => 'Edit Siswa',
            'header' => 'Edit Siswa',
            'siswa' => siswa::where('nisn_15483', $id)->firstOrFail(),
            'kelas' => kelas::latest()->get(),
            'spp' => spp::latest()->get()
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
            'nisn_15483' => 'required|max:10',
            'nis_15483' => 'required|max:10',
            'nama_15483' => 'required|max:255',
            'id_kelas_15483' => 'required|max:10',
            'alamat_15483' => 'required|max:200',
            'no_telp_15483' => 'required|max:20',
            'id_spp_15483' => 'required|max:5',
        ];
        $validateData = $request->validate($rules);
        siswa::where('nisn_15483', $id)->update($validateData);
        toast('Data telah diperbarui', 'success');

        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        siswa::where('nisn_15483', $id)->delete();
        toast('Data berhasil Dihapus');

        return redirect()->route('siswa.index');
    }
}
