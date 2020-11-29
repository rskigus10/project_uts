@extends('template.base')

@section('content')
<section id="blog-single">
        <div class="container">
                <!-- Portfolio item slider start -->
            <div class="">
                <div class="portfolio-slider-wrapper">
                    <ul id="portfolio-slider">
                       <img src="{{url('public')}}/_srclient/images/tim/{{$artikel->gambar}}" alt="photo" class="img-responsive"/>
                    </ul>
                </div>
                <div class="blog-desc">
                    <h4>{{$artikel->judul}}</h4>
                    <p>
                    {{$artikel->artikel}} 
                    </p>
                </div>
                <hr>
                <div class="clearfix"></div>
                    <div class="tags1">
                        <p>Tags: </p>
                        <a href="#">Web</a>
                        <a href="#">graphics</a>
                        <a href="#">Seo</a>
                    </div>
                    <!-- <div class="clearfix"></div> -->
                    <div class="share1">
                       <h4>Share this :</h4>
                        <ul class="social-contact list-inline">
                            <li> <a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li> <a href="#"><i class="fa fa-google-plus"></i> </a></li>
                            <li><a href="#"> <i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"> <i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
            <div class="clearfix"></div>
            <hr>
            <div class="clearfix"></div>
            <!-- comments start -->
                <div class="comments">
                    <h4>Comments</h4>
                    <hr>
                    <ul class="media-list">
                    @foreach($list_komentar as $komentar)
                        <li class="media">
                            <a class="media-left" href="#">
                                <img src="{{url('public')}}/_srclient/images/tim/{{$artikel->gambar}}" alt="alt" class="img-responsive">
                            </a>
                          <div class="media-body">
                            <h4 class="media-heading">{{$komentar->nama}}<span><i>{{$komentar->created_at}}</span></i></h4>
                            <p> {{$komentar->komentar}}</p>
                            <a href="#">Reply</a>
                          </div>
                        </li>
                    @endforeach
                    </ul>       
                </div>
            <!-- comments End -->
            <div class="blog-form">
                <h4>Leave for a <span>comment </span></h4>
                <hr>
               <form action="{{url('single')}}" method="post">
               @csrf
               <div class="form-group">
                    <div class="col-md-12">
                        <input type="text" class="form-control" placeholder="Nama" name="nama">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <textarea name="komentar" id="" cols="30" rows="7" class="form-control" placeholder="Komentar Anda"></textarea>
                    </div>
                 </div>
                 <div class="form-group">
                     <div class="col-md-12">
                         <div class="text-center">
                               <button class="btn btn-main "> Kirim </button>
                         </div>
                     </div>
                 </div>
               </form>
               
            </div>
        </div>  <!-- blog footer end -->  
                    
                        <div class="clearfix"></div>
                        <div class="right-tags">
                             <h4 >Tags</h4>
                             <hr>
                            <div class="footer_menu tags">
                                <a href="#"> Design</a>
                                <a href="#"> User Interface</a>
                                <a href="#"> Graphics</a>
                                <a href="#"> Web Design</a>
                                <a href="#"> Development</a>
                                <a href="#"> Asp.net</a>
                                <a href="#"> Bootstrap</a>
                                <a href="#"> Joomla</a>
                                <a href="#"> SEO</a>
                                <a href="#"> Wordepress</a>
                            </div>
                        </div>
                    </div> <!-- blog sidebar end -->
                </div>
            </div>
            <!-- sidebar end -->

            </div><!-- Portfolio item row end -->
        </div><!-- Portfolio item container end -->
</section>

@endsection