<?php

namespace App\Http\Controllers;

use App\Models\Clas;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiswaController extends Controller
{
    // mengarahkan ke halaman index
    public function index() {
        // siapkan data siswas
        $siswas = User::all();

        return view('siswa.index', compact('siswas'));
    }

    //mengarahkan ke halaman create
    public function create() {

        // siapkan data kelas
        $clases = Clas::all();

        return view('siswa.create', compact('clases'));
    }

    // fungsi store data siswa
    public function store(Request $request){
        //lakukan validasi data
        $validated= $request->validate([
            'name'              =>'required',
            'nisn'              =>'required | unique:users,nisn',
            'alamat'            =>'required', 
            'email'             =>'required | unique:users,email',
            'password'          =>'required',
            'no_handphone'      =>'required | unique:users,no_handphone',
        ]);



        //siapa data yang akan di masukan
        $datasiswa_store =[
                    'clas_id'       =>$request->kelas,
                    'photo'         =>'foto.jpg',
                    'name'          =>$request-> name,
                    'nisn'          =>$request-> nisn,
                    'alamat'        =>$request-> alamat,
                    'email'         =>$request-> email,
                    'password'      =>$request-> password,
                    'no_handphone'  =>$request-> no_handphone,
        ];

       $datasiswa_store['photo'] = $request->file('foto')->store('profilesiswa', 'public');
       
        //masukan data ke dalam tabel user
        User::create($datasiswa_store);
        
        //arahkan user ke halaman beranda
        return redirect('/');
    }
}
 