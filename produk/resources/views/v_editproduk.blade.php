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
    <h1>Ini adalah halaman Edit Guru</h1>
    <form action="/produk/update/{{$produk->id}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="container">
        <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="">Nama Produk</label>
              <input type="text" class="form-control" name="nama_produk" value="{{$produk->nama_produk}}">
              <div class="text-danger">
                @error('nama_produk')
                {{$message}}
                @enderror
              </div>
            </div>
            <div class="form-group">
              <label for="">Keterangan</label>
              <textarea name="keterangan" id="" cols="30" rows="10" class="form-control" >{{$produk->keterangan}}</textarea>
              <div class="text-danger">
                @error('keterangan')
                {{$message}}
                @enderror
              </div>
            </div>

            <div class="form-group">
              <label for="">Harga</label>
              <input type="text" class="form-control" name="harga" value="{{$produk->harga}}">
              <div class="text-danger">
                @error('harga')
                {{$message}}
                @enderror
              </div>
            </div>

            <div class="form-group">
              <label for="">Jumlah</label>
              <input type="text" class="form-control" name="jumlah" value="{{$produk->jumlah}}">
              <div class="text-danger">
                @error('jumlah')
                {{$message}}
                @enderror
              </div>
              </div>
              <div class="form-group">
                <button class="btn btn-primary btn-sm">Simpan</button>
              </div>
            </div>
            <br><br>

          </div>
        </div>
      </div>
    </form>
  </div>
  <!-- /.box-body -->
  <div class="box-footer">
    Footer
  </div>
  <!-- /.box-footer-->
</div>
@endsection()