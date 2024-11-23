<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class AnggotaController extends Controller
{
    var $data;

    public function __construct(){
        $this->data['optprogdi'] = [
            '' => '-Pilih Salah Satu-',
            'ti' => 'Teknik Informatika',
            'si' => 'Sistem Informasi',
            'ik' => 'Ilmu Komunikasi',
            'pariwisata' => 'Pariwisata',
        ];
    }

    public function index(Anggota $anggota)
    {
        $data = [
            'query' => $anggota->paginate(5),
            'optprogdi' => $this->data['optprogdi']
        ];
        return view('anggota.list', $data);
    }
    
    public function add_new(){
        $data = [
            'is_update' => 0,
            'optprogdi' => $this->data['optprogdi'] 
        ]; 
        return view('anggota.add', $data);
    }

    public function save(Request $request)
    {
        $validated = $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'progdi' => 'required'
        ]);

        $data = [
            'nim' => $request->input('nim'),
            'nama' => $request->input('nama'),
            'progdi' => $request->input('progdi'),
        ];
    
        $is_update = $request->input('is_update');
    
        if ($is_update == 0) {
            Anggota::create($data);
            return redirect('anggota');
        } else {
            $id = $request->input('id');
            Anggota::where('ID_Anggota', $id)->update($data);
            return redirect('anggota');
        }
    }
    

    public function edit($id, Anggota $anggota)
    {
        $data = [
            'query' => Anggota::find($id), 
            'is_update' => 1,
            'optprogdi' => $this->data['optprogdi']
        ];
        return view('anggota.edit', $data);
    }

    public function delete($id)
    {
        Anggota::destroy($id);
        return redirect('anggota');
    }
    
}
