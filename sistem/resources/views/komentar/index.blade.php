@extends('admin.index')
@section('content')

    <section id="main-content">
      <section class="wrapper ">
      <div class="container">
        <div class="row mt">
          <div class="col-md-12">
              <div class="row">
              <div class="col-md-12">
              @include('admin.utils.notif')
              </div>
              </div>
            <div class="card">
              <div class="card-header">
               <b>DATA KOMENTAR</b>
                <a href="{{url('admin/komentar/create')}}" class="btn btn-info float-right"><i class="fa fa-plus"></i>Tambah Data</a>
              </div>
              <div class="card-body">
                <table class="table">
                  <thead>
                    <th>No</th>
                    <th>Aksi</th>
                    <th>Nama</th>
                    <th>Komentar</th>
                  </thead>
                  <tbody>
                    @foreach($list_komentar as $komentar)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>
                          <div class="btn-group">
                            <a href="{{url('admin/komentar', $komentar->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                            @include('admin.utils.delete', ['url' => url('admin/komentar', $komentar->id)])
                          </div>
                      </td>
                      <td>{{$komentar->nama}}</td>
                      <td>{{$komentar->komentar}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      </section>
      <!-- /wrapper -->
    </section>
  @endsection
    