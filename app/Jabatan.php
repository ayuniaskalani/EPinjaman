<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $fillable=['jabatan_id','jabatanname','jabatanalamat','jabatantel','jabatanemail'];

    protected $table='jabatan';

    public $timestamps=false;

    public function user()
    {
    	return $this->belongsTo(\App\User::class,'id','user_id');
    }

   

}
