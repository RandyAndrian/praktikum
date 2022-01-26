<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $data = [
            'photo' => 'images/foto.jpg',
            'nama' => 'Muhamad Randy Andrian',
            'lahir' => 'Tempat, Tanggal Lahir',
            'hobi' => 'Main Komputer',
            'lahir' => 'Bandung, 28 April 2003',
            'jk' => 'Laki-laki',
            'hobi' => 'Main Komputer',
            'agama' => 'islam',
            'alamat' => 'Kampung baru',
            'telp' => '0895601096303',
            'email' => 'andrianrandy9@gmail.com',
        ];
        return view('welcome', $data);
    }

    public function list()
    {
        return view('list');
    }
}
