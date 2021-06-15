@extends('layouts.page')

@section('content')
<div class="our_furniture_section layout_padding">
    <div class="container">
        <h1 class="about_taital">Our <span style="background-color: #fee421; color: #fff; padding: 0px 5px;">Funitures</span></h1>
        <p class="market_text">Bring Solutions To Everyone </p>
    </div>
</div>
@if($product != null)

@endif
    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
            
                <div class="col-lg-12 order-1 order-lg-2">
                    <div class="product-list">
                        <div class="row">
                             @foreach($product as $prd)
                             
                            <div class="col-lg-4 col-sm-6" >
                            
                                <div class="product-item" >
  							

   	                             <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="product/{{$prd->id}}.jpg" alt="">
                                        <div class="icon">
                                            <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
                                        </div>
                                  
                                        <ul>
 							 @guest
                          	  @if (Route::has('login'))
                          	  
     							<a class="nav-link" href="{{ route('login') }}"style="color: white; background-color: #FABF1C" >Sign in to continue 
</a>
                          	  @endif
                       			 @else
                       			 			
                                            <li class="quick-view"><a onclick="hide({{$prd->id}})" style="background-color: #F9C11B" >Detail
                                            </a></li>
                                            <li class="quick-view"><a href="/contact-us" style="background-color: #F9C11B" >Contact us 
                                            </a></li>
                                            
                                           
							@endguest
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name">{{$prd->pr_name}}</div>
                                        <a href="#">
                                            <h5>{{$prd->pr_name}}</h5>
                                        </a>
							
                                    </div>
                                </div>
                            </div>
                            </div>
                    
                            <div class="detail col-md-4 wow fadeInDown" id="{{$prd->id}}">
                            	<h1> {{$prd->pr_name}}</h1>
                            	<h4> {{$prd->pr_description}}</h4>
                            	<h2> {{$prd->pr_author}}</h2>
                            </div>
                                  @endforeach

                  	 @guest
                          	  @if (Route::has('login'))
                          	  
     							<a class="nav-link" href="{{ route('login') }}"style="color: white; background-color: #FABF1C" >Sign in to continue 
</a>
                          	  @endif
                       			 @else
                                          <div class="col-md-12">
                                 <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="?page=1">1</a></li>
                                    <li class="page-item"><a class="page-link" href="?page=2">2</a></li>
                                    <li class="page-item"><a class="page-link" href="?page=3">3</a></li>
                      				<li class="page-item"><a class="page-link" href="?page=4">4</a></li>
                             
                                  </ul>
                    	</div>
							@endguest
                    	
                   
                        
                    </div>
                    </div>
                </div>
            </div>
            	
            
            </div>
        
    </section>
    <!-- Product Shop Section End -->

    <!-- Js Plugins -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.zoom.min.js"></script>
    <script src="assets/js/jquery.dd.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
 <style>
    .pagination{
       float: right;
    }
    .page-link{
        color: black;
    }
    .detail{
        display: none;
        background-color: #FABF1C;
    }
    .fa {
  font-size: 50px;
  cursor: pointer;
  user-select: none;
}

.fa:hover {
  color: darkblue;
}
</style>
<script>


function hide(id) {
  var x = document.getElementById(id);
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }

}

function myFunction(x) {
  x.classList.toggle("fa-thumbs-down");
}
</script>


@stop
