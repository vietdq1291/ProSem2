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
                        	
                       <h2> Cảm ơn bạn đã gửi phản hồi tới chúng tôi. <br> Chúng tôi sẽ gửi phản hồi tới bạn sớm nhất</h2>
                    </div>
                </div>
                 </form>
            </div>
        </div>
    </div>
</div>
@stop
