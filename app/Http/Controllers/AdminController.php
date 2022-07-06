<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminAuth;
use Log;
use App\Models\Student;
use App\Models\PlacedStudent;
use App\Models\Gallery;
use App\Models\Contact;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log as FacadesLog;
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
    function student(){
        return view('Backend.student');
    }
    function placedstudent(){
        $data= PlacedStudent::where('deleted_at',NULL)->get();
        Log::info('placed show'.json_encode($data));
        return view('Backend.placedstudent',compact('data'));
    }
    function saveplacedstudent(Request $req){
        Log::info('saveplacedstudent called');
        if($req->hasFile('filename'))
        {
            Log::info('saveplacedstudent called if');
            $image = $req->file('filename');
            $filename='gal-'.time().'-'.rand(0,99).'-'.rand(0,99).'.'.$req->filename->extension();
            if($req->filename->move(public_path('upload/placed-student'),$filename))
            {
                $data= [
                    'name'=>$req->name,
                    'companyname'=>$req->cname,
                    'uploadimage'=>$filename

                ];
                Log::info('data'.json_encode($data));
                if(placedstudent::create($data))
                {
                    return back()->with('success','Gallery Added Successfully');
                }
                else
                {
                    return back()->with('failed','OOP\'s !!! Gallery not added please try again....');
                }

            }
            else
            {
                return back()->with('failed','OOP\'s !!! Gallery not added please try again....');
            }
        }
        else
        {
            return back()->with('failed','OOP\'s !!! Gallery not added please Choose pic....');
        }
    }
    function delplaced($id)
    {
        $data = placedstudent::find($id);
        if($data->delete())
        {
            return redirect()->back()->with('message', 'Data deleted successfully');
        }
        else
        {
            return redirect()->back()->with('message', 'Data not deleted successfully');
        }
    }
    function gallery(){
        return view('Backend.gallery');
    }

    function savegallery(Request $req){
        Log::info('savegallery called');
        if($req->hasFile('filename'))
        {
            Log::info('savegallery called if');
            $image = $req->file('filename');
            $filename='gal-'.time().'-'.rand(0,99).'-'.rand(0,99).'.'.$req->filename->extension();
            if($req->filename->move(public_path('upload/gallery'),$filename))
            {
                $data= [
                    'text'=>$req->text,
                    'uploadimage'=>$filename
                ];
                Log::info('data'.json_encode($data));
                if(Gallery::create($data))
                {
                    return back()->with('success','Gallery Added Successfully');
                }
                else
                {
                    return back()->with('failed','OOP\'s !!! Gallery not added please try again....');
                }

            }
            else
            {
                return back()->with('failed','OOP\'s !!! Gallery not added please try again....');
            }
        }
        else
        {
            return back()->with('failed','OOP\'s !!! Gallery not added please Choose pic....');
        }
    }

    function contacts(){
        $data= Contact::where('deleted_at',NULL)->get();
        return view('Backend.contacts',compact('data'));

    }
    function deletecontact($id){
        $data = contact::find($id);
        if($data->delete())
        {
            return redirect()->back()->with('message', 'Data deleted successfully');
        }
        else
        {
            return redirect()->back()->with('message', 'Data not deleted successfully');
        }
    }
    function course(){
        return view('backend.course');
    }
   
}
