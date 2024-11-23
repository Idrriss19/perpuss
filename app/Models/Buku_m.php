<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku_m extends Model
{
    use HasFactory;

    protected $table = 'mst_buku';
    protected $primaryKey = 'ID_Buku';
    protected $fillable = ['Judul', 'Pengarang', 'Kategori'];
    public $timestamps = false;

    function opt_buku(){
        $result = self::select('ID_Buku', 'Judul', 'Pengarang')
                ->get();
        foreach ($result as $row){
            $rowBuku[$row->ID_buku]=$row->Judul." - ".$row->Pengarang;
        }
        return $rowBuku;
    }
}
