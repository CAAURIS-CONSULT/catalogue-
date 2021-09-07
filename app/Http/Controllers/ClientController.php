<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\clienthasservice;
use DB;

class ClientController extends Controller
{
    public function index()
    {
        $servClt = DB::table('clienthasservices')
            ->join('services', 'services.id','=', 'clienthasservices.services_id')
            ->join('clients', 'clients.id','=', 'clienthasservices.clients_id')
            ->select('clients.*','services.*','clienthasservices.*')
            ->orderBy('clienthasservices.id','desc')
            ->get();
    	return view('pages/index')->with('servClt',$servClt);
    }
}
