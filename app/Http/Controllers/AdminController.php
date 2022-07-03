<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminAuth;
use app\Models\Student;
use app\Models\PlacedStudent;
use app\Models\Gallery;
use app\Models\Contact;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    function login(){
        return view('login');
    }
    
    function adminLogin(Request $req)
    {
        $validate= $req-> validate([
            'email'=> 'required |email',
            'password'=> 'required'
        ]);

        $email=$req->email;
        $password=md5($req->password);
        $result = AdminAuth::where('email', $email)->first();
        if(Hash::check($req->password, $result->password)){
            $email= $result->email;
            Session::put(['admin'=>$email]);
            Session::flash('success', 'Welcome Admin');
            return redirect('backend/admin/dashboard');
        }else{
            Session::flash('error', 'Invalid Login details');
            return redirect('/admin');
        }
    }
    
    function logout(){
        Session::flush();
        return view('index');
    }
    function dashboard(){
        return view('Backend.dashboard');
    }
}
