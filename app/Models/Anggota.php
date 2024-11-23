<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    
        protected $table = 'mst_anggota';
        protected $primaryKey = 'ID_Anggota';
        public $timestamps = false;
    
        protected $fillable = ['nim', 'nama', 'progdi'];

    function opt_anggota(){
        $result = self::select('ID_Anggota', 'nim', 'nama')
                ->get();
        foreach ($result as $row){
            $rowAnggota[$row->ID_anggota]=$row->nim." - ".$row->nama;
        }
        return $rowAnggota;
    }
    
}
