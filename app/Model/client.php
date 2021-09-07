<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    protected $fillable = [ 'nomClt', 'entreprise', 'numero', 'created_at', 'updated_at', 'date'];
}
