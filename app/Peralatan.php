<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peralatan extends Model
{
    
    protected $fillable=['peralatanjenis','peralatansiri'] ; //attribut yg blh isi

    protected $table='peralatan';	//table name

    public $timestamps=false;

    public function pinjam()
    {
    	return $this->hasMany(\App\Pinjam::class,'peralatan_id','id'); //fk dlu bru pk
    }
}
