@extends('admin.index')
@section('content')

    <section id="main-content">
      <section class="wrapper ">
        <h3><i class="fa fa-angle-right"></i>artikel</h3>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                Edit Artikel
              </div>
              <div class="card-body">
                <form action="{{url('admin/artikel', $artikel->id)}}" method="post">
                  @csrf
                  @method('put')
                  <div class="form group">
                      <label for="" class="control-label">Nama</label>
                      <input type="text" class="form-control" name="nama" value="{{$artikel->nama}}">
                  </div>
                  <div class="form group">
                      <label for="" class="control-label">Judul</label>
                      <input type="text" class="form-control" name="judul" value="{{$artikel->judul}}">
                  </div>
                  <div class="form group">
                      <label for="" class="control-label">Artikel</label>
                      <textarea name="artikel" class='form-control'>{{$artikel->artikel}}</textarea>
                  </div>
                  <div class="form group">
                      <label for="" class="control-label">Gambar</label>
                      <input type="file" class="form-control" name="gambar">
                  </div>
                  <button class="btn btn-dark float-right "><i class="fa fa-save"></i>Simpan</button>
                </form>
              </div>
            </div>
          </div>>
        </div>
      </div>
      </section>
      <!-- /wrapper -->
    </section>
 @endsection
    