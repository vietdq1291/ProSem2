@extends('layouts.page')

@section('content')
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
                        <div class="col-sm-8" style="     width: 100%;   padding-top: 1rem;">
                            <form action="/action_page.php">
                                <div class="form-group">
                                    <textarea class="message" placeholder="Massage" rows="5" id="message" name="message" style="     width: 100%;height: 3rem; "></textarea>
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
@stop
