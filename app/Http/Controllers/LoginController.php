<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
        
    }

    public function login(Request $request){
        $request->validate([
            'username_15483'=>'required',
            'password'=>'required',
            ] ,[
                'username_15483'=>'username wajib diisi',
                'password'=>'Pasword wajib diisi',
            ]);
            $infologin=[
                'username_15483'=>$request->username_15483,
                'password'=>$request->password,
            
            ];
            // $request->validate([
            //         'username_15483'=>'required',
            //         'password'=>'required',
            //         ] ,[
            //             'username_15483'=>'Username wajib diisi',
            //             'password'=>'Pasword wajib diisi',
            //         ]);
            //         $infologin=[
            //             'username_15483'=>$request->username_15483,
            //             'password'=>$request->password,
            //         ];
                    if (Auth::guard('user')->attempt($infologin)) {
                      
                            return redirect('/dashboard')->with('success','Berhasil login Admin');
                    
                    }else{
                    return redirect('/')->withErrors('Username dan Password salah');
                    }
        
      
    }

    function logout(Request $request){
        if(Auth::guard('user')->check()){
            Auth::guard('user')->logout();
        }
           return redirect()->route('login');
        }
}


// $request->validate([
//     'email'=>'required',
//     'password'=>'required',
//     ] ,[
//         'email'=>'Email wajib diisi',
//         'password'=>'Pasword wajib diisi',
//     ]);
//     $infologin=[
//         'email'=>$request->email,
//         'password'=>$request->password,
//     ];
//     if (Auth::guard('user')->attempt($infologin)) {
      
//             return redirect('/admin')->with('success','Berhasil login Admin');
    
//     }else{
//     return redirect('loginAdmin')->withErrors('Username dan Password salah');
//     }