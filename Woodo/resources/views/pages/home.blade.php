@extends('pages.master')

@push('css')
@endpush

    
@section('content')
    <div class="layout_padding about_section ">
        <div class="container">
            <h1 class="about_taital">About <span
                    style="background-color: #fee421; color: #fff; padding: 0px 5px;">Us</span>
            </h1>
            <p class="market_text">Bring you to us</p>
            <div class="about_bg">
                <div class="row">
                    <div class="col-md-8">
                        <p class="about_long_text">With many years of experience in manufacturing, trading, designing and constructing interior products for space: Home furniture, restaurant, cafe, hotel, bar...Woodo Furniture understands the needs and the tastes of consumers, our team always focuses on investing and designing quality products to bring a comfortable, cozy and convenient living space for users.</p>
                                                          
                            <a href="about"><button class="about_bt">ABOUT MORE</button></a>
                    </div>
                    <div class="col-md-4">
                        <div class="table_img"><img src="images/about-img.png" ></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section end -->
    <!-- our furniture section start -->
    <div class="our_furniture_section layout_padding">
        <div class="container">
            <h1 class="about_taital">Our <span
                    style="background-color: #fee421; color: #fff; padding: 0px 5px;">Funitures</span></h1>
            <p class="market_text">These are our famous products </p>
        </div>
    </div>
    <div class="our_section_2">
        <div class="row">
            <div class="col-sm-5">
                <div class="images_bt">
                    <div class="image_left">
                       <a href="funitures"> <button class="seemore_bt">SEE MORE</button></a>
                    </div>
                    <div class="image_right">
                        <div class="image_9"><img src="images/img-9.png"></div>
                        <div class="new_text">NEW DESIGN</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="image"><img src="images/img-4.png"></div>
            </div>
            <div class="col-sm-3">
                <div class="image"><img src="images/img-5.png"></div>
            </div>
        </div>
        <div class="images_section_2">
            <div class="row">
                <div class="col-sm-4">
                    <div class="image_6"><img src="images/img-6.png"></div>
                </div>
                <div class="col-sm-4">
                    <div class="image_6"><img src="images/img-7.png"></div>
                </div>
                <div class="col-sm-4">
                    <div class="image_6"><img src="images/img-8.png"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- our furniture section end -->
    <!-- testi monial section start -->
    <div class="testi_monial_section layout_padding">
        <div class="container">
            <div id="my_carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <h1 class="testi_monila_text">Our <span
                                style="background-color: #fee421; color: #fff; padding: 0px 5px;">Team</span></h1>
                        <div class="testimonila_inner">
                            <div class="testing_img"><img src="images/viet.jpg" style="max-width: 13rem"></div>
                            <h2 class="helina_text">TEAM LEAD</h2>
                            <p class="dolor_text">This is the captain, commander, and leader of a group of two or more people. The group works according to a pre-determined common goal. </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <h1 class="testi_monila_text">Our <span
                                style="background-color: #fee421; color: #fff; padding: 0px 5px;">Team</span></h1>
                        <div class="testimonila_inner">
                            <div class="testing_img"><img src="images/vinh.jpg" style="max-width: 13rem"></div>
                            <h2 class="helina_text">SUB LEAD</h2>
                            <p class="dolor_text">Vice-captain, deputy, vice-president, etc. These people have roles and positions lower than Leader and higher than other members of the team.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <h1 class="testi_monila_text">Our <span
                                style="background-color: #fee421; color: #fff; padding: 0px 5px;">Team</span></h1>
                        <div class="testimonila_inner">
                            <div class="testing_img"><img src="images/ha.jpg" style="max-width: 13rem"></div>
                            <h2 class="helina_text">SUB LEAD</h2>
                            <p class="dolor_text">Vice-captain, deputy, vice-president, etc. These people have roles and positions lower than Leader and higher than other members of the team.</p>
                        </div>
                    </div>
                      <div class="carousel-item">
                        <h1 class="testi_monila_text">Our <span
                                style="background-color: #fee421; color: #fff; padding: 0px 5px;">Team</span></h1>
                        <div class="testimonila_inner">
                            <div class="testing_img"><img src="images/hh.jpg" style="max-width: 13rem"></div>
                            <h2 class="helina_text">SUB LEAD</h2>
                            <p class="dolor_text">Vice-captain, deputy, vice-president, etc. These people have roles and positions lower than Leader and higher than other members of the team.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#my_carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#my_carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <!-- testi monial section end -->
    <!-- contact section start -->
    <div class="layout_padding contact_section">
        <div class="container">
            <div class="contact_section_inner">
                <div class="contact_main">
                <form action="{{ route('sendcontac.store')}}" method="POST">
             @csrf
                <h1 class="contact_text">Contact Us</h1>
                <div class="input_main">
               
                    <div class="row">
                        <div class="col-sm-6 col-lg-3" >
                            <div class="form-group">
                            	
                                <input type="text" class="name" placeholder="Name" name="name" style="     width: 100%; ">
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3" >
                            <div class="form-group">
                                <input type="text" class="phone" placeholder="Phone Number" name="phone" style="     width: 100%; ">
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3" >
                            <div class="form-group">
                                <input type="text" class="email" placeholder="Email" name="email" style="     width: 100%; ">
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3" >
                            <div class="social_icon">
                                <ul>
                                    <li><img src="images/fb-icon.png"></li>
                                    <li><img src="images/twitter-icon.png"></li>
                                    <li><img src="images/in-icon.png"></li>
                                    <li><img src="images/instagram-icon.png"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="massage_box">
                    <div class="row">
                        <div class="col-sm-8" style="     width: 100%;   padding-top: 1rem; ">
                            <form action="/action_page.php">
                                <div class="form-group">
                                    <textarea class="message" placeholder="Massage" rows="5" id="message" name="message" style="     width: 100%; height: 3rem;"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-4">
                            <button class="send_bt">Send</button>
                        </div>
                       
                    </div>
                </div>
                 </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('js')
@endpush
