<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IsiUserManual extends Model
{
    use HasFactory;

    protected $table = 'user';
    protected $fillable = ['username', 'password'];
    public $timestamps = false;
}
