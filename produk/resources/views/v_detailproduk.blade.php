@extends('layout.v_template')
@section('content')
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Title</h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fa fa-minus"></i></button>
      <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
        <i class="fa fa-times"></i></button>
    </div>
  </div>
  <div class="box-body">
    <h1>Ini adalah halaman Detail Guru</h1>
    <div class="col-lg-6">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
            <label for="">Nama Produk</label>
            <input type="text" disabled value="{{$produk->nama_produk}}" class="form-control">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
            <label for="">Keterangan</label>
            <textarea name="keterangan" id="" cols="30" rows="10" class="form-control" disabled>{{$produk->keterangan}}</textarea>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
            <label for="">Harga</label>
            <input type="text" disabled value="{{$produk->harga}}" class="form-control">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
            <label for="">Jumlah</label>
            <input type="text" disabled value="{{$produk->jumlah}}" class="form-control">
            </div>
          </div>
          
        </div>
      </div>
              <a href="/produk" class="btn btn-sm btn-success">Kembali</a>
    </div>
  </div>
  <!-- /.box-body -->
  <div class="box-footer">
    Footer
  </div>
  <!-- /.box-footer-->
</div>
@endsection()