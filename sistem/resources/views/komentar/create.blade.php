@extends('admin.index')
@section('content')

<section id="main-content">
      <section class="wrapper ">
        <h3><i class="fa fa-angle-right"></i>Create Artikel</h3>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
            <div class="col-md-12">
            @include('admin.utils.notif')
            </div>
            </div>
              <div class="card-header">
                Tambah Komentar
              </div>
              <div class="card-body">
                <form action="{{url('admin/komentar')}}" method="post">
                  @csrf
                  <div class="form group">
                      <label for="" class="control-label">Nama</label>
                      <input type="text" class="form-control" name="nama">
                  </div>
                  <div class="form group">
                      <label for="" class="control-label">Komentar</label>
                      <input type="text" class="form-control" name="komentar">
                  </div>
                  <button class="btn btn-dark float-right "><i class="fa fa-save"></i>Simpan</button>
                </form>
              </div>
          </div>>
        </div>
      </div>
      </section>
      <!-- /wrapper -->
    </section>
    @endsection