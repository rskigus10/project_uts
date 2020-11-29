@extends('admin.index')
@section('content')
   
    <section id="main-content">
      <section class="wrapper ">
        <h3><i class="fa fa-angle-right"></i>Detail Artikel</h3>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <div class="card-body">
                <h3><b>{{$artikel->judul}}</b></h3>
                <hr>
                <img src="{{url('public')}}/_srclient/images/tim/{{$artikel->gambar}}" width="400px" alt="">
                <p><b> Artikel dibuat : {{$artikel->created_at}}  |  Diedit :  {{$artikel->updated_at}}</b></p>
                <p>
                  {{$artikel->artikel}} 
                </p>
              </div>
          </div>
        </div>
      </div>
      </section>
      <!-- /wrapper -->
    </section>
   @endsection