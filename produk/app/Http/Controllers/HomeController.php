<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {   
        $data =[
            'nama' => 'Nina Fani Sarafina',
            'alamat' => 'Galekan'
        ];
        return view('v_home',$data);
    }

    public function about($id)
    {
        return 'ini halaman about'.$id;
    }
}
