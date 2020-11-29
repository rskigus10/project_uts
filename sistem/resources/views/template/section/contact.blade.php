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