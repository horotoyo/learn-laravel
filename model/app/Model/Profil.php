<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
	protected $table = 'profil';

    protected $fillable = [
    	'depan', 'belakang', 'alamat',
    ];

    public function getNamaAttribute()
    {
    	$out 	= "{$this->depan} {$this->belakang}";
    	$me 	= strtoupper($out);

    	return $me;
    }
}
