<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjam_m extends Model
{
    use HasFactory;

    protected $table = 'pinjam';
    protected $primaryKey = 'ID_Pinjam';
    public $timestamps = true;

    function insert_record($data){
        $result = self::insert($data);
        return $result;
    }
}
