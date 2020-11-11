<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','jawatan','icnumber','telnumber','jabatan_id',        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function pinjam()
    {
        return $this->hasMany(\App\Pinjam::class,'user_id','id');
    }

    public function jabatan()
    {
        return $this->hasMany(\App\Jabatan::class,'user_id','id');
    }

    //  protected $hidden = [
    //     'jabatan_id',
    // ];
}
