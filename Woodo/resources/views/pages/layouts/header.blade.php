<div class="header_section">
    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-12 col-lg-3">
                <div class="logo"><img src="images/logo.png"></div>
            </div>
            <div class="col-sm-4 col-lg-5">
                 <div class="menu-area">
                    <nav class="navbar navbar-expand-lg ">
                        <!-- <a class="navbar-brand" href="#">Menu</a> -->
                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link active" href="home">Home<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="company">Company</a>
                                </li>
                                <li class="#" href="#">
                                    <a class="nav-link" href="{{ url('/funitures') }}">Furnitures</a>
                                </li>
                                <li class="nav-item" href="#">
                                    <a class="nav-link" href="{{ url('/contact-us') }}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="col-sm-8 col-lg-4">
             @guest
                <div class="togle_3">
                    <div class="left_main" style="display: flex;">
                        
                            @if (Route::has('login'))
                                <li class="nav-item " >
                                    <a class="nav-link" href="{{ route('login') }}"style="color: white;" >{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"style="color: white;">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <div class="togle_3">
                    <div class="left_main" style="display: flex;">
                        
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
									
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
								<a class="dropdown-item"  href="#">
                                   Profile
                                </a>
                                   
                                </div>
                            </li>
                           

                    </div>
                    <div class="middle_main">
                      <li class="cart-icon"><a href="#">
                                  <img src="images/shopping-bag.png">
                                </a>
                                <div class="cart-hover" style="margin-right: 8rem;">
                                <div id="chages-item">
                                
									<div class="select-items">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="si-text" style="width: 14rem;">
                                                        <div class="product-selected">
                                                            <p>₫60.00 x 1</p>
                                                            <h6>Kabino Bedside Table</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                  <td class="close-td"><img src="images/delete@4x.png" alt="" style="max-width: 20%;"></td>

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                     <span>total:</span>
                                        <h5>₫120.00</h5>
                                    </div>
                                </div>

                                       
                                    <div class="select-button">
                                        <a href="#" class="primary-btn view-card">VIEW CARD</a>
                                        <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div>
                            </li>
                    </div>
                                            @endguest
                </div>
            </div>

        </div>
    </div>
    <!-- banner section start -->
    <div class="banner_section layout_padding">
        <div class="container-fluid">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-sm-1">
                                <p class="number_tetx">02/3</p>
                                <div class="line"><img src="images/linr-icon.png"></div>
                                <p class="number_tetx">05/4</p>
                                <div class="left_img"><img src="images/img-2.png"></div>
                            </div>
                            <div class="col-sm-5">
                                <h1 class="furniture_text">2019</h1>
                                <h1 class="trends_text">WE</h1>
                                <h1 class="furniture_text">BRING</h1>
                                <P class="lorem_text">After a long time of research and research, we want to give our users the best experience that we can. </P>
                                  <a href="about"> <button class="more_bt">MORE INFO</button></a>
                                <a href="funitures" ><button class="furniture_bt">FURNITURE</button></a>
                            </div>
                            <div class="col-sm-6">
                                <div><img src="images/img-1.png"></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-1">
                                <p class="number_tetx">12/6</p>
                                <div class="line"><img src="images/linr-icon.png"></div>
                                <p class="number_tetx">12/12</p>
                                <div class="left_img"><img src="images/img-2.png"></div>
                            </div>
                            <div class="col-sm-5">
                                <h1 class="furniture_text">2020</h1>
                                <h1 class="trends_text">OUR</h1>
                                <h1 class="furniture_text">PRODUCTS</h1>
                                <P class="lorem_text">Our products were eventually replicated in all cities, even on the small alleys in Viet Nam 
 </P>
                                  <a href="about"> <button class="more_bt">MORE INFO</button></a>
                                <a href="funitures" ><button class="furniture_bt">FURNITURE</button></a>
                            </div>
                            <div class="col-sm-6" style="text-align: center;">
                                <div><img src="images/about-img.png"></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-1">
                                <p class="number_tetx">02/3/2019</p>
                                <div class="line"><img src="images/linr-icon.png"></div>
                                <p class="number_tetx">forever !!!</p>
                                <div class="left_img"><img src="images/img-2.png"></div>
                            </div>
                            <div class="col-sm-5">
                                <h1 class="furniture_text">2021</h1>
                                <h1 class="trends_text">YOU</h1>
                                <h1 class="furniture_text">ME</h1>
                                <P class="lorem_text">Let us be the one to bring you the best furniture products to your family </P>
                                  <a href="about"> <button class="more_bt">MORE INFO</button></a>
                                <a href="funitures" ><button class="furniture_bt">FURNITURE</button></a>
                            </div>
                            <div class="col-sm-6">
                                <div><img src="images/img-1.png"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </div>
</div>
