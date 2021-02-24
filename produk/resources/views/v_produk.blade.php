@extends('layout.v_template')
@section('title','Produk')
@section('content')
<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <h1>Ini adalah halaman Produk</h1>
          
<a href="/produk/add" class="btn btn-sm btn-primary">Tambah Produk</a>
@if(session('pesan'))
<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="icon fa fa-check"></i> Success!
                {{session('pesan')}}.
              </div>
@endif
         <table class="table table-striped">
           <tr>
             <th>No</th>
             <th>Nama Produk</th>
             <th>Keterangan</th>
             <th>Harga</th>
             <th>Jumlah</th>
             <th>Action</th>
           </tr>
           <?php $no = 1; ?>
           @foreach($produk as $data)
           <tr>
           <td>{{$no++}}</td> 
             <td>{{$data->nama_produk}}</td>
             <td>{{$data->keterangan}}</td>
             <td>{{$data->harga}}</td>
             <td>{{$data->jumlah}}</td>
             <td>
               <a href="/produk/edit/{{$data->id}}" class="btn btn-warning btn-sm">Edit</a>
               <a href="/produk/delete/{{$data->id}}" class="btn btn-danger btn-sm">Delete</a>
               <a href="/produk/detail/{{$data->id}}" class="btn btn-success btn-sm">Detail</a>
              </td>
           </tr>
           @endforeach
         </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
@endsection()