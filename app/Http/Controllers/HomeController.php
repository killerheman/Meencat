<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use app\Models\Student;
use App\Models\Contact;
use App\Models\course;
use App\Models\PlacedStudent;

class HomeController extends Controller
{

    function index()
    {
        $courses = course::where('deleted_at',NULL)->get();
        $alumini = PlacedStudent::where('deleted_at',NULL)->get();
        return view('Frontend.index',compact('courses'),compact('alumini'));
    }

    function savecontact(Request $req)
    {
        $arr = [
            'name' => $req->name,
            'email' => $req->email,
            'subject' => $req->subject,
            'message' => $req->message
        ];
        if(Contact::create($arr))
        {
            return redirect()->back()->with('message', 'Form submitted successfully');
        }
        else
        {
            return redirect()->back()->with('message', 'Form submitted successfully');
        }
    }
function register(){
    return view('Frontend.register');
}
}
