<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProvinsiModel extends Model
{
    protected $table = 'provinsi';
    protected $fillable = [
    	'nama',
    ];
}