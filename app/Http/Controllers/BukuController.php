<?php

namespace App\Http\Controllers;
use App\Models\Buku_m;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    var $data;

    public function __construct(){
        $this->data['optkategori'] = [
            '' => '-Pilih Salah Satu-',
            'novel' => 'Novel',
            'komik' => 'Komik',
            'kamus' => 'Kamus',
            'program' => 'Pemrograman',
        ];
    }

    public function index(Buku_m $buku)
    {
        $data = [
            'query' => $buku->paginate(5),
            'optkategori' => $this->data['optkategori']
        ];
        return view('buku.list', $data);
    }
    
    public function add_new(){
        $data = [
            'is_update' => 0,
            'optkategori' => $this->data['optkategori'] 
        ]; 
        return view('buku.add', $data);
    }

    public function save(Request $request)
    {
        $validated = $request->validate([
            'Judul' => 'required',
            'Pengarang' => 'required',
            'Kategori' => 'required'
        ]);

        $data = [
            'Judul' => $request->input('Judul'),
            'Pengarang' => $request->input('Pengarang'),
            'Kategori' => $request->input('Kategori'),
        ];
    
        $is_update = $request->input('is_update');
    
        if ($is_update == 0) {
            Buku_m::create($data);
            return redirect('buku');
        } else {
            $id = $request->input('id');
            Buku_m::where('ID_Buku', $id)->update($data);
            return redirect('buku');
        }
    }
    

    public function edit($id, Buku_m $buku)
    {
        $data = [
            'query' => Buku_m::find($id), 
            'is_update' => 1,
            'optkategori' => $this->data['optkategori']
        ];
        return view('buku.edit', $data);
    }

    public function delete($id)
    {
        Buku_m::destroy($id);
        return redirect('buku');
        
    }
    
}
