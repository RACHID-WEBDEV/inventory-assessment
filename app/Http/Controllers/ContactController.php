<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use Illuminate\Support\Facades\Auth;
use DB;
//i includes this
use Illuminate\Support\Facades\Mail;
use App\Mail\Contactmail;
// use App\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('/pages.contact');
    }
    public function store(Request $request)
    {
    //     echo"<pre>";
    // print_r($request->all());
    //    echo"</pre>";
       $data = $this->validate($request, [
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'location'=>'required',
            'comment'=>'required',
            
        ]);
    
        $contact = new contact;
        $contact->name = $request-> input('name');
        $contact->location = $request-> input('location');
        $contact->phone = $request-> input('phone');
        $contact->email = $request-> input('email');
        $contact->comment = $request-> input('comment');

        $contact->save();

        //Define Admin Email
        $admin_email = 'info@roatek.com.ng';
        //call mailable
        //pass data
        mail::to($admin_email)->send(new Contactmail($data));
        
         return redirect('/contact')->with('success', 'Your Message Sent Successfully');


    }   
}     
