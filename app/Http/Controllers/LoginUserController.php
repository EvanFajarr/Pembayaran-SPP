<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\siswa;

class LoginUserController extends Controller
{
    public function index(){
        return view('login.index');
        
    }
    public function loginSiswa(Request $request){
        $request->validate([
            'nis_15483'=>'required',
            'password'=>'required'
            ] ,[
                'nis_15483'=>'nis wajib diisi',
                'password'=>'Pasword wajib diisi',
            ]);
            $infologin=[
                'nis_15483'=>$request->nis_15483,
                'password'=>$request->password,
            ];
            if (Auth::guard('siswa')->attempt($infologin)){
                   return redirect('/home')->with('success','Berhasil Login ');
            }else{
            return redirect('/loginSiswa')->withErrors('Username dan Password salah');
            }
      
    }
    function logout(Request $request){
        if(Auth::guard('siswa')->check()){
            Auth::guard('siswa')->logout();
        }
           return redirect()->route('login');
        }
}
