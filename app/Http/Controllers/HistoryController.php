<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\pembayaran;
use App\Models\siswa;
class HistoryController extends Controller
{
    public function index()
    {
        $nisn= auth()->guard('siswa')->user()->nisn_15483;
        $pembayaran= pembayaran::where ('nisn',$nisn)->get();
        return view('home.index')->with('pembayaran',$pembayaran);
    }
}
