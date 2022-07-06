<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use app\Models\Student;
use App\Models\Contact;

class HomeController extends Controller
{
    function index()
    {
        Log::info('indexpage called');
        return view('index');
    }

    function savecontact(Request $req)
    {
        Log::info('savecontact called');
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

}
