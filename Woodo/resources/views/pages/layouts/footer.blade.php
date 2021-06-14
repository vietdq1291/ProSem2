<div class="footer_section layout_padding">
    <div class="container">
        <div class="row">


            <div class="col-md-12">
                <div class="useful_main border_right0">
                    <h2 class="useful_text">Menus</h2>
                 <ul>
                            <li><a href="/home">Home</a></li>
                            <li><a href="/about">About </a></li>
                            <li><a href="/company">Company</a></li>
                            <li><a href="/funitures">Furnitures</a></li>
                            <li><a href="/contact-us">Contact Us</a></li>
                        </ul>

                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 ">
                <h2 class="useful_text">Address</h2>
                <ul class="location">
                    <li><img src="images/map-icon.png">Locations</li>

                    <li><img src="images/call-icon.png"><a href="company.html">+71 89078493</a></li>
                    <li><img src="images/email-icon.png"><a href="furnitures.html">demo@gmail.com</a></li>

                </ul>


            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 ">
                <h2 class="useful_text">Newsletter</h2>
                <div class="form-group">
                    <input type="text" class="address_send" placeholder="Address" name="Email">
                    <button class="subscribe_bt">Subscribe</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer section end -->
<!-- copyright section start -->


    </div>
    <!-- copyright section end -->

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"> </script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

<!-- 
    RTL version
-->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.rtl.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.rtl.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.rtl.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.rtl.min.css"/>
    <script>
        $(document).ready(function () {
                    $(".fancybox").fancybox({
                        openEffect: "none",
                        closeEffect: "none"
                    });
                });
        function AddCart(id){
        	$.ajax({
        		url:'AddCart/'+id,
        		type:'GET',
        	}).done(function(response){
        		$("#chages-item").empty();
   				$("#chages-item").html(response);
			alertify.success('Thêm Thành Công');

        	});
      
        }
        
        $("#chages-item").on("click",".si-close i",function(){
        	$.ajax({
        		url:'DeleteItem/'+$(this).data("id"),
        		type:'GET',
        	}).done(function(response){
        		$("#chages-item").empty();
   				$("#chages-item").html(response);
	  		alertify.success('Xóa Thành Công');
        	});
        });
        
        
    
                
                
                

    </script>
