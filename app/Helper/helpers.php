<?php


use App\Model\client;
use App\Model\service;
use App\Model\image;


if (!function_exists('allClt')) 
{
	function allClt()
	{
		$clts = client::all();
		// dd($clts);
		return $clts;
	}
}



if (!function_exists('allServ')) 
{
	function allServ()
	{
		$clts = service::all();
		// dd($clts);
		return $clts;
	}
}

if (!function_exists('getClient')) 
{
	function getClient($idClt)
	{
		$clts = client::find($idClt);
		return $clts;
	}
}


if (!function_exists('getService')) 
{
	function getService($idServ)
	{
		$serv = service::find($idServ);
		// dd($clts);
		return $serv;
	}
}
	// *********************** START ADMIN HELPER FILE *****************************

		// include('admin_helpers.php');
	// *********************** END ADMIN HELPER FILE *****************************


if (!function_exists('switchTypeFront')) 
{
	function switchTypeFront($type)
	{
		switch ($type) {
			case 'APP':
				$classe = 'col-lg-4 col-md-6 portfolio-item filter-app';
				break;

			case 'WEB':
				$classe = 'col-lg-4 col-md-6 portfolio-item filter-web';
				break;

			case 'CAMP':
				$classe = 'col-lg-4 col-md-6 portfolio-item filter-card';
				break;

			default:
				$classe = 'col-lg-4 col-md-6 portfolio-item filter-card';
				break;
		}
		return $classe;
	}
}


if (!function_exists('getImg')) 
{
	function getImg($id)
	{

		$img =image::where('serviceClt_id','=',$id)->get();
		return $img;
	}
}

if (!function_exists('mailClt')) 
{
	function mailClt($mail,$cltNom,$obj,$text)
	{

		mail('bouahubertmbo@gmail.com', "VISITOR CATALOGUE",$text);
		return 1;
	}
}







?>