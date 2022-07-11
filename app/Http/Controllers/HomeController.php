<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use App\Models\Student;
use App\Models\Contact;
use App\Models\course;
use App\Models\Gallery;
use App\Models\PlacedStudent;

class HomeController extends Controller
{

    function index()
    {
        $courses = course::where('deleted_at',NULL)->get();
        $alumini = PlacedStudent::where('deleted_at',NULL)->get();
        $gallery = Gallery::where('deleted_at',NULL)->get();
        return view('Frontend.index',compact('courses','alumini','gallery'));
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

    function register()
    {
        return view('Frontend.register');
    }

    function regcourse($id)
    {
        $course = course::where('id', $id)->first();
        return view('Frontend.register',compact('course'));
    }

    function saveregister(Request $req)
    {
        $data = [
            'name' => $req->name,
            'fname' => $req->fname,
            'dob' => $req->dob,
            'aadharno' => $req->aadharno,
            'mobile' => $req->mobile,
            'email' => $req->email,
            'maxqualification' => $req->maxqualification,
            'dreamcompany' => $req->dreamcompany,
            'course' => $req->course,
            'price' => $req->price
        ];
        if(Student::create($data))
        {
            return redirect()->back()->with('message', 'Registration successfull');
        }
        else
        {
            return redirect()->back()->with('message', 'Registration not successfull');
        }
    }
}
