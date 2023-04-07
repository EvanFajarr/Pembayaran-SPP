<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\pembayaran;


class CetakController extends Controller
{
    // public function index($id){
    //     $data = pembayaran::find($id);
    //     return view('cetak/index',['pembayaran'=>$data]);
    // }

    public function index()
    {
        $pembayaran= pembayaran::orderBy ('id','desc')->get();
        return view('cetak.index')->with('pembayaran',$pembayaran);
    }
}
