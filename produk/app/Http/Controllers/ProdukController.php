<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukModel;

class ProdukController extends Controller
{
    public function __construct()
    {
        $this->ProdukModel = new ProdukModel();
    }
    public function index()
    {   
        // $data = [
        //     'guru' => $this->GuruModel->AllData()
        // ];
        $data = ['produk' => $this->ProdukModel->readdata()];
        return view('v_produk',$data);
    }

    public function detail($id_produk)
    {
        $data = ['produk' => $this->ProdukModel->detaildata($id_produk)];
        return view('v_detailproduk',$data);
    }

    public function add()
    {
        return view('v_addproduk');
    }
    public function insert()
    {
        Request()->validate([
                'nama_produk' => 'required',
                'keterangan' => 'required',
                'harga' => 'required',
                'jumlah' => 'required'
                
        ],
        [
            'nama_produk.required' => 'nama produk wajib diisi !!',
            'keterangan.required' => 'keterangan wajib diisi !!',
            'harga.required' => 'harga wajib diisi !!',
            'jumlah.required' => 'jumlah wajib diisi !!'
        ]);

        $data = [
            'nama_produk' => Request()->nama_produk,
            'keterangan' => Request()->keterangan,
            'harga' => Request()->harga,
            'jumlah' => Request()->jumlah
            
        ];
        
        $this->ProdukModel->addData($data);
        return redirect()->route('produk')->with('pesan','Data Berhasil Ditambahkan');
    }

    public function edit($id_produk)
        {
            if(!$this->ProdukModel->detaildata($id_produk)){
                abort(404);
            }
            $data = ['produk' => $this->ProdukModel->detaildata($id_produk)];
            return view('v_editproduk',$data);
        }
        public function update($id_produk)
    {
        Request()->validate([
            'nama_produk' => 'required',
            'keterangan' => 'required',
            'harga' => 'required',
            'jumlah' => 'required'
            
    ],
    [
        'nama_produk.required' => 'nama produk wajib diisi !!',
        'keterangan.required' => 'keterangan wajib diisi !!',
        'harga.required' => 'harga wajib diisi !!',
        'jumlah.required' => 'jumlah wajib diisi !!'
    ]);

    $data = [
        'nama_produk' => Request()->nama_produk,
        'keterangan' => Request()->keterangan,
        'harga' => Request()->harga,
        'jumlah' => Request()->jumlah
        
    ];
            $this->ProdukModel->editData($id_produk,$data);
        
        return redirect()->route('produk')->with('pesan','Data Berhasil Diupdate');
    }
    public function delete($id_produk)
    {
        $this->ProdukModel->deleteData($id_produk);
        return redirect()->route('produk')->with('pesan','Data Berhasil Dihapus');
    }
}
