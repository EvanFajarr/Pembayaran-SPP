<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\pembayaran;
use App\Models\siswa;
use App\Models\spp;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembayaran= pembayaran::orderBy ('id','desc')->get();
        return view('pembayaran.index')->with('pembayaran',$pembayaran);
    }

    public function tampil(Request $request)
    {
        return view('pembayaran.create', [
            'siswa' => siswa::latest()->with('kelas', 'spp')->get(),
        ]);
    }



    // public function history()
    // {
    //        $nisn= auth()->guard('siswa')->user()->nisn;
    // $pembayaran = pembayaran::where('nisn', $nisn)->get();
    // return view('home.index')->with('pembayaran', $pembayaran);
    // }

    // $nisn= auth()->guard('siswa')->user()->nisn;
    // $pembayaran = pembayaran::where('nisn', $userId)->get();
    // return view('home.index')->with('pembayaran', $pembayaran);

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembayaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('nisn', $request->nisn);
        Session::flash('tanggal', $request->tanggal);
        Session::flash('id_spp', $request->id_spp);
        Session::flash('bulan', $request->bulan);
        Session::flash('tahun', $request->tahun);
        Session::flash('jumlah', $request->jumlah);
   
        $request->validate([
            'nisn' => 'required',
            'tanggal' => 'required',
            'id_spp' => 'required',
            'bulan' => 'required',
            'tahun' => 'required',
            'jumlah' => 'required',
           
        ], [
            'nisn.required' => 'Nisn wajib diisi',
            'tanggal.required' => 'Tanggal wajib diisi',
            'id_spp.required' => 'Id Spp wajib diisi',
            'bulan.required' => 'Bulan wajib diisi',
            'tahun.required' => 'tahun wajib diisi',
            'jumlah.required' => 'jumlah wajib diisi',
        ]); 



        $pembayaran = [
            'nisn' => $request->input('nisn'),
            'tanggal'=>$request->input('tanggal'),
            'id_spp'=>$request->input('id_spp'),
            'bulan'=>$request->input('bulan'),
            'tahun'=>$request->input('tahun'),
            'jumlah'=>$request->input('jumlah'),
        ];

    
        pembayaran::create($pembayaran);
        return redirect()->to('pembayaran')->with('success', 'Berhasil menambahkan pembayaran');
    
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
