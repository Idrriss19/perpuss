<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MstBuku extends Model
{
    use HasFactory;

    protected $table = 'mst_buku';

    protected $fillable = ['Judul', 'Pengarang', 'Kategori'];

}
