<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\client;
use Route;
use Mail;
use App\Mail\ContactUs;
class AdminClientController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function addClt()
    {
        return view('admin.client.addClt');
    }

    public function saveClt(Request $request)
    {
        $this->validate($request,
            [
                "nomClt" =>"required",
            ]);

    	$info = [ 'nomClt'=>$request->nomClt,
    				 'entreprise'=> $request->entrepriseClt, 
    				 'numero'=> $request->contactClt,
    				 'date'=> $request->date];

       client::create($info);

       return redirect('/listClt');
    }

    public function listClt(Request $request)
    {
       $clts = client::latest()->paginate(10);
       // $url_actuel = url()->current();      GET THE CURRENT URL 
       // $url_actuel = Route::current()->uri();  GET THE CURRENT URL 'S URI 
       $url_actuel = Route::current()->uri();
       return view('admin.client.listClt')->with('clts',$clts)->with('url_actuel',$url_actuel);
    }

    public function contactUs(rEquest $request)
    {
      $cltNom =$request->name;
      $mail =$request->email;
      $obj =$request->subject;
      $text =$request->message;
        // Mail::to(env('MAIL_TO_ADDRESS'))->send(new ContactUs($mail,$cltNom,$obj,$text));

    return "MESSAGE SOUMIS AVEC SUCCES";
    }
}
