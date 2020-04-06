<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Account;

class LoginController extends Controller
{
    //
    
    public function loginUser(Request $input){
        $cekemail = Account::where('email_username',$input->Email)->first();
        if ($cekemail == NULL){
            return redirect('/')->with('alert', 'Input Salah!');
        }else{
            if ($cekemail->password == $input->Password){
                Session::put('iduser',$cekemail->id_user);
                Session::put('nama',$cekemail->nama);

                return redirect('home');
            }else{
                return redirect('/')->with('alert', 'Input Salah!');
            }
        }
    }

    public function logoutUser(){
        Session::flush();

        return redirect('/');
    }

    public function registUser(Request $input){
        $inputdata = new Account;
        $inputdata->email_username = $input->Email;
        $inputdata->password = $input->Password;
        $inputdata->nama_user = $input->Nama;
        $inputdata->save();
        return redirect('/')->with('alert','akun dibuat');
    }
}
