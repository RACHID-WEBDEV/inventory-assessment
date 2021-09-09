HOW TO SEND RECIEVE EMAIL FROM CONTACT FORM IN LARAVEL
first we create model and controller for the form 
php artisan make:model Contact -mcr
 
THEN
we create a view/layout of the contact form like this

    <form action="{{url('contactadd')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="row">
            <div class="col-lg-6">
                <div class="form_item">
                    <input type="text" name="name" placeholder="Your Name" required>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form_item">
                    <input type="email" name="email" placeholder="Your Email" required>
                </div>
            </div>
        </div>

        <div class="form_item">
            <input type="number" name="phone" placeholder="Your Phone Number" required>
        </div>

        <div class="form_item">
            <textarea name="comment" placeholder="Enter Your Message..." required></textarea>
        </div>

        <button type="submit" class="btn bg_default_blue">Send Message</button>

    </form>

   <p>THEN</p> 
    Create a success page like inc.messege or message to display after the form is sent sucessfully

    <p> THEN create 2 route to process the form at web.php like this</p> 

     Route::get('/contact','App\Http\Controllers\ContactController@index'); -->view page

    Route::post('/contactadd','App\Http\Controllers\ContactController@store'); --- save page

    also if you create a success page for your form  create a route for it like
    
    Route::post('/contact/success','App\Http\Controllers\ContactController@sucess'); --- success page

    else no need use your inc.message

    <p> THEN</p>
    go your ContactController create the index,store and success (i.e if you include success page like this)

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
            'comment'=>'required',
            
        ]);
    
        $contact = new contact;
        $contact->name = $request-> input('name');
        $contact->phone = $request-> input('phone');
        $contact->email = $request-> input('email');
        $contact->comment = $request-> input('comment');

        $contact->save();

        //Define Admin Email
        $admin_email = 'info@roatek.com.ng';
        //call mailable
        //pass data
        mail::to($admin_email)->send(new Contactmail($data));
        
         return redirect('/contact')->with('success', 'Your Message Sent Succesfully');


    }   
}     

<P>THEN  CREATE A DATABASE </P>
create Db name from .env and then create same Db name @ localhost/phpmyadmin
after that create migration field of your form then migrate with

php artisan migrate


NOW SSEND A Message FROM THE CONTACT FORM IT WITLL BE SAVING INTO THE DATABASE

NEXT is to create a webmail login to your cpanel and create one after Succesfully
created it will sent you an SMTP mail in your inbox then go to your .env and set it up like this;

MAIL_MAILER=smtp
MAIL_HOST=mail.roatek.com.ng    ---> this
MAIL_PORT= 587                  --->and this will be sent to your mail inbox
MAIL_USERNAME=info@roatek.com.ng    --->web mail you create
MAIL_PASSWORD=yourwebmailpassword here   -->password your use to create it
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=info@roatek.com.ng
MAIL_FROM_NAME="${APP_NAME}


then go to Config/mail.php and do the same like this

'mailers' => [
        'smtp' => [
            'transport' => 'smtp',
            'host' => env('MAIL_HOST', 'mail.roatek.com.ng'),
            'port' => env('MAIL_PORT', 465),
            'encryption' => env('MAIL_ENCRYPTION', 'SSL'),
            'username' => env('MAIL_USERNAME'),
            'password' => env('MAIL_PASSWORD'),
            'timeout' => null,
            'auth_mode' => null,
        ],

        'ses' => [
            'transport' => 'ses',
        ],

        'mailgun' => [
            'transport' => 'mailgun',
        ],

        'postmark' => [
            'transport' => 'postmark',
        ],

        'sendmail' => [
            'transport' => 'sendmail',
            'path' => '/usr/sbin/sendmail -bs',
        ],

        'log' => [
            'transport' => 'log',
            'channel' => env('MAIL_LOG_CHANNEL'),
        ],

        'array' => [
            'transport' => 'array',
        ],
    ],
 <p> NOW OPEN TERMINAL WRITE THIS CODE</p>

 php artisan make:mail Contactmail --markdown.contactMail

 it will create a Mail folder inside APP with Contactmail.php file inside it
 will also create email Folder inside VIEW and contactMail.blade.php

 then go inside the Contactmail in App and write this <code></code>

 <?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contactmail extends Mailable
{
    //pass the data
    public $data;

    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        $this->data=$data; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //define our subjectline

        $subject = $this->data['name'] .'send message on '.$this->data['comment'];  

        return $this->markdown('emails.contactmail')
        ->subject($subject)
        ->with([
            'data'=>$this->data
        ])
        ;
    }
}


also go inside the  VIEW /email/ contactmail.blade.php and write this <code></code>

@component('mail::message')
<b>Name</b>{{$data['name']}}
<b>Email</b>{{$data['email']}}
<b>Phone Number</b>{{$data['phone']}}
<b>Message</b>{{$data['comment']}}

The body of your message.

@component('mail::button', ['url' => 'mailto:'.$data['email']])
Reply to {{$data['name']}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

now go to your .env and change your app name like this

APP_NAME="Roatek Technologies"
APP_ENV=local
APP_KEY=base64:fvXoVi46Urb+IQiDjxhH04JjL1Z/r46zkSiQ5ploKw8=
APP_DEBUG=true
APP_URL=http://localhost


now go to your Contact form and send a message you will receive it in your database also an email will be sent to your webmail

thats how we sent send from contact form and recieve the email
    
