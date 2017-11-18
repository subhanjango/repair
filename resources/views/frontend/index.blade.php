<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

@include('frontend.shared.head')
<body>
<!--[if lt IE 9]>
<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
<![endif]-->

<div class="preloader">
<div class="preloader_image"></div>
</div>
<!-- wrappers for visual page editor and boxed version of template -->
<div id="canvas">
<div id="box_wrapper">
@include('frontend.shared.header')
<!-- template sections -->

<section class="intro_section page_mainslider ds black">
<div class="flexslider">
<ul class="slides">
<li>
<img src="{{asset('frontend/images/slide01.jpg')}}" alt="">
<div class="container">
<div class="row">
<div class="col-sm-12 text-center">
<div class="slide_description_wrapper">
<div class="slide_description">
<div class="intro-layer to_animate" data-animation="fadeInLeft">
<h2>Why call a geek, when
<br> You can call a Professional?</h2>
</div>
<div class="intro-layer to_animate" data-animation="fadeInRight">
<a href="{{url('/book-a-service')}}" class="theme_button inverse topmargin_30">Book A Service</a>
</div>
</div>
<!-- eof .slide_description -->
</div>
<!-- eof .slide_description_wrapper -->
</div>
<!-- eof .col-* -->
</div>
<!-- eof .row -->
</div>
<!-- eof .container -->
</li>

<li>
<img src="{{asset('frontend/images/slide02.jpg')}}" alt="">
<div class="container">
<div class="row">
<div class="col-sm-12 text-center">
<div class="slide_description_wrapper">
<div class="slide_description">
<div class="intro-layer to_animate" data-animation="fadeInLeft">
<h2>Why call a geek, when
<br> You can call a Professional?</h2>
</div>
<div class="intro-layer to_animate" data-animation="fadeInRight">
<a href="{{url('/book-a-service')}}" class="theme_button inverse topmargin_30">Book A Service</a>
</div>
</div>
<!-- eof .slide_description -->
</div>
<!-- eof .slide_description_wrapper -->
</div>
<!-- eof .col-* -->
</div>
<!-- eof .row -->
</div>
<!-- eof .container -->
</li>

<li>
<img src="{{asset('frontend/images/slide03.jpg')}}" alt="">
<div class="container">
<div class="row">
<div class="col-sm-12 text-center">
<div class="slide_description_wrapper">
<div class="slide_description">
<div class="intro-layer to_animate" data-animation="fadeInLeft">
<h2>Why call a geek, when
<br> You can call a Professional?</h2>
</div>
<div class="intro-layer to_animate" data-animation="fadeInRight">
<a href="{{url('/book-a-service')}}" class="theme_button inverse topmargin_30">Book A Service</a>
</div>
</div>
<!-- eof .slide_description -->
</div>
<!-- eof .slide_description_wrapper -->
</div>
<!-- eof .col-* -->
</div>
<!-- eof .row -->
</div>
<!-- eof .container -->
</li>

</ul>
</div>
<!-- eof flexslider -->
</section>

<section class="ds ms2 columns_margin_0 page-contacts overlapped">
<div class="container">
<div class="row">
<div class="col-md-4 col-sm-8 col-sm-offset-2 col-md-offset-0">
<div class="theme_background top-color-border contact-item">
<h5 class="roboto">
Call to us
</h5>
<p>
If your device breaks, don't panic. Call to us and we’ll solve your problem.
</p>
<div class="media highlight">
<div class="media-left">
<i class="fa fa-phone"></i>
</div>
<div class="media-body">
<span class="semibold">{{ $Setting->company_mobile }}</span>
</div>
</div>
</div>
</div>
<div class="col-md-4 col-sm-8 col-sm-offset-2 col-md-offset-0">
<div class="theme_background top-color-border contact-item two">
<h5 class="roboto">
Send it to us
</h5>
<p>
We offer free postage with all mobile phone &amp; table repairs.
</p>
<div class="media highlight">
<div class="media-left">
<i class="fa fa-map-marker"></i>
</div>
<div class="media-body">
<span class="semibold">{!! $Setting->company_address !!}</span>
</div>
</div>
</div>
</div>
<div class="col-md-4 col-sm-8 col-sm-offset-2 col-md-offset-0">
<div class="theme_background top-color-border contact-item three">
<h5 class="roboto">
Contact us
</h5>
<p>
If your device breaks, don't panic. Email to us and we’ll solve your problem.
</p>
<div class="media highlight">
<div class="media-left">
<i class="fa fa-envelope"></i>
</div>
<div class="media-body">
<span class="semibold">{{ $Setting->company_email }}</span>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="ls table_section table_section_md section_padding_top_130 section_padding_bottom_90">
<div class="container">
<div class="row">
<div class="col-lg-4 col-lg-offset-1 col-md-5 text-center to_animate" data-animation="fadeInRightMedium">
<h1 class="section_header"><b>Seamless services for 
digital devices ,
local repair and support for the smart devices at your location.
Curious to know more about us?
</b></h1>
<hr class="divider_2_30 main_bg_color">

<a href="{{url('/about')}}" class="theme_button topmargin_30 bottommargin_40">Click Right Here</a>
</div>
<div class="col-lg-6 col-lg-push-1 col-md-7 to_animate" data-animation="rotateLeft">
<div id="container1" class="twentytwenty-container twentytwenty-about">
<!-- The after image is first -->
<img src="{{asset('frontend/images/after.png')}}" alt="" />
<!-- The before image is last -->
<img src="{{asset('frontend/images/before.png')}}" alt="" />
</div>
</div>
</div>
</div>
</section>

<section class="ds ms2 section_padding_top_80 section_padding_bottom_90 page_services parallax">
<div class="container tab-style1">
<div class="row">
<div class="col-sm-12 text-center">
<div class="inline-block tab-content-wrap">
<div class="tab-content no-border">
<div class="tab-pane fade active" id="video-tab1">
<div class="desctop-format video-container">
<img src="{{asset('frontend/images/imac.png')}}" alt="">
<div class="embed-responsive embed-responsive-16by9 popupVid">
<a href="https://www.youtube.com/embed/M4POV5jnEQA" class="embed-placeholder">
<img src="{{asset('frontend/images/video1.jpg')}}" alt="">
</a>
</div>
</div>
</div>
<div class="tab-pane fade" id="video-tab2">
<div class="laptop-format video-container">
<img src="{{asset('frontend/images/macbook.png')}}" alt="">
<div class="embed-responsive embed-responsive-16by9 popupVid">
<a href="https://www.youtube.com/embed/M4POV5jnEQA" class="embed-placeholder">
<img src="{{asset('frontend/images/video2.jpg')}}" alt="">
</a>
</div>
</div>
</div>
<div class="tab-pane fade" id="video-tab3">
<div class="tablet-format video-container">
<img src="{{asset('frontend/images/ipad2.png')}}" alt="">
<div class="embed-responsive embed-responsive-3by2 popupVid">
<a href="https://www.youtube.com/embed/M4POV5jnEQA" class="embed-placeholder">
<img src="{{asset('frontend/images/video3.jpg')}}" alt="">
</a>
</div>
</div>
</div>
<div class="tab-pane fade" id="video-tab4">
<div class="smartphone-format video-container">
<img src="{{asset('frontend/images/iphone.png')}}" alt="">
<div class="embed-responsive embed-responsive-3by2 popupVid">
<a href="https://www.youtube.com/embed/M4POV5jnEQA" class="embed-placeholder">
<img src="{{asset('frontend/images/video4.jpg')}}" alt="">
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<ul class="row nav topmargin_50" role="tablist" id="myTab">
<li class="active col-md-3 col-sm-6">
<div class="vertical-item nav-item text-center">
<div class="media-links">
<a href="#video-tab1" role="tab" data-toggle="tab" class="abs-link"></a>
</div>
<div class="item-content">
<i class="gadget-desktop highlight"></i>
<h4 class="small-heading">
<a href="service-single.html">Computer repair</a>
</h4>
<p>
Whether you are a business or an individual, We welcome you all.
</p>
</div>
</div>
</li>
<li class="col-md-3 col-sm-6">
<div class="vertical-item nav-item text-center">
<div class="media-links">
<a href="#video-tab2" role="tab" data-toggle="tab" class="abs-link"></a>
</div>
<div class="item-content">
<i class="gadget-laptop highlight"></i>
<h4 class="small-heading">
<a href="service-single.html">Laptop repair</a>
</h4>
<p>
Laptops can come in all different shapes and sizes. We fix all.
</p>
</div>
</div>
</li>
<li class="col-md-3 col-sm-6">
<div class="vertical-item nav-item text-center">
<div class="media-links">
<a href="#video-tab3" role="tab" data-toggle="tab" class="abs-link"></a>
</div>
<div class="item-content">
<i class="gadget-tablet highlight"></i>
<h4 class="small-heading">
<a href="service-single.html">Tablet repair</a>
</h4>
<p>
Tablets offer much more flexibility and convenience , We Too !
</p>
</div>
</div>
</li>
<li class="col-md-3 col-sm-6">
<div class="vertical-item nav-item text-center">
<div class="media-links">
<a href="#video-tab4" role="tab" data-toggle="tab" class="abs-link"></a>
</div>
<div class="item-content">
<i class="gadget-smartphone highlight"></i>
<h4 class="small-heading">
<a href="service-single.html">Smartphone repair</a>
</h4>
<p>
If you own a smartphone, you probably depend on it daily.We've got your back
</p>
</div>
</div>
</li>

</ul>
</div>
</section>

<section class="ls section_padding_top_130 section_padding_bottom_65 table_section table_section_md">
<div class="container">
<div class="row">
<div class="col-md-5 col-lg-6 text-center to_animate" data-animation="rotateRight">
<img src="{{asset('frontend/images/iphone2.png')}}" alt="">
</div>
<div class="col-md-7 col-lg-6 to_animate" data-animation="fadeInLeftMedium">
<h2 class="section_header text-center bottommargin_50">Why Choose Us</h2>
<div class="panel-group bottommargin_60" id="accordion1">

<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion1" href="#collapse1" class="media">
<span class="media-left media-middle">
<span class="panel_button"></span>
</span>
<span class="media-body media-middle">How long does it take to repair your phone</span>
</a>
</h4>
</div>
<div id="collapse1" class="panel-collapse collapse in">
<div class="panel-body">
Data storage devices such as internal and external hard drives and disk arrays. Technicians involved in system administration might also work with networking hardware, including routers, switches, fiber optics, and wireless networks.
</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion1" href="#collapse2" class="collapsed media">
<span class="media-left media-middle">
<span class="panel_button"></span>
</span>
<span class="media-body media-middle">What guarantee will you be provided</span>
</a>
</h4>
</div>
<div id="collapse2" class="panel-collapse collapse">
<div class="panel-body">
Data storage devices such as internal and external hard drives and disk arrays. Technicians involved in system administration might also work with networking hardware, including routers, switches, fiber optics, and wireless networks.
</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion1" href="#collapse3" class="collapsed media">
<span class="media-left media-middle">
<span class="panel_button"></span>
</span>
<span class="media-body media-middle">What is included in the laptop repair</span>
</a>
</h4>
</div>
<div id="collapse3" class="panel-collapse collapse">
<div class="panel-body">
Data storage devices such as internal and external hard drives and disk arrays. Technicians involved in system administration might also work with networking hardware, including routers, switches, fiber optics, and wireless networks.
</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion1" href="#collapse4" class="collapsed media">
<span class="media-left media-middle">
<span class="panel_button"></span>
</span>
<span class="media-body media-middle">How do you know if you need the LCD repair</span>
</a>
</h4>
</div>
<div id="collapse4" class="panel-collapse collapse">
<div class="panel-body">
Data storage devices such as internal and external hard drives and disk arrays. Technicians involved in system administration might also work with networking hardware, including routers, switches, fiber optics, and wireless networks.
</div>
</div>
</div>

<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion1" href="#collapse5" class="collapsed media">
<span class="media-left media-middle">
<span class="panel_button"></span>
</span>
<span class="media-body media-middle">Viruses recovery software</span>
</a>
</h4>
</div>
<div id="collapse5" class="panel-collapse collapse">
<div class="panel-body">
Data storage devices such as internal and external hard drives and disk arrays. Technicians involved in system administration might also work with networking hardware, including routers, switches, fiber optics, and wireless networks.
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</section>

<section class="cs parallax section_padding_top_110 section_padding_bottom_80 page_testimonials">
<div class="container">
<div class="row">
<div class="col-sm-12 text-center">
<h2 class="section_header bottommargin_70">What Clients Say</h2>
<div class="owl-carousel testimonials-owl-carousel" data-margin="0" data-dots="true">
@foreach($Testimonials as $Testimonials)
<blockquote class="blockquote-item text-center">
<div class="item-media">
<img style="width: 50%;" src="{{asset('images/'.$Testimonials->image)}}" alt="">
</div>
<div class="item-meta">
<h4>{{$Testimonials->client_name}}</h4>
<p class="black">{{$Testimonials->designation}}</p>
</div>
<hr class="divider_2_30 main_bg_color">
<p>{!!$Testimonials->review!!}</p>
</blockquote>
@endforeach
</div>
</div>
</div>
</div>
</section>

<section class="ds ms2 section_padding_top_110 section_padding_bottom_90 page_pricing parallax">
<div class="container">
<div class="row bottommargin_15">
<div class="col-sm-12 text-center">
<h2 class="section_header">Packages</h2>
</div>
</div>

<div class="row columns_margin_bottom_30">
@foreach($Pricing as $Pricing)
<div class="col-lg-3 col-sm-6">
<ul class="price-table style2 theme_background2 with_color_border">
<li class="plan-name">
<h3 class="highlight">{{$Pricing->package_name}}</h3>
</li>
<li class="plan-price">
<span class="grey">$</span>
<span class="grey">{{$Pricing->package_price }}</span>
<p>one-fee payment</p>
</li>
<li class="features-list">
<ul class="grey">
@foreach($Pricing->offering as $Offering)
<li>{{ $Offering->offering }}</li>
@endforeach
</ul>
</li>
<li class="call-to-action">
<a href="#" onClick="placeOrder({{$Pricing->id}})" class="theme_button inverse">Order now</a>
</li>
</ul>
</div>
@endforeach
</div>
</div>
</section>




@include('frontend.shared.footer')



</div>
<!-- eof #box_wrapper -->
</div>
<!-- eof #canvas -->

@include('frontend.shared.script')

</body>


<!-- Mirrored from webdesign-finder.com/html/repairme/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Nov 2017 22:17:16 GMT -->
</html>