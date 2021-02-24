<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProdukModel extends Model
{
//  public function AllData()
//  {
//      return [
//         [
//             'nip' => '12345',
//             'nama' => 'Nina',
//             'mapel' => 'Matematika'
//         ],
//         [
//             'nip' => '12346',
//             'nama' => 'Tyo',
//             'mapel' => 'Biologi'
//         ],
//         [
//             'nip' => '12347',
//             'nama' => 'Mia',
//             'mapel' => 'English'
//         ]
//     ];
//  }

 public function readdata()
 {
     return DB::table('produk')->get();
 }
 public function detaildata($id_produk)
 {
     return DB::table('produk')->where('id',$id_produk)->first();
 }

 public function addData($data)
 {
     DB::table('produk')->insert($data);
 }
 public function editData($id_produk,$data)
 {
     DB::table('produk')->where('id',$id_produk)->update($data);
 }
 public function deleteData($id_produk)
 {
    DB::table('produk')->where('id',$id_produk)->delete();
 }
}
