<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User_m extends Authenticatable
{
    use Notifiable;

    protected $table = 'user'; 
    protected $primaryKey = 'id'; 
    public $timestamps = false;

    protected $fillable = [
        'username', 
        'password', 
    ];


    public function username()
    {
        return 'username'; 
    }
}

