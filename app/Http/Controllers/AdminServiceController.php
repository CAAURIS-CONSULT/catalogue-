<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\service;
use Route;
class AdminServiceController extends Controller
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

    public function addServ()
    {
        return view('admin.service.addServ');
    }

    public function saveServ(Request $request)
    {
        $this->validate($request,
            [
                "type" =>"required",
                "nomServ" =>"required",
                "date" =>"required",
            ]);

 		$info = ['type'=>$request->type,
 				 'nom'=>$request->nomServ,
 				 'date'=>$request->date,];

       service::create($info);
       return redirect('/listServ');
    }

    public function listServ(Request $request)
    {
       $clts = service::latest()->paginate(10);
       // $url_actuel = url()->current();      GET THE CURRENT URL 
       // $url_actuel = Route::current()->uri();  GET THE CURRENT URL 'S URI 
       $url_actuel = Route::current()->uri();
       return view('admin.service.listServ')->with('clts',$clts)->with('url_actuel',$url_actuel);
    }
}
