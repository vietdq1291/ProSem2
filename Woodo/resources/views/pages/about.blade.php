@extends('pages.master')

@section('content')
    <div class="layout_padding about_section ">
        <div class="container">
            <h1 class="about_taital">About <span
                    style="background-color: #fee421; color: #fff; padding: 0px 5px;">Us</span></h1>
           @foreach($articles as $art)
            <div class="about_bg" style="    margin-bottom: 2rem;">
                <div class="row">
                    <div class="col-md-8">
                        <p class="about_long_text">{{$art->ar_description}} </p>
                        <button class="about_bt">ABOUT MORE</button>
                    </div>
                    <div class="col-md-4">
                        <div class="table_img"><img src="images/{{$art->ar_title}}.png"></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
