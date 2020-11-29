<section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="feature_header text-center">
                        <h3 class="feature_title">Our <b>Blog</b></h3>
                        <h4 class="feature_sub">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </h4>
                        <div class="divider"></div>
                    </div>
                </div>
                <!-- Col-md-12 End -->
            </div>
            <div class="row">
                <div class="blog-timeline">
                    <div id="owl-blog" class="owl-carousel owl-theme">
                    @foreach($list_artikel as $artikel)
                        <div class="item ">
                            <div class="single_blog">
                                <div class="post_img text-center">
                                    <a href="{{url('artikel', $artikel->id)}}"><img src="{{url('public')}}/_srclient/images/tim/{{$artikel->gambar}}" alt="" class="img-responsive"></a>
                                </div>
                                <a href="{{url('artikel', $artikel->id)}}">
                                    <h4>{{$artikel->judul}} |<span><i> {{$artikel->created_at}}</span></i></h4>
                                </a>
                                <p>{{$artikel->artikel}}</p>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
                <!-- blog Timeline End -->
            </div>
        </div>
    </section>