<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    protected $fillable = ['nom', 'lien', 'datePublication', 'serviceClt_id'];
}
