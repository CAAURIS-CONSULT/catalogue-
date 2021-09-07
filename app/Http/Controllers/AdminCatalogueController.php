<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\clienthasservice;
use App\Model\image;
use App\Model\client;
use App\Model\service;
use Route;
class AdminCatalogueController extends Controller
{


  // Propriee (attribu de la classe)
    //  !!!!!!!!!!!!!!!!  Lien des image  !!!!!!!!!!!!!!!! 
      public $folderLink;
    //  !!!!!!!!!!!!!!!!  Lien des image  !!!!!!!!!!!!!!!! 

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
       $this->folderLink = env('LIEN_FILE');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function addCart()
    {
        return view('admin.catalogue.addCart');
    }

    public function saveCart(Request $request)
    {

    			  // dd($request);
    	$lien = $this->folderLink;
	        // Récupération images 
	          if(!empty($request->file('imageP')))
	          {
	          	// Récupération du name file  
	          	 $imageP = $request->file('imageP');

	          	// dossier de stockage
	          	 $path = $imageP->store('catalogue','public');

	          	// Chemin d'accès de l'image 
	          	 $imageP = $lien.$path;
	          }else{ $imageP = "";} 	
    	$info = [ 'clients_id'=>$request->client, 
    				'services_id'=>$request->service,
    				'imgPrincipale'=>$imageP];

       	 $servClt = clienthasservice::create($info);
 			         
        // Récupération images 
          if(!empty($request->file('image2')))
          {

          	// Récupération du name file  
          	 $img2 = $request->file('image2');

          	// dossier de stockage
          	 $path = $img2->store('catalogue','public');

          	// Chemin d'accès de l'image 
          	 $image2 = $lien.$path;

          	
          	 $imageTab = ['nom'=>'image2', 
          	 			'lien'=> $image2, 
          	 			'datePublication'=> date('d/m/Y'),
          	 			'serviceClt_id'=> $servClt->id,];

          	 image::create($imageTab);

          	
          }

          if(!empty($request->file('image3')))
	          {
	          	// Récupération du name file  
	          	 $img2 = $request->file('image3');

	          	// dossier de stockage
	          	 $path = $img2->store('catalogue','public');

	          	// Chemin d'accès de l'image 
	          	 $image2 = $lien.$path;

	          	 $imageTab = ['nom'=>'image3', 
	          	 			'lien'=> $image2, 
	          	 			'datePublication'=> date('d/m/Y'),
	          	 			'serviceClt_id'=> $servClt->id,];

	          	 image::create($imageTab);
	          	
	          }

          if(!empty($request->file('image4')))
	          {
	          	// Récupération du name file  
	          	 $img2 = $request->file('image4');

	          	// dossier de stockage
	          	 $path = $img2->store('catalogue','public');

	          	// Chemin d'accès de l'image 
	          	 $image2 = $lien.$path;
	          	 $imageTab = ['nom'=>'image4', 
	          	 			'lien'=> $image2, 
	          	 			'datePublication'=> date('d/m/Y'),
	          	 			'serviceClt_id'=> $servClt->id,];
	          	 image::create($imageTab);

	          }

       return redirect('/listCart');
    }

    public function listCart(Request $request)
    {
       $clts = clienthasservice::latest()->paginate(10);
       // $url_actuel = url()->current();      GET THE CURRENT URL 
       // $url_actuel = Route::current()->uri();  GET THE CURRENT URL 'S URI 
       $url_actuel = Route::current()->uri();
       return view('admin.catalogue.listCart')->with('clts',$clts)->with('url_actuel',$url_actuel);
    }
}
