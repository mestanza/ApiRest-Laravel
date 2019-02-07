<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;



class User extends Authenticatable
{

    const VERIFICADO = '1';
    const NO_VERIFICADO = '0';

    const ADMIN = '1';
    const NO_ADMIN = '0';

    protected $table = 'users';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password', 
        'verified', 
        'verification_token', 
        'admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 
        'remember_token',
        'verification_token'
    ];

    public function verificado(){
        return $this::verified == VERIFICADO;
    }

    public function administrador(){
        return $this::admin == ADMIN;
    }

    public static function generarVerifToken(){
        return str_random(40);
    }
}
