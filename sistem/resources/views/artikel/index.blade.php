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
                <b>DATA ARTIKEL</b>
                <a href="{{url('admin/artikel/create')}}" class="btn btn-info float-right"><i class="fa fa-plus"></i>Tambah Data</a>
              </div>
              <div class="card-body">
                <table class="table">
                  <thead>
                    <th>No</th>
                    <th>Aksi</th>
                    <th>Nama</th>
                    <th>Judul</th>
                    <th>Artikel</th>
                  </thead>
                  <tbody>
                    @foreach($list_artikel as $artikel)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>
                          <div class="btn-group">
                            <a href="{{url('admin/artikel', $artikel->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                            <a href="{{url('admin/artikel', $artikel->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                            @include('admin.utils.delete', ['url' => url('admin/artikel', $artikel->id)])
                          </div>
                      </td>
                      <td>{{$artikel->nama}}</td>
                      <td>{{$artikel->judul}}</td>
                      <td>{{$artikel->artikel}}</td>
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
    