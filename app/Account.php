<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    //
    protected $table = 'tb_user';
    public $timestamps = false;
    
    protected $fillable = [
        'email_username', 'nama_user', 'password',
    ];
}
