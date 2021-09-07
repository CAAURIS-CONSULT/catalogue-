<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class clienthasservice extends Model
{
	protected $fillable = [ 'clients_id', 'services_id','imgPrincipale'];
}
