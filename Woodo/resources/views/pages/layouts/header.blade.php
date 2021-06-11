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
                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                {{--                                <li class="nav-item active">--}}
                                {{--                                    <a class="nav-link active" href="index.html">Home<span--}}
                                {{--                                            class="sr-only">(current)</span></a></li>--}}
                                {{--                                <li class="nav-item">--}}
                                {{--                                    <a class="nav-link" href="about.html">About</a></li>--}}
                                {{--                                <li class="nav-item">--}}
                                {{--                                    <a class="nav-link" href="company.html">Company</a></li>--}}

                                @foreach(config('menus.frontend.navbar') as $item)
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route($item['href'])}}">{{$item['label']}}</a></li>
                                @endforeach


                                <li class="#" href="#">
                                    <a class="nav-link" href="furnitures.html">Furnitures</a></li>
                                <li class="nav-item" href="#">
                                    <a class="nav-link" href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="col-sm-8 col-lg-4">
                <div class="togle_3">
                    <div class="left_main">
                        <div class="menu_main">
                            <a href="#"><i class="fa fa-fw fa-user"></i> Login / Register</a>
                        </div>
                    </div>
                    <div class="middle_main">
                        <div class="shoping_bag"><img src="images/search-icon.png"></div>
                    </div>
                    <div class="right_main">
                        <div class="togle_main"><img src="images/shopping-bag.png"></div>
                    </div>
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
                                <p class="number_tetx">02/3</p>
                                <div class="left_img"><img src="images/img-2.png"></div>
                            </div>
                            <div class="col-sm-5">
                                <h1 class="furniture_text">2019</h1>
                                <h1 class="trends_text">TRENDS</h1>
                                <h1 class="furniture_text">FURNITURE</h1>
                                <P class="lorem_text">It is a long established fact that a reader will be distracted by
                                    the readable content of a page when looking at its layout. The point of using Lorem
                                    Ipsum is that it has a more-or-less normal distribution of letters, </P>
                                <button class="more_bt">MORE INFO</button>
                                <button class="furniture_bt">FURNITURE</button>
                            </div>
                            <div class="col-sm-6">
                                <div><img src="images/img-1.png"></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-1">
                                <p class="number_tetx">02/3</p>
                                <div class="line"><img src="images/linr-icon.png"></div>
                                <p class="number_tetx">02/3</p>
                                <div class="left_img"><img src="images/img-2.png"></div>
                            </div>
                            <div class="col-sm-5">
                                <h1 class="furniture_text">2019</h1>
                                <h1 class="trends_text">TRENDS</h1>
                                <h1 class="furniture_text">FURNITURE</h1>
                                <P class="lorem_text">It is a long established fact that a reader will be distracted by
                                    the readable content of a page when looking at its layout. The point of using Lorem
                                    Ipsum is that it has a more-or-less normal distribution of letters, </P>
                                <button class="more_bt">MORE INFO</button>
                                <button class="furniture_bt">FURNITURE</button>
                            </div>
                            <div class="col-sm-6">
                                <div><img src="images/img-1.png"></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-1">
                                <p class="number_tetx">02/3</p>
                                <div class="line"><img src="images/linr-icon.png"></div>
                                <p class="number_tetx">02/3</p>
                                <div class="left_img"><img src="images/img-2.png"></div>
                            </div>
                            <div class="col-sm-5">
                                <h1 class="furniture_text">2019</h1>
                                <h1 class="trends_text">TRENDS</h1>
                                <h1 class="furniture_text">FURNITURE</h1>
                                <P class="lorem_text">It is a long established fact that a reader will be distracted by
                                    the readable content of a page when looking at its layout. The point of using Lorem
                                    Ipsum is that it has a more-or-less normal distribution of letters, </P>
                                <button class="more_bt">MORE INFO</button>
                                <button class="furniture_bt">FURNITURE</button>
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
