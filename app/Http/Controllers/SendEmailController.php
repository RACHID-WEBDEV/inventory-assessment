<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    function index()
    {
     return view('pages.send_email');
    }
    function send(Request $request)
    {
     $this->validate($request, [
      'name'     =>  'required',
      'email'  =>  'required|email',
      'message' =>  'required'
     ]);

        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message
        );

     Mail::to('info@roatek.com.ng')->send(new SendMail($data));
     return back()->with('success', 'Thanks for contacting us!');

    }
}

?>