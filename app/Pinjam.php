<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    protected $primaryKey='pinjam_id'; //primary key

    protected $fillable=['pinjamstatus','pinjam_id','tarikhmula','tarikhakhir','pinjamsebab','quantiti'];  //attribut yg blh isi

    protected $table='pinjam';	//table name

    public $timestamps=false;

    public function user()
    {
    	return $this->belongsTo(\App\User::class,'id','user_id');
    }

     public function peralatan()
    {
    	return $this->belongsTo(\App\Peralatan::class,'id','peralatan_id');
    }

    protected $hidden = [
    	'user_id','peralatan_id',
    ];
}
